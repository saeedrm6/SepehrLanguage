<?php
/*
 * Template Name: English American
 */
get_header();
?>
<br>
<div class="container">
    <div class="topfrench"><img src="<?php echo sepehr;?>/images/child/top.png" class="img-responsive text-center" alt=""></div>
</div>
<br>

    <div class="col-md-1"></div>
    <div class="col-md-10">
        <form action="http://zabankadehsepehr.com/%d8%ab%d8%a8%d8%aa-%d9%85%d8%b4%d8%ae%d8%b5%d8%a7%d8%aa-%d8%af%d8%a7%d9%86%d8%b4%d8%ac%d9%88/" method="post">
            <div class="tab1">
                <div class="col-md-2"><img src="<?php echo sepehr;?>/images/american/s.png" class="img-responsive" alt=""></div>
                <div class="col-md-10">
                    <?php
                    $args = array(
                        'post_type' => 'course',
                        'tax_query' => array(
                            array(
                                'taxonomy'			 => 'course_cat',
                                'field'   			 => 'term_id',
                                'terms'    		     => 54,
                                'operator'   		 => 'IN',
                            ),
                        ),
                        'posts_per_page' => 2,
                        'order' => 'ASC',
                        'orderby ' => 'date'
                    );
                    $tab1 = new WP_Query($args);
                    if ($tab1->have_posts()):
                        while ($tab1->have_posts()):
                            $tab1->the_post();
                            $post_meta = get_post_meta(get_the_ID());
                            @$money = array_unique($post_meta['coursemony'])[0];
                            @$nums = array_unique($post_meta['coursenum'])[0];
                            ?>

                            <div class="col-md-2 coursesbox">
                                <center><p class="btn btn-primary"><?php the_title(); ?></p></center>
                                <p class="text-center">تعداد جلسات : <?php  echo $nums;?></p>
                                <p class="text-center">مبلغ شهریه : <?php echo $money?> تومان</p>
                                <center><button type="submit" name="ID" value="<?php echo get_the_ID(); ?>" class="btn btn-danger">ثبت نام</button></center>
                            </div>
                            <?php
                        endwhile;
                    endif;
                    wp_reset_query();
                    ?>


                </div>
            </div>
            <div class="clearfix"></div>
            <div class="tab2">
                <div class="col-md-2"><img src="<?php echo sepehr;?>/images/american/s1.png" class="img-responsive" alt=""></div>
                <div class="col-md-10">
                    <?php
                    $args = array(
                        'post_type' => 'course',
                        'tax_query' => array(
                            array(
                                'taxonomy'			 => 'course_cat',
                                'field'   			 => 'term_id',
                                'terms'    		     => 55,
                                'operator'   		 => 'IN',
                            ),
                        ),
                        'posts_per_page' => 3,
                        'order' => 'ASC',
                        'orderby ' => 'date'
                    );
                    $tab1 = new WP_Query($args);
                    if ($tab1->have_posts()):
                        while ($tab1->have_posts()):
                            $tab1->the_post();
                            $post_meta = get_post_meta(get_the_ID());
                            @$money = array_unique($post_meta['coursemony'])[0];
                            @$nums = array_unique($post_meta['coursenum'])[0];
                            ?>

                            <div class="col-md-2 coursesbox">
                                <center><p class="btn btn-primary"><?php the_title(); ?></p></center>
                                <p class="text-center">تعداد جلسات : <?php  echo $nums;?></p>
                                <p class="text-center">مبلغ شهریه : <?php echo $money?> تومان</p>
                                <center><button type="submit" name="ID" value="<?php echo get_the_ID(); ?>" class="btn btn-danger">ثبت نام</button></center>
                            </div>
                            <?php
                        endwhile;
                    endif;
                    wp_reset_query();
                    ?>


                </div>
            </div>
            <div class="clearfix"></div>
            <div class="tab3">
                <div class="col-md-2"><img src="<?php echo sepehr;?>/images/american/s2.png" class="img-responsive" alt=""></div>
                <div class="col-md-10">
                    <?php
                    $args = array(
                        'post_type' => 'course',
                        'tax_query' => array(
                            array(
                                'taxonomy'			 => 'course_cat',
                                'field'   			 => 'term_id',
                                'terms'    		     => 56,
                                'operator'   		 => 'IN',
                            ),
                        ),
                        'posts_per_page' => 3,
                        'order' => 'ASC',
                        'orderby ' => 'date'
                    );
                    $tab1 = new WP_Query($args);
                    if ($tab1->have_posts()):
                        while ($tab1->have_posts()):
                            $tab1->the_post();
                            $post_meta = get_post_meta(get_the_ID());
                            @$money = array_unique($post_meta['coursemony'])[0];
                            @$nums = array_unique($post_meta['coursenum'])[0];
                            ?>

                            <div class="col-md-2 coursesbox">
                                <center><p class="btn btn-primary"><?php the_title(); ?></p></center>
                                <p class="text-center">تعداد جلسات : <?php  echo $nums;?></p>
                                <p class="text-center">مبلغ شهریه : <?php echo $money?> تومان</p>
                                <center><button type="submit" name="ID" value="<?php echo get_the_ID(); ?>" class="btn btn-danger">ثبت نام</button></center>
                            </div>
                            <?php
                        endwhile;
                    endif;
                    wp_reset_query();
                    ?>


                </div>
            </div>
            <div class="clearfix"></div>
            <div class="tab4">
                <div class="col-md-2"><img src="<?php echo sepehr;?>/images/american/s3.png" class="img-responsive" alt=""></div>
                <div class="col-md-10">
                    <?php
                    $args = array(
                        'post_type' => 'course',
                        'tax_query' => array(
                            array(
                                'taxonomy'			 => 'course_cat',
                                'field'   			 => 'term_id',
                                'terms'    		     => 57,
                                'operator'   		 => 'IN',
                            ),
                        ),
                        'posts_per_page' => 4,
                        'order' => 'ASC',
                        'orderby ' => 'date'
                    );
                    $tab1 = new WP_Query($args);
                    if ($tab1->have_posts()):
                        while ($tab1->have_posts()):
                            $tab1->the_post();
                            $post_meta = get_post_meta(get_the_ID());
                            @$money = array_unique($post_meta['coursemony'])[0];
                            @$nums = array_unique($post_meta['coursenum'])[0];
                            ?>

                            <div class="col-md-2 coursesbox">
                                <center><p class="btn btn-primary"><?php the_title(); ?></p></center>
                                <p class="text-center">تعداد جلسات : <?php  echo $nums;?></p>
                                <p class="text-center">مبلغ شهریه : <?php echo $money?> تومان</p>
                                <center><button type="submit" name="ID" value="<?php echo get_the_ID(); ?>" class="btn btn-danger">ثبت نام</button></center>
                            </div>
                            <?php
                        endwhile;
                    endif;
                    wp_reset_query();
                    ?>


                </div>
            </div>
            <div class="clearfix"></div>
            <div class="tab5">
                <div class="col-md-2"><img src="<?php echo sepehr;?>/images/american/s4.png" class="img-responsive" alt=""></div>
                <div class="col-md-10">
                    <?php
                    $args = array(
                        'post_type' => 'course',
                        'tax_query' => array(
                            array(
                                'taxonomy'			 => 'course_cat',
                                'field'   			 => 'term_id',
                                'terms'    		     => 58,
                                'operator'   		 => 'IN',
                            ),
                        ),
                        'posts_per_page' => 5,
                        'order' => 'ASC',
                        'orderby ' => 'date'
                    );
                    $tab1 = new WP_Query($args);
                    if ($tab1->have_posts()):
                        while ($tab1->have_posts()):
                            $tab1->the_post();
                            $post_meta = get_post_meta(get_the_ID());
                            @$money = array_unique($post_meta['coursemony'])[0];
                            @$nums = array_unique($post_meta['coursenum'])[0];
                            ?>

                            <div class="col-md-2 coursesbox">
                                <center><p class="btn btn-primary"><?php the_title(); ?></p></center>
                                <p class="text-center">تعداد جلسات : <?php  echo $nums;?></p>
                                <p class="text-center">مبلغ شهریه : <?php echo $money?> تومان</p>
                                <center><button type="submit" name="ID" value="<?php echo get_the_ID(); ?>" class="btn btn-danger">ثبت نام</button></center>
                            </div>
                            <?php
                        endwhile;
                    endif;
                    wp_reset_query();
                    ?>


                </div>
            </div>
            <div class="clearfix"></div>
            <div class="tab6">
                <div class="col-md-2"><img src="<?php echo sepehr;?>/images/american/s5.png" class="img-responsive" alt=""></div>
                <div class="col-md-10">
                    <?php
                    $args = array(
                        'post_type' => 'course',
                        'tax_query' => array(
                            array(
                                'taxonomy'			 => 'course_cat',
                                'field'   			 => 'term_id',
                                'terms'    		     => 59,
                                'operator'   		 => 'IN',
                            ),
                        ),
                        'posts_per_page' => 5,
                        'order' => 'ASC',
                        'orderby ' => 'date'
                    );
                    $tab1 = new WP_Query($args);
                    if ($tab1->have_posts()):
                        while ($tab1->have_posts()):
                            $tab1->the_post();
                            $post_meta = get_post_meta(get_the_ID());
                            @$money = array_unique($post_meta['coursemony'])[0];
                            @$nums = array_unique($post_meta['coursenum'])[0];
                            ?>

                            <div class="col-md-2 coursesbox">
                                <center><p class="btn btn-primary"><?php the_title(); ?></p></center>
                                <p class="text-center">تعداد جلسات : <?php  echo $nums;?></p>
                                <p class="text-center">مبلغ شهریه : <?php echo $money?> تومان</p>
                                <center><button type="submit" name="ID" value="<?php echo get_the_ID(); ?>" class="btn btn-danger">ثبت نام</button></center>
                            </div>
                            <?php
                        endwhile;
                    endif;
                    wp_reset_query();
                    ?>


                </div>
            </div>
            <div class="clearfix"></div>
        </form>
    </div>
    <div class="col-md-1"></div>

<div class="clearfix"></div>
<?php
get_footer();