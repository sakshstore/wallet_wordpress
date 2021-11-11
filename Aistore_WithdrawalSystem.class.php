<?php


class Aistore_WithdrawalSystem {
    
      public  static function aistore_bank_account()
{ 
     if(isset($_POST['submit']) and $_POST['action']=='bank_account_details' )
{

if ( ! isset( $_POST['aistore_nonce'] ) 
    || ! wp_verify_nonce( $_POST['aistore_nonce'], 'aistore_nonce_action' ) 
) {
   return  _e( 'Sorry, your nonce did not verify', 'aistore' );
   exit;
} 


    $user_id=get_current_user_id();
 update_user_meta( $user_id, 'bank_account_name', sanitize_text_field($_POST['bank_account_name']) );
 update_user_meta( $user_id, 'bank_account', sanitize_text_field($_POST['bank_account']) );
 update_user_meta( $user_id, 'name_of_bank', sanitize_text_field($_POST['name_of_bank']) );
 
 update_user_meta( $user_id, 'bank_address', sanitize_text_field($_POST['bank_address'] ));
 update_user_meta( $user_id, 'UPI_CODE', sanitize_text_field($_POST['UPI_CODE']) );
 update_user_meta( $user_id, 'PAYTM_NUMBER', sanitize_text_field($_POST['PAYTM_NUMBER'] ));
  update_user_meta( $user_id, 'GOOGLE_PAY', sanitize_text_field($_POST['GOOGLE_PAY'] ));
    update_user_meta( $user_id, 'ifsc_code', sanitize_text_field($_POST['ifsc_code']) );
     update_user_meta( $user_id, 'lock_bank_details', sanitize_text_field($_POST['lock_bank_details']) );
    
    
    ?>

<?php
}
else{
     
$user_id=get_current_user_id();
    $user = get_user_by( 'id', $user_id);
    ?>
    
    
<h3><?php _e("Add Bank Details", "blank"); ?></h3>
 <form method="POST" action="" name="bank_account_details" enctype="multipart/form-data"> 

<?php wp_nonce_field( 'aistore_nonce_action', 'aistore_nonce' ); ?>

  <label for="bank_account_name"><?php _e("Bank Account Name"); ?></label><br>
        
        
        
           <?php
       if( esc_attr( get_the_author_meta( 'lock_bank_details', $user->ID ) )==0){
            
            ?>
     <input type="text" name="bank_account_name" id="bank_account_name" value="<?php echo esc_attr( get_the_author_meta( 'bank_account_name', $user->ID ) ); ?>" /><br />
            
  <?php
        }
        
        else{
    ?>
            <input type="text" name="bank_account_name" id="bank_account_name" value="<?php echo esc_attr( get_the_author_meta( 'bank_account_name', $user->ID ) ); ?>"  readonly="true"  /><br />
            
            <?php } ?>
          
            
            <br>
            
      <label for="bank_account"><?php _e("Bank Account Number"); ?></label><br>
        
         <?php
       if( esc_attr( get_the_author_meta( 'lock_bank_details', $user->ID ) )==0){
            
            ?>
    <input type="text" name="bank_account" id="bank_account" value="<?php echo esc_attr( get_the_author_meta( 'bank_account', $user->ID ) ); ?>" class="regular-text" /><br />
            
  <?php
        }
        
        else{
    ?>
            <input type="text" name="bank_account" id="bank_account" value="<?php echo esc_attr( get_the_author_meta( 'bank_account', $user->ID ) ); ?>" class="regular-text" readonly="true" /><br />
            
            
            <?php } ?>
           
             <br>
             
             
            
       <label for="name_of_bank"><?php _e("Name Of Bank"); ?></label><br>
       
         <?php
       if( esc_attr( get_the_author_meta( 'lock_bank_details', $user->ID ) )==0){
            
            ?>
    <input type="text" name="name_of_bank" id="name_of_bank" value="<?php echo esc_attr( get_the_author_meta( 'name_of_bank', $user->ID ) ); ?>" class="regular-text" /><br />
  <?php
        }
        
        else{
    ?>
            <input type="text" name="name_of_bank" id="name_of_bank" value="<?php echo esc_attr( get_the_author_meta( 'name_of_bank', $user->ID ) ); ?>" class="regular-text" readonly="true"  /><br />
            
            
            <?php } ?>
           
            
            
             <br>
      <label for="bank_address"><?php _e("Bank Address"); ?></label><br>
       
         <?php
       if( esc_attr( get_the_author_meta( 'lock_bank_details', $user->ID ) )==0){
            
            ?>
    <input type="text" name="bank_address" id="bank_address" value="<?php echo esc_attr( get_the_author_meta( 'bank_address', $user->ID ) ); ?>" class="regular-text" /><br />
  <?php
        }
        
        else{
    ?>
            <input type="text" name="bank_address" id="bank_address" value="<?php echo esc_attr( get_the_author_meta( 'bank_address', $user->ID ) ); ?>" class="regular-text" readonly="true"  /><br />
            
            
            <?php } ?>
      
            
             <br>
                     
      <label for="ifsc_code"><?php _e("IFSC Code"); ?></label><br>
      
      
       <?php
       if( esc_attr( get_the_author_meta( 'lock_bank_details', $user->ID ) )==0){
            
            ?>
     <input type="text" name="ifsc_code" id="ifsc_code" value="<?php echo esc_attr( get_the_author_meta( 'ifsc_code', $user->ID ) ); ?>" class="regular-text" /><br />
  <?php
        }
        
        else{
    ?>
            <input type="text" name="ifsc_code" id="ifsc_code" value="<?php echo esc_attr( get_the_author_meta( 'ifsc_code', $user->ID ) ); ?>" class="regular-text" readonly="true"  /><br />
            
            
            <?php } ?>
           <br>
            
            
            <hr><br>
             
       <label for="UPI_CODE"><?php _e("UPI CODE"); ?></label><br>
       
        <?php
       if( esc_attr( get_the_author_meta( 'lock_bank_details', $user->ID ) )==0){
            
            ?>
     <input type="text" name="UPI_CODE" id="UPI_CODE" value="<?php echo esc_attr( get_the_author_meta( 'UPI_CODE', $user->ID ) ); ?>" class="regular-text" /><br />
  <?php
        }
        
        else{
    ?>
       
            <input type="text" name="UPI_CODE" id="UPI_CODE" value="<?php echo esc_attr( get_the_author_meta( 'UPI_CODE', $user->ID ) ); ?>" class="regular-text" readonly="true" /><br />
            
            <?php
            }?>
           
            
             <br>
       <label for="PAYTM_NUMBER"><?php _e("PAYTM NUMBER"); ?></label><br>
       
       <?php
       if( esc_attr( get_the_author_meta( 'lock_bank_details', $user->ID ) )==0){
            
            ?>
 <input type="text" name="PAYTM_NUMBER" id="PAYTM_NUMBER" value="<?php echo esc_attr( get_the_author_meta( 'PAYTM_NUMBER', $user->ID ) ); ?>" class="regular-text" /><br />
  <?php
        }
        
        else{
    ?>
            <input type="text" name="PAYTM_NUMBER" id="PAYTM_NUMBER" value="<?php echo esc_attr( get_the_author_meta( 'PAYTM_NUMBER', $user->ID ) ); ?>" class="regular-text" readonly="true" /><br />
            
            
            
            <?php
        }?>
            
            
             <br>
             
             
       <label for="GOOGLE_PAY"><?php _e("GOOGLE PAY"); ?></label><br>
      <?php
      if( esc_attr( get_the_author_meta( 'lock_bank_details', $user->ID ) )==0){
            
            ?>
  <input type="text" name="GOOGLE_PAY" id="GOOGLE_PAY" value="<?php echo esc_attr( get_the_author_meta( 'GOOGLE_PAY', $user->ID ) ); ?>" class="regular-text" /><br />
  <?php
        }
        
        else{
    ?>
            <input type="text" name="GOOGLE_PAY" id="GOOGLE_PAY" value="<?php echo esc_attr( get_the_author_meta( 'GOOGLE_PAY', $user->ID ) ); ?>" class="regular-text" readonly="true"  /><br />
            
            <?php
        }
        ?>
            
       <br>
            
            
            
             <?php
    if( esc_attr( get_the_author_meta( 'lock_bank_details', $user->ID ) )==0){
        
    ?>
              <input type="checkbox" id="lock_bank_details" name="lock_bank_details" value="1">
               <label for="lock_bank_details"> <?php _e( 'Lock Bank Details', 'aistore' ); ?> </label><br><br>
    
   
       <input 
 type="submit"  name="submit" value="<?php  _e( 'Submit', 'aistore' ) ?>"/>
<input type="hidden" name="action" value="bank_account_details" />

<?php
}?>

    </form>
<?php
}
}



public static function aistore_saksh_withdrawal_system()
{ 
   if ( !is_user_logged_in() ) {
   
   return   "Please login to start ";
    
 
}


 global $wpdb;   
  
  $wallet = new AistoreWallet();
        $object_escrow = new AistoreEscrowSystem();
         $aistore_escrow_currency = $object_escrow->get_escrow_currency();
$user_id=get_current_user_id();

if(isset($_POST['submit']) and $_POST['action']=='withdrawal_request' )
{

if ( ! isset( $_POST['aistore_nonce'] ) 
    || ! wp_verify_nonce( $_POST['aistore_nonce'], 'aistore_nonce_action' ) 
) {
   return  _e( 'Sorry, your nonce did not verify', 'aistore' );
   exit;
} 

    $user_id=get_current_user_id();
      $description="Withdraw Balance";
      
      

       
    $balance = $wallet->aistore_balance($user_id, $aistore_escrow_currency);



$amount=intval($_REQUEST['amount']);

$username = get_the_author_meta( 'user_email', get_current_user_id() );


if($balance>=$amount){
    
   $wallet->aistore_debit($user_id, $amount, $aistore_escrow_currency, $description);


$res=( $wpdb->prepare( "INSERT INTO {$wpdb->prefix}widthdrawal_requests ( amount,username  ) VALUES ( %s, %s)", array(  $amount, $username ) ) );

$wpdb->query($res);
$wid = $wpdb->insert_id;



// email to sender 


$to = $username;
$subject ="Withdrawal Request";

$user_id=get_current_user_id();
    $user = get_user_by( 'id', $user_id);
    
	 $withdraw_page_id_url =  esc_url( add_query_arg( array(
    'page_id' => 449 ,
	'wid'=> $wid,
), home_url() ) );


 $body="Hello, <br>
 
     <h2> withdraw request have successfully for the withdraw ID ".$wid." </h2>".
     
     "<br>Withdraw ID is: ".$wid.
      "<br>Amount: ".$amount.
     "<br>Process Withdraw system to :<br>".
         $withdraw_page_id_url."<br>" ;
    
   $body.=" <br><h2> Bank Account  Details </h2><br>
   <table>
   
    <tr><td>Bank Account Name :</td><td>".$user->bank_account_name."</td></tr>
    <tr><td>Bank Account Number :</td><td>".$user->bank_account."</td></tr>
    <tr><td>Name Of Bank :</td><td>". $user->name_of_bank."</td></tr>
    <tr><td>Bank Address :</td><td>". $user->bank_address."</td></tr>
    <tr><td>IFSC Code :</td><td>". $user->bank_address."</td></tr>
    <tr><td>UPI CODE :</td><td>". $user->UPI_CODE."</td></tr>
    <tr><td>PAYTM NUMBER :</td><td>".$user->PAYTM_NUMBER."</td></tr>
    <tr><td>GOOGLE PAY :</td><td>".$user->ifsc_code."</td></tr>
</table>

   ";
  
  //$body.=__( 'Your Recevier Email'.$receiver_email, 'aistore' );
  
  $headers = array('Content-Type: text/html; charset=UTF-8');
     wp_mail( $to, $subject, $body, $headers );

}

else{
    _e( 'Insufficient Balance', 'aistore' ); 
}


    ?>
    
   

<?php
}
else{
?>

   <form method="POST" action="" name="withdrawal_request" enctype="multipart/form-data"> 

<?php wp_nonce_field( 'aistore_nonce_action', 'aistore_nonce' ); ?>

                
                 

<?php 
     $user_id=get_current_user_id();


    ?>
    <h6><?php  _e( 'Withdrawal Request', 'aistore' );?> </h6>
  <label for="amount"><?php   _e( 'Amount', 'aistore' ); ?></label><br>
  
  <input class="input" type="number" id="amount" name="amount" min="1"  required  class="form-control" style="width:100%;" ><br>



<?php 
    _e( 'Account balance is:', 'aistore' ) ;
       
        
 global $wpdb;

        $results = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}escrow_currency  order by id desc"
);
 foreach ($results as $row):
$currency=  $row->currency; 
 $wallet = new AistoreWallet();

        $balance = $wallet->aistore_balance($user_id, $currency);

         echo "<br>".$balance . " " . $currency;
       
   endforeach;

 ?>
  
 


<br>
	<br>
<input 
 type="submit"  name="submit" value="<?php  _e( 'Withdrawal', 'aistore' ) ?>"/>
<input type="hidden" name="action" value="withdrawal_request" />
</form> 
<br>
<hr>

<h6> <?php _e( 'Bank Account Details', 'aistore' ); ?></h6>
<?php
$user_id=get_current_user_id();
    $user = get_user_by( 'id', $user_id);
    
    if($user->bank_account==="NULL"){
       _e( 'Please Add Bank Account Details', 'aistore' );
    }
    else{
?>
<table>
    <tr><td><?php   _e( 'Bank Account Name ', 'aistore' ); ?>:</td><td><?php echo esc_attr($user->bank_account_name); ?></td></tr>
    <tr><td><?php   _e( 'Bank Account Number', 'aistore' ); ?> :</td><td><?php echo esc_attr($user->bank_account); ?></td></tr>
    <tr><td><?php   _e( 'Name Of Bank', 'aistore' ); ?> :</td><td><?php echo esc_attr($user->name_of_bank); ?></td></tr>
    <tr><td><?php   _e( 'Bank Address ', 'aistore' ); ?>:</td><td><?php echo esc_attr($user->bank_address); ?></td></tr>
    <tr><td><?php   _e( 'IFSC Code', 'aistore' ); ?> :</td><td><?php echo esc_attr($user->bank_address); ?></td></tr>
    <tr><td><?php   _e( 'UPI CODE', 'aistore' ); ?> :</td><td><?php echo esc_attr($user->UPI_CODE); ?></td></tr>
    <tr><td><?php   _e( 'PAYTM NUMBER ', 'aistore' ); ?>:</td><td><?php echo esc_attr($user->PAYTM_NUMBER); ?></td></tr>
    <tr><td><?php   _e( 'GOOGLE PAY', 'aistore' ); ?> :</td><td><?php echo esc_attr($user->ifsc_code); ?></td></tr>
</table>
<?php
}
?>

<br>
<hr>
<h6><?php _e( 'Withdraw Report', 'aistore' ); ?></h6>
<?php
$current_user_email_id = get_the_author_meta( 'user_email', get_current_user_id() );

global $wpdb;

  $results = $wpdb->get_results( 
                     $wpdb->prepare("SELECT * FROM {$wpdb->prefix}widthdrawal_requests WHERE username=%s order by id desc limit 100", $current_user_email_id) 

                 );


 
 if($results==null)
	{
	      echo "<div class='no-result'>";
	      
	     _e( 'Withdrawal List Not Found', 'aistore' ); 
	  echo "</div>";
	}
	else{
   
  ob_start();
     
  ?>
  
    <table class="table">
     
        <tr>
      
    <th><?php   _e( 'ID', 'aistore' ); ?></th>
        <th><?php   _e( 'Amount', 'aistore' ); ?></th>
        
		    <th><?php   _e( 'Status', 'aistore' ); ?></th>  
		    <th><?php   _e( 'Date', 'aistore' ); ?></th>
		 
</tr>

    <?php 
    
     
   
    foreach($results as $row):
  
	
 ?>
 
 
      
    
      <tr>
           
		 
		   
		   
		   <td> 

		   <?php echo esc_attr($row->id) ; ?></td>

   
		   
		  	   <td> 		   <?php echo esc_attr($row->amount) ." ".  $aistore_escrow_currency;?>  </td>
		  
	
		    <td> 		   <?php echo esc_attr($row->status) ; ?> </td>
		    	   <td> 		   <?php echo esc_attr($row->created_at); ?> </td>

            </tr>
    <?php endforeach;
	
	}?>

    </table>
<?php
}

}
}

?>