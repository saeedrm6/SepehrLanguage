<?php
define("sepehr", get_template_directory_uri());
defined('Site_url')            ? null : define('Site_url', get_site_url());

//require_once "inc/wp-bootstrap-navwalker.php";

function sepehr_setup(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size( 'news', 230, 230, true );
    register_nav_menus(
        array(
            'top'=>'منوی بالا',
            'main'=>'منوی اصلی',
            'mobile'=>'منوی موبایل'
        )
    );
}
add_action('after_setup_theme' , "sepehr_setup");
function sepehr_scripts()
{
    wp_enqueue_style('bootstrap',sepehr . '/css/bootstrap.min.css');
    wp_enqueue_style('fontawesome',sepehr . '/css/font-awesome.min.css');
    wp_enqueue_style('owl.carousel',sepehr . '/css/owl.carousel.min.css');
    wp_enqueue_style('style',sepehr . '/style.css');
    wp_enqueue_style('responsive',sepehr . '/css/responsive.css');



//    wp_enqueue_script('jquery',sepehr.'/js/jquery.min.js',null,'1.0',true);
    wp_enqueue_script('bootstrapmin',sepehr.'/js/bootstrap.min.js',array('jquery'),'1.0',true);
    wp_enqueue_script('owl.carousel',sepehr . '/js/owl.carousel.js',array('jquery'),'1',false);
    wp_enqueue_script('owl.highlight',sepehr . '/js/highlight.js',array('jquery'),'1',true);
    wp_enqueue_script('owl.app',sepehr . '/js/app.js',array('jquery'),'1',true);

}
add_action('wp_enqueue_scripts','sepehr_scripts');


function course_posts_type() {

    $labels = array(
        'name'                  => _x( 'دوره های آموزشی', 'Post Type General Name', 'click' ),
        'singular_name'         => _x( 'دوره آموزشی', 'Post Type Singular Name', 'click' ),
        'menu_name'             => __( 'دوره های آموزشی', 'click' ),
        'name_admin_bar'        => __( 'دوره های آموزشی', 'click' ),
        'archives'              => __( 'آرشیو', 'click' ),
        'parent_item_colon'     => __( 'والد دوره های آموزشی:', 'click' ),
        'all_items'             => __( 'همه دوره های آموزشی', 'click' ),
        'add_new_item'          => __( 'افزودن دوره آموزشی جدید', 'click' ),
        'add_new'               => __( 'افزودن دوره آموزشی', 'click' ),
        'new_item'              => __( 'دوره آموزشی جدید', 'click' ),
        'edit_item'             => __( 'ویرایش دوره آموزشی', 'click' ),
        'update_item'           => __( 'به روز رسانی دوره آموزشی', 'click' ),
        'view_item'             => __( 'نمایش دوره آموزشی', 'click' ),
        'search_items'          => __( 'جسجتو دوره های آموزشی', 'click' ),
        'not_found'             => __( 'یافت نشد!', 'click' ),
        'not_found_in_trash'    => __( 'در زباله دانی پیدا نشد', 'click' ),
        'featured_image'        => __( 'تصویر شاخص', 'click' ),
        'set_featured_image'    => __( 'تنظیم تصویر شاخص', 'click' ),
        'remove_featured_image' => __( 'حذف تصویر شاخص', 'click' ),
        'use_featured_image'    => __( 'استفاده به عنوان تصویر شاخص', 'click' ),
        'items_list'            => __( 'لیست ویدیوها', 'click' ),
        'filter_items_list'     => __( 'صافی کردن لیست ویدیوها', 'click' ),
    );
    $args = array(
        'label'                 => __( 'دوره های آموزشی', 'click' ),
        'description'           => __( 'دوره های آموزشی وب سایت سپهر', 'click' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'comments','MultiPostThumbnails', 'excerpt' ),
        'taxonomies'            => array( 'course_cat', 'course_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 20,
        'menu_icon'             => 'dashicons-book',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'capability_type'       => 'post',
    );
    register_post_type( 'course', $args );

}
add_action( 'init', 'course_posts_type', 0 );

/* click video post type */
// Register Custom Taxonomy
function course_texonomy() {

    $labels = array(
        'name'                       => _x( 'دوره های آموزشی', 'Taxonomy General Name', 'click' ),
        'singular_name'              => _x( 'دوره آموزشی', 'Taxonomy Singular Name', 'click' ),
        'menu_name'                  => __( 'دسته بندی دوره های آموزشی', 'click' ),
        'all_items'                  => __( 'همه دسته بندی ها', 'click' ),
        'add_new_item'               => __( 'افزودن دسته بندی جدید', 'click' ),
        'edit_item'                  => __( 'ویرایش دسته بندی', 'click' ),
        'update_item'                => __( 'به روز رسانی دسته بندی', 'click' ),
        'view_item'                  => __( 'نمایش دسته بندی', 'click' ),
        'add_or_remove_items'        => __( 'افزودن و یا حذف دسته بندی', 'click' ),
        'choose_from_most_used'      => __( 'انتخاب از بین محبوب ترین ها', 'click' ),
        'popular_items'              => __( 'دسته بندی های محبوب', 'click' ),
        'search_items'               => __( 'جستجو دسته بندی ها', 'click' ),
        'not_found'                  => __( 'یافت نشد!', 'click' ),
        'no_terms'                   => __( 'دسته بندی وجود ندارد', 'click' ),
        'items_list'                 => __( 'لیست دسته بندی ها', 'click' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
    );

    $tags_labels = array(
        'name'                       => 'برچسب ها',
        'singular_name'              => 'برچسب',
        'menu_name'                  => 'برچسب ها',
        'all_items'                  => 'همه برچسب ها',
        'edit_item'                  => 'ویرایش برچسب',
        'view_item'					 => 'مشاهده برچسب',
        'update_item'                => 'بروزرسانی برچسب',
        'add_new_item'               => 'افزودن برچسب جدید',
        'new_item_name'              => 'عنوان برچسب جدید',
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'search_items'               => 'جستجوی برچسب',
        'popular_items'              => 'برچسب های محبوب',
        'separate_items_with_commas' => 'برچسب ها را با ویرگول جدا کنید.',
        'add_or_remove_items'        => 'افزودن یا حذف برچسب ها',
        'choose_from_most_used'      => 'انتخاب از برچسب های بیشتر استفاده شده.',
        'not_found'                  => 'هیچ برچسبی پیدا نشد',

    );

    $tag_args = array(
        'labels'                  => $tags_labels,
        'hierarchical'            => false,
        'public'         		  => true,
        'rewrite'             	  => array( 'slug' => 'product-color' ),
    );
    register_taxonomy( 'course_cat', array( 'course' ), $args );
    register_taxonomy( 'course_tag', array( 'course' ), $tag_args );

}
add_action( 'init', 'course_texonomy', 0 );

add_filter( 'rwmb_meta_boxes', 'YOURPREFIX_register_meta_boxes' );
function YOURPREFIX_register_meta_boxes( $meta_boxes ) {
    $prefix = 'rw_';
    $meta_boxes[] = array(
        'title'         => __('مشخصات دوره آموزشی', 'click'),
        'post_types'    => array('course'),
        'context'       => 'normal',
        'priority'      => 'high',
        'fields'        => array(
            array(
                'name'  => 'تعداد جلسات',
                'id'    => 'coursenum',
                'type'  => 'number',
            ),
            array(
                'name'  => 'مبلغ شهریه',
                'desc'      => 'مبلغ را به تومان وارد کنید',
                'id'    => 'coursemony',
                'type'  => 'number',
            ),
        )
    );
    return $meta_boxes;
}
