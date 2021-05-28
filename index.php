<?php
/*
Plugin Name: Saksh  Multi Currency Wallet
Version:  1.0
Plugin URI: #
Author: susheelhbti
Author URI: http://www.aistore2030.com/
Description: Saksh Wallet is a multi currency wallet you can use to store customer balance in any currency and it send /receive payment

*/

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}


function aistore_plugin_wallet_install()
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
register_activation_hook(__FILE__, 'aistore_plugin_wallet_install');

include_once dirname(__FILE__) . '/admin/balance_list.php';

include_once dirname(__FILE__) . '/admin/transaction_list.php';
include_once dirname(__FILE__) . '/admin/debit_credit.php';
include_once dirname(__FILE__) . '/admin/user_balance.php';
include_once dirname(__FILE__) . '/Saksh_Wallet.class.php';

