<?php
 
if (!defined('ABSPATH'))
{
    exit; // Exit if accessed directly.
    
} 


 

add_action( 'admin_menu', 'register_my_custom_menu_page' );
function register_my_custom_menu_page() {
  
  
  add_menu_page( 'Wallet Account', 'Wallet Account', 'manage_options', 'wallet_account');
add_submenu_page( 'wallet_account'  , 'Wallet Account', 'Debit/Credit', 'manage_options', 'wallet_account', 'wallet_account',  90 );
 add_submenu_page( 'wallet_account'  ,     'Wallet Account', 'Currency Setting', 'manage_options', 'currency_setting', 'currency_setting',  90 );
 add_submenu_page( 'wallet_account'  , 'Wallet Account', 'Withdrawal', 'manage_options', 'withdrawal', 'withdrawal',  90 );


    
}

function wallet_account(){
include dirname(__FILE__) . "../../aistore_wallet_admin/aistore_wallet_debit_credit.php";
}

function currency_setting(){
    include_once dirname(__FILE__) . '../../aistore_wallet_admin/aistore_wallet_currency_setting.php';
}

function balance_list(){
    // echo "jjg";
    include_once dirname(__FILE__) . '../../aistore_wallet_admin/aistore_wallet_balance_list.php';
}

function withdrawal(){
include_once dirname(__FILE__) . '../../aistore_wallet_widthdraw/aistore_wallet_withdrawal.php';
}

