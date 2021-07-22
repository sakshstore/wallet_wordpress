<?php
function aistore_add_plugin_page() {
    add_menu_page(
        __( 'Account', 'aistore' ),
        'Account',
        'administrator',
        'account',
        'aistore_page_setting'
    );
}

add_action( 'admin_menu', 'aistore_add_plugin_page' );
  


function aistore_page_setting() {
     $wallet = new AistoreWallet();
      $pages = get_pages(); 
    
       ?>
       
       <div id="col-container ">
<div id="col-left"    >

<div class="card">
      
<h3><?php  _e( 'Debit/ Credit', 'aistore' ) ?></h3>
 
     

<?php
if(isset($_POST['submit']) and $_POST['action']=='deposit_type' )
{

if ( ! isset( $_POST['aistore_nonce'] ) 
    || ! wp_verify_nonce( $_POST['aistore_nonce'], 'aistore_nonce_action' ) 
) {
   return  _e( 'Sorry, your nonce did not verify.', 'aistore' );

   exit;
}

 
 $amount= sanitize_text_field($_POST['amount']);
 $type= sanitize_text_field($_POST['type']);
  $currency= sanitize_text_field($_POST['currency']);
   $description= sanitize_text_field($_POST['description']);

   $user_id=sanitize_text_field($_POST['user_id']);
   
     $current_user_id=get_current_user_id();
     
if($type=='debit'){
 $res=$wallet->aistore_credit($current_user_id, $amount, $currency, $description);
 $res=$wallet->aistore_debit($user_id, $amount, $currency, $description);
}

else{
  $res=$wallet->aistore_credit($user_id, $amount, $currency, $description);
   $res=$wallet->aistore_debit($current_user_id, $amount, $currency, $description);
}


_e( 'Successfully', 'aistore' ) ;
  printf(__( 'Amount %s.', 'aistore'),$amount ." ". $currency ); 
  printf(__( 'Description %s.', 'aistore'),$description); 
}
else{
    
   
?>
 <form method="POST" action="" name="deposit_type" enctype="multipart/form-data"> 
    <?php wp_nonce_field( 'aistore_nonce_action', 'aistore_nonce' ); ?>
    


<?php 
     $user_id=get_current_user_id();
      $currency="USD";

    $balance = $wallet->aistore_balance($user_id, $currency);
 

$id=sanitize_text_field($_REQUEST['id']);
printf(__( 'Account Balance %s.', 'aistore'),$balance); 


 ?>
 
<br><br>
  <label><?php _e( 'Account Type:', 'aistore' ) ;?></label>
<select name="type" id="type">
  <option value="debit">Debit</option>
  <option value="credit">Credit</option>

</select><br><br>




  <label><?php _e( 'Currency:', 'aistore' ) ;?></label>



<select name="currency" id="currency">
  <option value="INR">INR</option>
  <option value="EUR">EUR</option>
  <option value="USD">USD</option>
  <option value="GDP">GDP</option>
</select><br><br>


<input class="input" type="hidden" name="user_id" value="<?php echo $id; ?>"/>
  <label><?php _e( 'Amount:', 'aistore' ) ;?></label>

<input class="input" type="text" name="amount" /><br><br>

  <label><?php _e( 'Description:', 'aistore' ) ;?></label>
  


<textarea id="description" name="description" rows="4" cols="50">
</textarea> <br><br>




<input class="input" type="submit" name="submit" value="<?php  _e( 'Submit', 'aistore' ) ?>"/>
<input type="hidden" name="action"  value="deposit_type"/>
    </form>
    
<?php
}


?>
</div>
</div>

<div id="col-right"   >
    <div class="card">
    <?php
   global  $wpdb;

$page_id=get_option('details_escrow_page_id'); 
 
   $id=sanitize_text_field($_REQUEST['id']);

$results = 
   $wpdb->prepare("SELECT * FROM {$wpdb->prefix}aistore_wallet_transactions where user_id=%s",$id) 
       ;


		$results=$wpdb->get_results($results );	     

  ?>
  <h1> <?php  _e( 'User Transactions', 'aistore' ) ?> </h1>
  <table class="widefat fixed striped">
        
     <tr><th><?php   _e( 'Transaction Id', 'aistore' ); ?></th>
     <th><?php   _e( 'Amount', 'aistore' ); ?></th>
          <th><?php   _e( 'Type', 'aistore' ); ?></th>
     <th><?php   _e( 'Balance', 'aistore' ); ?></th>
     <th><?php   _e( 'Description', 'aistore' ); ?></th>
     <th><?php   _e( 'Date', 'aistore' ); ?></th>
     </tr>
      

    <?php 
    
    if($results==null)
	{
	     _e( "No Transactions Found", 'aistore' );

	}


	else{
    foreach($results as $row):
   
    ?> 
      <tr>

		   <td>   <?php echo $row->transaction_id ; ?></td>
		   
		  <td> 	 <?php echo $row->amount. $row->currency; ?> </td>
		  	  <td> 	 <?php echo $row->type; ?> </td>
		   	  <td> 	 <?php echo $row->balance; ?> </td>
	  <td> 	 <?php echo $row->description ; ?> </td>
		 
		   <td>  <?php echo $row->date ; ?> </td>
       
                
            </tr>
    <?php endforeach;
	}
	
	?>



    </table>

	
</div>
    </div>
</div>
 <?php
     
 }