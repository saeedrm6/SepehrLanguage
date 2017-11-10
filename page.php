<?php get_header(); ?>

<?php while(have_posts()) : the_post(); ?>
<div class="col-md-12 toppagebar">
    <h2><?php echo the_title(); ?></h2>
</div>
<div class="clearfix"></div>
<?php
the_content();
endwhile;
?>
    <div class="clearfix"></div>


<?php get_footer();