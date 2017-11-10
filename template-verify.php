<?php
/*
 * Template Name: پردازش تراکنش
 */
get_header();
$Status = $_GET['Status'];
$MerchantID = '46e4275e-0034-11e7-8d85-005056a20---';
$Authority = $_GET['Authority'];
$sql="SELECT * FROM `pay` WHERE `Authority` LIKE {$Authority};";
global $wpdb;
$Amount = $wpdb->get_results($sql);
$Fname = $Amount[0]->fname;
$Lname = $Amount[0]->lname;
$Mobile = $Amount[0]->Mobile;
$Description = $Amount[0]->Description;
$Email = $Amount[0]->Email;
$Amount = $Amount[0]->Amount;

?>
<div class="col-md-12 toppagebar">
    <h2>نتیجه تراکنش</h2>
</div>
<div class="clearfix"></div>
<?php
if($_GET['Status'] == 'OK'){
    // URL also Can be https://ir.zarinpal.com/pg/services/WebGate/wsdl
    $client = new SoapClient('https://de.zarinpal.com/pg/services/WebGate/wsdl', array('encoding' => 'UTF-8'));

    $result = $client->PaymentVerification(
        array(
            'MerchantID'	 => $MerchantID,
            'Authority' 	 => $Authority,
            'Amount'	 => $Amount
        )
    );
    ?>
    <div class="container" dir="rtl">
    <?php
    if ($result->Status==100){ ?>
        <h3 dir="rtl" class="text-success">تراکنش موفقیت آمیز بود</h3>
        <p dir="rtl" class="alert alert-success yekan">با تشکر از پرداخت شما. اطلاعات پرداختی شما ثبت شد. همکاران ما سایر اقدامت لازم جهت قطعی شدن ثبت نام شما را انجام خواهند داد</p> <br>
        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading yekan">اطلاعات ثبتی</div>
            <table class="table">
                <thead>
                <th class="yekan center-text" style="text-align: right;">نام</th>
                <th class="yekan center-text" style="text-align: right;">نام خانوادگی</th>
                <th class="yekan center-text" style="text-align: right;">توضیحات</th>
                <th class="yekan center-text" style="text-align: right;">وضعیت تراکنش</th>
                <th class="yekan center-text" style="text-align: right;">شماره تراکنش</th>
                </thead>
                <tbody>
                <tr>
                    <td class="yekan center-text"><?php
                        echo $Fname;
                        ?></td>
                    <td class="yekan center-text"><?php
                        echo $Lname;
                        ?></td>
                    <td class="yekan center-text"><?php
                        echo $Description;
                        ?></td>
                    <td class="yekan center-text">موفق</td>
                    <td class="yekan center-text">
                        <?php
                        echo "{$result->RefID}";
                        ?>
                    </td>
                </tr>
                </tbody>
            </table>

        </div>
    <?php
        $sql = "UPDATE `pay` SET `refid`={$result->RefID} WHERE `Authority`={$Authority}";
        global $wpdb;
        $wpdb->query($sql);
        $time = current_time('mysql');
        $data = array(
            'comment_post_ID' => get_the_ID(),
            'comment_author' => $Fname.' '.$Lname,
            'comment_author_email' => $Email,
            'comment_author_url' => 'http://',
            'comment_content' => $Description,
            'comment_type' => '',
            'comment_parent' => 0,
            'user_id' => 1,
            'comment_author_IP' => '127.0.0.1',
            'comment_agent' => 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.10) Gecko/2009042316 Firefox/3.0.10 (.NET CLR 3.5.30729)',
            'comment_date' => $time,
            'comment_approved' => 0,
        );

        wp_insert_comment($data);
    }else{ ?>
        <h3 dir="rtl" class="text-danger">خطا در تراکنش</h3>
    <?php }
    ?>
    </div>

    <?php

}else{ ?>
    <div class="container" dir="rtl">
        <h3 dir="rtl" class="text-center">فرآیند تراکنش توسط کاربر لغو گردید</h3>
        <p dir="rtl" class="text-center"><?php echo $result->Status . '  ' . $result->RefID; ?></p>
    </div>
<?php
    }
?>


<?php

get_footer();