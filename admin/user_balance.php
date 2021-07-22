<?php


function aistore_new_contact_methods_balance( $contactmethods ) {
    $contactmethods['wallet_balance'] = 'Balance';
    return $contactmethods;
}
add_filter( 'user_contactmethods', 'aistore_new_contact_methods_balance', 10, 1 );
 
 function aistore_new_modify_user_table_balance( $column ) {

       
    $column['wallet_balance'] = 'Balance';
    return $column;
}

add_filter( 'manage_users_columns', 'aistore_new_modify_user_table_balance' );




function aistore_new_modify_user_table_row_balance( $val, $column_name, $user_id ) {



    switch ($column_name) {

 
        case 'wallet_balance':
        $currency="USD";
        $wallet = new AistoreWallet();
    $balance = $wallet->aistore_balance($user_id, $currency);
        
         $link= '<a href="/wp-admin/admin.php?page=account&id='.$user_id.'">Add Balance</a>';

   
       
 return $balance."   " .$link;

   
        default:
    }


    return $val;

}


add_filter( 'manage_users_custom_column', 'aistore_new_modify_user_table_row_balance', 10, 3 );



?>