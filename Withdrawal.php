<?php


add_action( 'show_user_profile', 'aistore_extra_user_profile_fields' );
add_action( 'edit_user_profile', 'aistore_extra_user_profile_fields' );

function aistore_extra_user_profile_fields( $user ) { ?>
    <h3><?php _e("Add Bank Details", "blank"); ?></h3>

    <table class="form-table">
    <tr>
        <th><label for="bank_account_name"><?php _e("Bank Account Name"); ?></label></th>
        <td>
            <input type="text" name="bank_account_name" id="bank_account_name" value="<?php echo esc_attr( get_the_author_meta( 'bank_account_name', $user->ID ) ); ?>" class="regular-text" /><br />
            <span class="description"><?php _e("Please enter your bank acccount name."); ?></span>
        </td>
    </tr>
    <tr>
        <th><label for="bank_account"><?php _e("Bank Account Number"); ?></label></th>
        <td>
            <input type="text" name="bank_account" id="bank_account" value="<?php echo esc_attr( get_the_author_meta( 'bank_account', $user->ID ) ); ?>" class="regular-text" /><br />
            <span class="description"><?php _e("Please enter your bank account number."); ?></span>
        </td>
    </tr>
    <tr>
    <th><label for="name_of_bank"><?php _e("Name Of Bank"); ?></label></th>
        <td>
            <input type="text" name="name_of_bank" id="name_of_bank" value="<?php echo esc_attr( get_the_author_meta( 'name_of_bank', $user->ID ) ); ?>" class="regular-text" /><br />
            <span class="description"><?php _e("Please enter your name of bank."); ?></span>
        </td>
    </tr>
    
      <tr>
    <th><label for="bank_address"><?php _e("Bank Address"); ?></label></th>
        <td>
            <input type="text" name="bank_address" id="bank_address" value="<?php echo esc_attr( get_the_author_meta( 'bank_address', $user->ID ) ); ?>" class="regular-text" /><br />
            <span class="description"><?php _e("Please enter your bank address."); ?></span>
        </td>
    </tr>
    
      <tr>
    <th><label for="ifsc_code"><?php _e("IFSC Code"); ?></label></th>
        <td>
            <input type="text" name="ifsc_code" id="ifsc_code" value="<?php echo esc_attr( get_the_author_meta( 'ifsc_code', $user->ID ) ); ?>" class="regular-text" /><br />
            <span class="description"><?php _e("Please enter your IFSC CodeY."); ?></span>
        </td>
    </tr>
    
      <tr>
    <th><label for="UPI_CODE"><?php _e("UPI CODE"); ?></label></th>
        <td>
            <input type="text" name="UPI_CODE" id="UPI_CODE" value="<?php echo esc_attr( get_the_author_meta( 'UPI_CODE', $user->ID ) ); ?>" class="regular-text" /><br />
            <span class="description"><?php _e("Please enter your UPI CODE."); ?></span>
        </td>
    </tr>
     <tr>
    <th><label for="PAYTM_NUMBER"><?php _e("PAYTM NUMBER"); ?></label></th>
        <td>
            <input type="text" name="PAYTM_NUMBER" id="PAYTM_NUMBER" value="<?php echo esc_attr( get_the_author_meta( 'PAYTM_NUMBER', $user->ID ) ); ?>" class="regular-text" /><br />
            <span class="description"><?php _e("Please enter your PAYTM NUMBER."); ?></span>
        </td>
    </tr>
    
     <tr>
    <th><label for="GOOGLE_PAY"><?php _e("GOOGLE PAY"); ?></label></th>
        <td>
            <input type="text" name="GOOGLE_PAY" id="GOOGLE_PAY" value="<?php echo esc_attr( get_the_author_meta( 'GOOGLE_PAY', $user->ID ) ); ?>" class="regular-text" /><br />
            <span class="description"><?php _e("Please enter your GOOGLE PAY."); ?></span>
        </td>
    </tr>
    </table>
<?php }


add_action( 'personal_options_update', 'aistore_save_extra_user_profile_fields' );
add_action( 'edit_user_profile_update', 'aistore_save_extra_user_profile_fields' );

function aistore_save_extra_user_profile_fields( $user_id ) {
    if ( empty( $_POST['_wpnonce'] ) || ! wp_verify_nonce( $_POST['_wpnonce'], 'update-user_' . $user_id ) ) {
        return;
    }
    
    if ( !current_user_can( 'edit_user', $user_id ) ) { 
        return false; 
    }
    
 update_user_meta( $user_id, 'bank_account_name', sanitize_text_field($_POST['bank_account_name']) );
 update_user_meta( $user_id, 'bank_account', intval($_POST['bank_account']) );
 update_user_meta( $user_id, 'name_of_bank', sanitize_text_field($_POST['name_of_bank'] ));
  update_user_meta( $user_id, 'ifsc_code', sanitize_text_field($_POST['ifsc_code']) );
 update_user_meta( $user_id, 'bank_address', sanitize_text_field($_POST['bank_address']) );
 update_user_meta( $user_id, 'UPI_CODE', sanitize_text_field($_POST['UPI_CODE']) );
 update_user_meta( $user_id, 'PAYTM_NUMBER', sanitize_text_field($_POST['PAYTM_NUMBER'] ));
  update_user_meta( $user_id, 'GOOGLE_PAY', sanitize_text_field($_POST['GOOGLE_PAY'] ));
}

function aistore_saksh_add_plugin_page() {
    add_menu_page(
        __( 'Withdrawal', 'aistore' ),
        'Withdrawal',
        'administrator',
        'withdrawal',
        'aistore_saksh_page_setting'
    );
}

add_action( 'admin_menu', 'aistore_saksh_add_plugin_page' );
  


function aistore_saksh_page_setting() {
    
       ?>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<br>
       <div class="container">
           
       <?php  
       
       
global  $wpdb;


  


 $results = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}widthdrawal_requests");
     foreach($results as $row):
    
    
    ?>
 
          <div class="accordion" id="accordionExample">
              
  <div class="accordion-item">
    <h2 class="accordion-header" id="heading<?php echo $row->id ; ?>">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo esc_attr($row->id) ; ?>" aria-expanded="true" aria-controls="collapse<?php echo esc_attr($row->id ); ?>">
        #<?php echo esc_attr($row->id) ; ?> :  <?php echo esc_attr($row->username) ; ?>
      </button>
    </h2>
    <div id="collapse<?php echo esc_attr($row->id) ; ?>" class="accordion-collapse collapse show" aria-labelledby="heading<?php echo esc_attr($row->id) ; ?>" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <table class="widefat fixed striped">
        
   
<table>
    
      <tr>
      <th scope="row"><?php _e( 'Username', 'aistore' ); ?> :</th>
      <td>   <?php echo esc_attr($row->username) ; ?></td>
      
    </tr>
    
      <tr>
      <th scope="row"><?php _e( 'Amount', 'aistore' ); ?> :    </th>
      <td>       <?php echo esc_attr($row->amount)." " ; ?></td>
      
    </tr>
    
     <tr>
      <th scope="row"><?php _e( 'Status', 'aistore' ); ?> :</th>
      <td>   <?php echo esc_attr($row->status) ; ?></td>
      
    </tr>
    
   
    
     <tr>
      <th scope="row"><?php _e( 'Date', 'aistore' ); ?> :</th>
      <td>   <?php echo esc_attr($row->created_at) ; ?></td>
      
    </tr>
    
    
    <tr>
        <td>
      
<?php
   
   $users = $wpdb->get_row($wpdb->prepare( "SELECT * FROM {$wpdb->prefix}users WHERE user_email=%s ",$row->username));

$bank_account= esc_attr( get_the_author_meta( 'bank_account', $users->ID ) );
$bank_account_name= esc_attr( get_the_author_meta( 'bank_account_name', $users->ID ) );
$name_of_bank= esc_attr( get_the_author_meta( 'name_of_bank', $users->ID ) );
$bank_address= esc_attr( get_the_author_meta( 'bank_address', $users->ID ) );


$ifsc_code= esc_attr( get_the_author_meta( 'ifsc_code', $users->ID ) );
$UPI_CODE= esc_attr( get_the_author_meta( 'UPI_CODE', $users->ID ) );
$PAYTM_NUMBER= esc_attr( get_the_author_meta( 'PAYTM_NUMBER', $users->ID ) );
$GOOGLE_PAY= esc_attr( get_the_author_meta( 'GOOGLE_PAY', $users->ID ) );

?>
<!-- Button trigger modal -->



<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever1=" <?php echo esc_attr($row->id) ; ?>" data-name=" <?php echo esc_attr($row->username) ; ?>" data-wbank=" <?php echo esc_attr($bank_account); ?>" data-bank_account_name=" <?php echo esc_attr($bank_account_name); ?>" data-name_of_bank="<?php echo esc_attr($name_of_bank); ?>" data-bank_address=" <?php echo esc_attr($bank_address); ?>" data-amount=" <?php echo esc_attr($row->amount) ; ?>"
data-status=" <?php echo esc_attr($row->status) ; ?>" 
data-ifsc_code=" <?php echo esc_attr($ifsc_code); ?>" data-upi_code="<?php echo esc_attr($UPI_CODE); ?>" data-paytm_number=" <?php echo esc_attr($PAYTM_NUMBER); ?>" data-google_pay=" <?php echo esc_attr($GOOGLE_PAY); ?>"
data-status=" <?php echo esc_attr($row->status) ; ?>">
 
 <?php   _e( 'View', 'aistore' ); ?>

</button>

  </td>
  
  <td>


<?php
if(isset($_POST['submit']) and $_POST['action']=='approve_withdrawal' )
{

if ( ! isset( $_POST['aistore_nonce'] ) 
    || ! wp_verify_nonce( $_POST['aistore_nonce'], 'aistore_nonce_action' ) 
) {
   return  _e( 'Sorry, your nonce did not verify', 'aistore' );
   exit;
} 




$withdrawal_id=sanitize_text_field($_REQUEST['withdrawal_id']);


$wpdb->query( $wpdb->prepare( "UPDATE {$wpdb->prefix}widthdrawal_requests
    SET status = '%s'  WHERE id = '%d'", 
   'Approved' , $withdrawal_id   ) );
   
   $widthdrawal = $wpdb->get_row($wpdb->prepare( "SELECT * FROM {$wpdb->prefix}widthdrawal_requests WHERE id=%s ",$withdrawal_id));
   
   
   $to = $widthdrawal->username;
$subject ="Withdrawal Approved";




 $body="Hello, <br>
 
     <h2> withdraw approved  successfully for the withdraw ID ".$withdrawal_id." </h2>".
     
     "<br>Withdraw ID is: ".$withdrawal_id.
     "<br>Approved Withdraw system to :<br>";
    
  
  
  //$body.=__( 'Your Recevier Email'.$receiver_email, 'aistore' );
  
  $headers = array('Content-Type: text/html; charset=UTF-8');
     wp_mail( $to, $subject, $body, $headers );

 
}
else{
?>
 <form method="POST" action="" name="approve_withdrawal" enctype="multipart/form-data"> 

<?php wp_nonce_field( 'aistore_nonce_action', 'aistore_nonce' ); ?>
  
  <input class="input" type="hidden" id="withdrawal_id" name="withdrawal_id" value="<?php echo esc_attr($row->id) ; ?> ">
<input 
 type="submit" class="btn btn-primary btn-sm" name="submit" value="<?php  _e( 'Approve', 'aistore' ) ?>"/>
<input type="hidden" name="action" value="approve_withdrawal" />
</form>

<?php
}
?>

</td>

<td>

<?php
if(isset($_POST['submit']) and $_POST['action']=='reject_withdrawal' )
{

if ( ! isset( $_POST['aistore_nonce'] ) 
    || ! wp_verify_nonce( $_POST['aistore_nonce'], 'aistore_nonce_action' ) 
) {
   return  _e( 'Sorry, your nonce did not verify', 'aistore' );
   exit;
} 




$withdrawal_id=sanitize_text_field($_REQUEST['withdrawal_id']);


$wpdb->query( $wpdb->prepare( "UPDATE {$wpdb->prefix}widthdrawal_requests
    SET status = '%s'  WHERE id = '%d'", 
   'Rejected' , $withdrawal_id   ) );
   
   
   
   $widthdrawal = $wpdb->get_row($wpdb->prepare( "SELECT * FROM {$wpdb->prefix}widthdrawal_requests WHERE id=%s ",$withdrawal_id));
   
   
   $to = $widthdrawal->username;
$subject ="Withdrawal Request Rejected";


	

 $body="Hello, <br>
 
     <h2>Your  withdrawal request is Rejected for the withdraw ID ".$withdrawal_id." </h2>".
     
     "<br>Withdraw ID is: ".$withdrawal_id.
     "<br>Rejected Withdraw system to :<br>";
    
  
  $headers = array('Content-Type: text/html; charset=UTF-8');
     wp_mail( $to, $subject, $body, $headers );
 
}
else{
?>
 <form method="POST" action="" name="reject_withdrawal" enctype="multipart/form-data"> 

<?php wp_nonce_field( 'aistore_nonce_action', 'aistore_nonce' ); ?>
  
  <input class="input" type="hidden" id="withdrawal_id" name="withdrawal_id" value="<?php echo esc_attr($row->id) ; ?> ">
<input 
 type="submit" class="btn btn-primary btn-sm" name="submit" value="<?php  _e( 'Reject', 'aistore' ) ?>"/>
<input type="hidden" name="action" value="reject_withdrawal" />
</form>

<?php
}
?>
</td>

<td>
<?php
if(isset($_POST['submit']) and $_POST['action']=='delete_withdrawal' )
{

if ( ! isset( $_POST['aistore_nonce'] ) 
    || ! wp_verify_nonce( $_POST['aistore_nonce'], 'aistore_nonce_action' ) 
) {
   return  _e( 'Sorry, your nonce did not verify', 'aistore' );
   exit;
} 




$withdrawal_id=sanitize_text_field($_REQUEST['withdrawal_id']);



$table =$wpdb->prefix.'widthdrawal_requests' ;
$wpdb->delete( $table, array( 'id' => $withdrawal_id ) );
 
}
else{
?>
 <form method="POST" action="" name="delete_withdrawal" enctype="multipart/form-data"> 

<?php wp_nonce_field( 'aistore_nonce_action', 'aistore_nonce' ); ?>
  
  <input class="input" type="hidden" id="withdrawal_id" name="withdrawal_id" value="<?php echo esc_attr($row->id) ; ?> ">
<input 
 type="submit" class="btn btn-primary btn-sm" name="submit" value="<?php  _e( 'Delete', 'aistore' ) ?>"/>
<input type="hidden" name="action" value="delete_withdrawal" />
</form>

<?php
}
?>

		   </td>
    </tr>

</table>
      </div>
    </div>
  </div>
    <?php endforeach; ?>
    
  </div>
  
  
     <!-- Modal -->
<div class="modal fade" id="aistore_exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php _e( 'Request Details #', 'aistore' );
        echo  "<span id='wid'> </span>"; ?>
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          
           <input type="hidden" name="coin"  id="coin"  >
           
           	 <?php
        
           
         
         
         



?>
       <table class="table table-sm">
 
  <tbody>
    <tr>
      <th scope="row"><?php _e( 'Username', 'aistore' ); ?></th>
      <td><?php echo  esc_attr("<span id='username'> </span>"); ?></td>
       
      
    </tr>
    <tr>
      <th scope="row"><?php _e( 'Amount', 'aistore' ); ?></th>
      <td><?php echo  esc_attr("<span id='amount'> </span>"." "); ?></td>
    
   
    </tr>
    
    <tr>
      <th scope="row"><?php _e( 'Status', 'aistore' ); ?></th>
      <td><?php echo esc_attr( "<span id='status'> </span>"); ?></td>
      
    </tr>
    
  </tbody>
</table>

<hr>
<h4><?php _e( 'Bank account details', 'aistore' ); ?></h4>
 <table class="table table-sm">
 
  <tbody>
    <tr>
      <th scope="row"><?php _e( 'Bank Account Name', 'aistore' ); ?></th>
      <td><?php echo  esc_attr("<span id='bank_account_name'> </span>"); ?></td>
       
      
    </tr>
    <tr>
      <th scope="row"><?php _e( 'Bank Account Number', 'aistore' ); ?></th>
      <td><?php echo esc_attr( "<span id='wbank'> </span>"); ?></td>
    
   
    </tr>
    
    <tr>
      <th scope="row"><?php _e( 'Name Of Bank', 'aistore' ); ?></th>
      <td><?php echo  esc_attr("<span id='name_of_bank'> </span>"); ?></td>
      
    </tr>
    
    
     <tr>
      <th scope="row"><?php _e( 'Bank Address', 'aistore' ); ?></th>
      <td><?php echo esc_attr( "<span id='bank_address'> </span>"); ?></td>
      
    </tr>
    
    <tr>
      <th scope="row"><?php _e( 'IFSC Code', 'aistore' ); ?></th>
      <td><?php echo esc_attr( "<span id='ifsc_code'> </span>"); ?></td>
      
    </tr>
      
     <tr>
      <th scope="row"><?php _e( 'UPI Code', 'aistore' ); ?></th>
      <td><?php echo  esc_attr("<span id='upi_code'> </span>"); ?></td>
      
    </tr>
    
     <tr>
      <th scope="row"><?php _e( 'PAYTM Number', 'aistore' ); ?></th>
      <td><?php echo esc_attr( "<span id='paytm_number'> </span>"); ?></td>
      
    </tr>
      <tr>
      <th scope="row"><?php _e( 'GOOGLE_PAY', 'aistore' ); ?></th>
      <td><?php echo esc_attr("<span id='google_pay'> </span>"); ?></td>
      
    </tr>
  </tbody>
</table>
      </div>
     
   
   
    </div>
  </div>
</div>

<script>




 $('#aistore_exampleModal').on('show.bs.modal', function (event) {
     
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever1')
  // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  
 // modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input#coin').val(recipient)
  
  
    var username = button.data('name')
    var wbank=button.data('wbank')
    var bank_account_name=button.data('bank_account_name')
  var name_of_bank=button.data('name_of_bank')
  var bank_address=button.data('bank_address')
  var amount=button.data('amount')
  var status=button.data('status')
  
    var ifsc_code=button.data('ifsc_code')
  var upi_code=button.data('upi_code')
  var paytm_number=button.data('paytm_number')
  var google_pay=button.data('google_pay')
  
  
<?php

 ?>
   document.getElementById('wbank').innerText=wbank;
   document.getElementById('bank_account_name').innerText=bank_account_name;
document.getElementById('name_of_bank').innerText=name_of_bank;
   document.getElementById('bank_address').innerText=bank_address;
 document.getElementById('username').innerText=username;
 document.getElementById('wid').innerText=recipient;
  document.getElementById('amount').innerText=amount;
 document.getElementById('status').innerText=status;
 
  document.getElementById('ifsc_code').innerText=ifsc_code;
 document.getElementById('upi_code').innerText=upi_code;
  document.getElementById('paytm_number').innerText=paytm_number;
 document.getElementById('google_pay').innerText=google_pay;
 
 
 
})
</script>



<?php
     
 }


