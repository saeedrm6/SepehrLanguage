<?php
/*
 * Template Name: ساخت تراکنش
 */
if (!isset($_POST)){

}else{
    $Fname=$_POST['Fname'];
    $Lname=$_POST['Lname'];
    $cource_ch = $_POST['course'];
    if ($Fname=='' || $Lname=='') {
        echo '<br><p class="yekan">اطلاعات به صورت ناقص وارد شده است</p>';
    }else{
        $MerchantID = '46e4275e-0034-11e7-8d85-005056a20---';  //Required
        $Amount = $_POST['price']; //Amount will be based on Toman  - Required
        $Email = $_POST['Email']; // Optional
        $Mobile =$_POST['Mobile']; // Optional
        $Address=$_POST['Address'];
        $Description = $Fname .' '. $Lname .' -- ' . $cource_ch .' -- '. $Mobile .' -- '.$Address . ' -- ' . $Email;
        $CallbackURL = 'http://zabankadehsepehr.com/verify';  // Required
        $client = new SoapClient('https://de.zarinpal.com/pg/services/WebGate/wsdl', array('encoding' => 'UTF-8'));
        $result = $client->PaymentRequest(
            array(
                'MerchantID' 	=> $MerchantID,
                'Amount' 	=> $Amount,
                'Description' 	=> $Description,
                'Email' 	=> $Email,
                'Mobile' 	=> $Mobile,
                'CallbackURL' 	=> $CallbackURL
            )
        );
        $auth = $result->Authority;
        $status = $result->Status;
        date_default_timezone_set("Iran");
        $micro_date = microtime();
        $date_array = explode(" ",$micro_date);
        $time = date("Y-m-d H:i:s",$date_array[1]);
        $sql = "INSERT INTO pay(fname, lname, time, Mobile, Description, Email, Amount, Authority) VALUES ('$Fname','$Lname','$time','$Mobile','$Description','$Email','$Amount','$auth')";
        global $wpdb;
        $wpdb->query($sql);
        if($status == 100)
        {
            Header('Location: https://www.zarinpal.com/pg/StartPay/'.$auth);
            exit;
        } else {
            echo'ERR: '.$status;
        }
    }
}