<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

class Saksh_Wallet{
    
    
    public function balance($user_id, $currency)
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

public function debit($user_id, $amount, $currency, $description)
{
    global $wpdb;
    $type = "debit";
$wallet = new Saksh_Wallet();
    $old_balance = $wallet->balance($user_id, $currency);

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

public function credit($user_id, $amount, $currency, $description)
{
    global $wpdb;
    $type = "credit";
$wallet = new Saksh_Wallet();
    $old_balance = $wallet->balance($user_id, $currency);

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



public function transaction_history($user_id, $currency)
{

    global $wpdb;

    $sql = "SELECT * FROM {$wpdb->prefix}aistore_wallet_transactions WHERE currency=$currency and user_id=$user_id ";

    return $wpdb->get_results($sql, 'ARRAY_A');

}


}