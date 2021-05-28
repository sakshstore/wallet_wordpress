<?php


function saksh_wallet_new_contact_methods_balance( $contactmethods ) {
    $contactmethods['wallet_balance'] = 'Balance';
    return $contactmethods;
}
add_filter( 'user_contactmethods', 'saksh_wallet_new_contact_methods_balance', 10, 1 );
 
 function saksh_wallet_new_modify_user_table_balance( $column ) {

       
    $column['wallet_balance'] = 'Balance';
    return $column;
}

add_filter( 'manage_users_columns', 'saksh_wallet_new_modify_user_table_balance' );




function saksh_wallet_new_modify_user_table_row_balance( $val, $column_name, $user_id ) {



    switch ($column_name) {

 
        case 'wallet_balance':
        $currency="USD";
        $wallet = new Saksh_Wallet();
    $balance = $wallet->balance($user_id, $currency);
        
         $link= '<a href="/wp-admin/admin.php?page=account&id='.$user_id.'">Add Balance</a>';

   
       
 return $balance."   " .$link;

   
        default:
    }


    return $val;

}



add_filter( 'manage_users_custom_column', 'saksh_wallet_new_modify_user_table_row_balance', 10, 3 );


?>