<!DOCTYPE html>
<html lang="fa">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head();  ?>
<script src="http://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places&key=AIzaSyBi9TBlO0XcCN3X2cEyIfydwjRpYXBQxnc" async="" defer="defer" type="text/javascript"></script>
</head>
<body>

<! -- Header -->
<div class="col-md-12 col-xs-12 col-sm-12 nopadding" id="top_menu">
        <div class="col-md-3 col-xs-6 col-sm-6" id="contacttop">
            <p class="pull-left"><i class="glyphicon glyphicon-earphone"></i> تلفن : 2233282 021</p>
        </div>

        <div class="col-md-6 col-xs-0 col-sm-0 hidden-sm hidden-xs">
            <p class="text-center" style="padding: 10px 0;"><a href="http://zabankadehsepehr.com">جهت ورود به شعبه ستارخان کلیک کنید</a></p>
        </div>

        <div class="col-md-3 col-xs-6 col-sm-6" id="contacttopp">
            <ul class="pull-right">
                <li><a href="https://instagram.com/_u/sepehr.language"><img src="<?php echo sepehr; ?>/images/insta.png" alt="" class="img-responsive"></a></li>
                <li><a href="https://t.me/sepehr_institute"><img src="<?php echo sepehr; ?>/images/tele.png" alt="" class="img-responsive"></a></li>
                <li><a href="https://t.me/sepehr_institute"><img src="<?php echo sepehr; ?>/images/aparat.png" alt="" class="img-responsive"></a></li>
            </ul>
        </div>
</div>
<div class="clearfix"></div>
<div class="visible-xs">
    <div class="mobilenavigate">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <?php
                wp_nav_menu( array(
                    'menu'              => 'main',
                    'theme_location'    => 'main',
                    'depth'             => 4,
                ));
                ?>
            </div><!-- /.container-fluid -->
        </nav>
    </div>
    <div class="logomon">
        <a href="#"><img src="<?php echo sepehr; ?>/images/logo-mobile.png" alt=""></a>
        <h4 class="text-center">زبانکده سپهر</h4>
        <br>
    </div>
</div>

<?php if (!is_home()){ ?>
<div class="mobilenavigate hidden-xs hidden-sm otherhead">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <?php
            wp_nav_menu( array(
                'menu'              => 'main',
                'theme_location'    => 'main',
                'depth'             => 4,
            ));
            ?>
        </div><!-- /.container-fluid -->
    </nav>
</div>


<?php
}
?>