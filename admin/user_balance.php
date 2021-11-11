<?php



 
 function aistore_new_modify_user_table_balance( $column ) {

       
    $column['wallet_balance'] = _e( 'Balance', 'aistore' ) ;
    return $column;
}

add_filter( 'manage_users_columns', 'aistore_new_modify_user_table_balance' );




function aistore_new_modify_user_table_row_balance( $val, $column_name, $user_id ) {



    switch ($column_name) {

 
        case 'wallet_balance':
        $currency='CAD';
        $wallet = new AistoreWallet();
    $balance = $wallet->aistore_balance($user_id, $currency);
           $url = admin_url('admin.php'); 
         $link= '<a href="'.$url.'?page=account&id='.$user_id.'">Add Balance</a>';

   
       
 return $balance."   " .$link;

   
        default:
    }


    return $val;

}


add_filter( 'manage_users_custom_column', 'aistore_new_modify_user_table_row_balance', 10, 3 );



?>