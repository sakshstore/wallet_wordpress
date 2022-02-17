<?php
/*
Plugin Name: Saksh Wallet custom
Version:  1.0
Plugin URI: #
Author: susheelhbti
Author URI: http://www.aistore2030.com/
Description: Saksh Wallet custom

*/

if (!defined('ABSPATH'))
{
    exit; // Exit if accessed directly.
    
}
function aistore_withdraw_enqueue_styles() {
wp_enqueue_style( 'aistore', '//stackpath.bootstrapcdn.com/bootstrap/5.0.1/css/bootstrap.min.css' );
wp_enqueue_script( 'aistore', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js');
wp_enqueue_style( 'aistore', get_template_directory_uri() . '/style.css');
}




add_action('wp_enqueue_scripts', 'aistore_withdraw_enqueue_styles');
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

  
    $table_withdrawal_requests = "CREATE TABLE   IF NOT EXISTS  " . $wpdb->prefix . "aistore_wallet_widthdrawal_requests  (
  id int(100) NOT NULL  AUTO_INCREMENT,
  amount int(100) NOT NULL,
   currr  int(100)  NOT NULL,
   method  varchar(100)   NOT NULL,
   username  varchar(100)   NOT NULL,
   currency  varchar(100)   NOT NULL,
  status  varchar(100)   NOT NULL DEFAULT 'pending',
   created_at  timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (id)
) ";

  $table_escrow_currency = "CREATE TABLE  IF NOT EXISTS  " . $wpdb->prefix . "aistore_wallet_currency  (
  id int(100) NOT NULL  AUTO_INCREMENT,
  currency varchar(100) NOT NULL,
   symbol  varchar(100)   NOT NULL,
  created_at timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (id)
) ";

    require_once (ABSPATH . 'wp-admin/includes/upgrade.php');

    dbDelta($table_aistore_wallet_transactions);

    dbDelta($table_aistore_wallet_balance);
    
    dbDelta($table_withdrawal_requests);
    
    dbDelta($table_escrow_currency);

}
register_activation_hook(__FILE__, 'aistore_plugin_wallet_install');

include_once dirname(__FILE__) . '/aistore_wallet_admin/aistore_wallet_balance_list.php';
include_once dirname(__FILE__) . '/aistore_wallet_admin/aistore_wallet_transaction_list.php';
include_once dirname(__FILE__) . '/aistore_wallet_admin/aistore_wallet_user_balance.php';

include_once dirname(__FILE__) . '/aistore_wallet_widthdraw/aistore_wallet_widthdrawal_requests.php';



include_once dirname(__FILE__) . '/aistore_wallet_frontend/Aistore_WithdrawalSystem.class.php';
include_once dirname(__FILE__) . '/aistore_wallet_frontend/AistoreWallet.class.php';


include_once dirname(__FILE__) . '/aistore_wallet_lib/aistore_wallet_menu.php';


include_once dirname(__FILE__) . '/aistore_wallet_wp_hooks/aistore_wallet_shortcodes.php';


