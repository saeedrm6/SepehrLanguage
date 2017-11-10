<div class="clearfix"></div>
<div id="slider">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
<!--        <ol class="carousel-indicators">-->
<!--            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>-->
<!--            <li data-target="#myCarousel" data-slide-to="1"></li>-->
<!--        </ol>-->

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="<?php echo sepehr; ?>/images/slider/1.jpg" style="width:100%;">
            </div>
            <div class="item">
                <img src="<?php echo sepehr; ?>/images/slider/4.jpg" style="width:100%;">
            </div>
            <div class="item">
                <img src="<?php echo sepehr; ?>/images/slider/5.jpg" style="width:100%;">
            </div>
            <div class="item">
                <img src="<?php echo sepehr; ?>/images/slider/6.jpg" style="width:100%;">
            </div>
            <div class="item">
                <img src="<?php echo sepehr; ?>/images/slider/2.jpg" style="width:100%;">
            </div>
            <div class="item">
                <img src="<?php echo sepehr; ?>/images/slider/7.jpg" style="width:100%;">
            </div>
            <div class="item">
                <img src="<?php echo sepehr; ?>/images/slider/8.jpg" style="width:100%;">
            </div>

        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div id="bottomslider"></div>
    <div id="headslidemenu" class="visible-md visible-lg">
        <nav class="navbar navbar-default">
            <div class="container-fluid desktopheader">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="<?php echo sepehr; ?>/images/logo.png" alt=""></a>
                </div>

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
</div>
