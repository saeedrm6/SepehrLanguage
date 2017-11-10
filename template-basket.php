<?php
/*
 * Template Name: سبد خرید
 */
get_header();
if (!isset($_POST['ID'])){

}else{
    $ID = $_POST['ID'];
    global $post;
    $newpost=get_post($ID);
    ?>
    <div class="clearfix"></div>
    <?php
    while (have_posts()):
        the_post();
        $post_meta = get_post_meta($ID);
        @$money = array_unique($post_meta['coursemony'])[0];
        @$nums = array_unique($post_meta['coursenum'])[0];
    ?>
    <div class="container">
        <div class="col-md-4 col-lg-4 col-xs-12">
            <center><h3 class="yekan">اطلاعات دوره آموزشی</h3></center>
            <center>
                <?php echo get_the_post_thumbnail($ID,'post-thumbnail'); ?>
                <table class="table">
                    <thead>
                    <tr><th class="yekan text-center">نام دوره</th>
                        <th class="yekan text-center">تعداد جلسات</th>
                        <th class="yekan text-center">شهریه</th>
                    </tr></thead>
                    <tbody>
                    <tr>
                        <td class="roboto text-center"><?php echo $newpost->post_title; ?></td>
                        <td class="yekan text-center"><?php echo $nums; ?></td>
                        <td dir="rtl" class="yekan text-center info"><?php echo $money.'تومان'; ?></td>
                    </tr>
                    </tbody>
                </table>
            </center>
        </div>
        <div class="col-md-8" dir="rtl">
            <h3>لطفا اطلاعات خود را با دقت وارد نمایید</h3>
            <h5>لطفا  ایمیل و تلفن همراه معتبر در فرم زیر وارد فرمایید</h5>
            <br>
            <form method="post" action="http://zabankadehsepehr.com/request/" class="form">
                <label class="yekan">نام</label>
                <input name="Fname" class="yekan form-control" placeholder="نام" aria-describedby="basic-addon1" required>
                <br>
                <label class="yekan">نام خانوادگی</label>
                <input name="Lname" class="yekan form-control" placeholder="نام خانوادگی" aria-describedby="basic-addon1" required>
                <br>
                <label class="yekan">آدرس</label>
                <input name="Address" class="yekan form-control" placeholder="آدرس" aria-describedby="basic-addon1">
                <br>
                <label class="yekan">ایمیل*</label>
                <input name="Email" class="yekan form-control" placeholder="Email" aria-describedby="basic-addon1" style="direction: ltr !important;" required>
                <br>
                <label class="yekan">موبایل*</label>
                <input name="Mobile" class="yekan form-control" placeholder="موبایل" aria-describedby="basic-addon1" required>
                <br>
                <input type="hidden" name="price" class="yekan form-control" placeholder="موبایل" aria-describedby="basic-addon1" value="<?php echo $money; ?>">
                <input type="hidden" name="course" class="yekan form-control" placeholder="موبایل" aria-describedby="basic-addon1" value="<?php echo $newpost->post_title;  ?>">
                <center><input type="submit" name="enter" value="پرداخت" class="yekan btn btn-danger"></center>
            </form>
            <br>
        </div>
    </div>

        <?php
        endwhile;
        ?>


<?php
}
?>


<?php
get_footer();
