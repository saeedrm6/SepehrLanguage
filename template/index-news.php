<div class="clearfix"></div>
<section id="news">
    <div class="col-md-4" id="newspic">
        <img src="<?php echo sepehr;?>/images/news.png" class="img-responsive" alt="">
    </div>
    <div class="col-md-8">
        <div class="owl-carousel owl-theme">

            <?php

            $query = new WP_Query(
                array(
                    'showposts' => 7,
                    'cat' => 3
                )
            );
            if ($query->have_posts()):
                while ($query->have_posts()):
                   $query->the_post();
                    $thumbnail = get_the_post_thumbnail(get_the_ID(),'news','');
                    ?>

                    <div class="item">
                        <div class="newsbox">
                            <div class="thumbnailnews">
                                <a href="<?php echo the_permalink(); ?>"><?php echo $thumbnail; ?></a>
                            </div>
                            <div class="newscaption">
                                <a href="<?php echo the_permalink(); ?>"><h4><?php echo the_title(); ?></h4></a>
                                <p class="newsdate"><?php echo the_date('y-m-d') ; ?></p>
                                <a href="<?php echo the_permalink(); ?>" class="btn btn-default btn-sm">ادامه خبر</a>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

            <?php
                endwhile;
            endif;
            ?>


        </div>

     </div>
</section>