<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/19 0019
 * Time: 下午 5:52
 */
add_theme_support( 'post-thumbnails', array( 'post','page' ) );
add_filter('image_size_names_choose', 'wpjam_image_size_names_choose');
function wpjam_image_size_names_choose($image_sizes){
    unset($image_sizes['thumbnail']);
    unset($image_sizes['medium']);
    unset($image_sizes['large']);
    return $image_sizes;
}
function tesetu(){
    $full_image_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
    echo $full_image_url[0];

}