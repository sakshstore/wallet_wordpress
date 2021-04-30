<?php

/*
Plugin Name: Saksh Wallet custom
Version:  1.0
Plugin URI: #
Author: susheelhbti
Author URI: http://www.aistore2030.com/
Description: Saksh Wallet custom

*/

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}


function aistore_plugin_table_install()
{
    global $wpdb;
    
    
    
    
    $table_aistore_wallet_transactions = "CREATE TABLE   IF NOT EXISTS  " . $wpdb->prefix . "aistore_wallet_transactions  (
   	transaction_id  bigint(20)  NOT NULL  AUTO_INCREMENT,
  user_id bigint(20)  NOT NULL,
   type   varchar(100)  NOT NULL,
   amount  decimal(10,2)    NOT NULL,
  balance  decimal(10,2)    NOT NULL,
    description  text  NOT NULL,
   currency  varchar(100)   NOT NULL,
   created_by  	bigint(20) NOT NULL,
   date  timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (transaction_id)
) ";
    
    
    
   
    $table_aistore_wallet_balance = "CREATE TABLE   IF NOT EXISTS  " . $wpdb->prefix . "aistore_wallet_balance  (
     	id  bigint(20)  NOT NULL  AUTO_INCREMENT,
   	transaction_id  bigint(20)  NOT NULL,
  user_id bigint(20)  NOT NULL,
  balance  decimal(10,2)    NOT NULL,
   currency  varchar(100)   NOT NULL,
   created_by  	bigint(20) NOT NULL,
   date  timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (id)
) ";
    
    
    
    
     
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    
    dbDelta($table_aistore_wallet_transactions);
    
    dbDelta($table_aistore_wallet_balance);
    

    
   


}
register_activation_hook(__FILE__, 'aistore_plugin_table_install');

include_once dirname(__FILE__) . '/admin/balance_list.php';

include_once dirname(__FILE__) . '/admin/transaction_list.php';
include_once dirname(__FILE__) . '/admin/debit_credit.php';
include_once dirname(__FILE__) . '/admin/user_balance.php';


function debit($user_id, $amount, $currency, $description)
{
    global $wpdb;
    $type = "debit";

    $old_balance = balance($user_id, $currency);

    $new_amount = $old_balance - $amount;

    $q1 = $wpdb->prepare("INSERT INTO {$wpdb->prefix}aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES (%s,%s, %s,%s,%s,%s )", array(
        $amount,
        $description,
        $type,
        $new_amount,
        $user_id,
        $currency
    ));

    $wpdb->query($q1);
    $transaction_id = $wpdb->insert_id;

    $wpdb->query($wpdb->prepare("UPDATE {$wpdb->prefix}aistore_wallet_balance
    SET balance = '%s',transaction_id=%d  WHERE user_id = '%d' and currency=%s", $new_amount, $transaction_id, $user_id, $currency));
}

function credit($user_id, $amount, $currency, $description)
{
    global $wpdb;
    $type = "credit";

    $old_balance = balance($user_id, $currency);

    $new_amount = $old_balance + $amount;

    $q1 = $wpdb->prepare("INSERT INTO {$wpdb->prefix}aistore_wallet_transactions  (amount  ,    description,type, balance, user_id, currency ) VALUES (%s,%s, %s,%s,%s,%s )", array(
        $amount,
        $description,
        $type,
        $new_amount,
        $user_id,
        $currency
    ));

    $wpdb->query($q1);
    $transaction_id = $wpdb->insert_id;

    $wpdb->query($wpdb->prepare("UPDATE {$wpdb->prefix}aistore_wallet_balance
    SET balance = '%s',transaction_id=%d  WHERE user_id = '%d' and currency=%s", $new_amount, $transaction_id, $user_id, $currency));

}

function balance($user_id, $currency)
{
    global $wpdb;
    $w = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->prefix}aistore_wallet_balance WHERE  user_id=%s and currency =%s", $user_id, $currency));

    if (is_null($w))
    {
   $balance=0;
$transaction_id=0;
        $q1 = $wpdb->prepare("INSERT INTO {$wpdb->prefix}aistore_wallet_balance  (transaction_id  ,    user_id   ,balance , currency  ) VALUES (%s,%s, %s,%s )", array(
            $transaction_id,
            $user_id,
            $balance,
            $currency
        ));

        $wpdb->query($q1);

        return 0;
    }

    else
    {
        return $w->balance;
    }

}

function transaction_history($user_id, $currency)
{

    global $wpdb;

    $sql = "SELECT * FROM {$wpdb->prefix}aistore_wallet_transactions WHERE currency=$currency and user_id=$user_id ";

    return $wpdb->get_results($sql, 'ARRAY_A');

}

