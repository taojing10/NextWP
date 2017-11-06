<?php if ( is_home() ) { ?><title><?php bloginfo('name'); ?><?php if (get_query_var('paged')){

    echo '-第'; echo get_query_var('paged'); echo '页';}?> | <?php bloginfo('description'); ?></title><?php } ?>

<?php if ( is_search() ) { ?><title>“<?php  the_search_query();?>” 的搜索结果 | <?php bloginfo('name'); ?></title><?php } ?>

<?php if ( is_single() ) { ?><title><?php echo trim(wp_title('',0)); ?><?php if (get_query_var('page')){

    echo '-第'; echo get_query_var('page'); echo '页';}?> | <?php bloginfo('name'); ?></title><?php } ?>

<?php if ( is_page() ) { ?><title><?php echo trim(wp_title('',0)); ?> | <?php bloginfo('name'); ?></title><?php } ?>

<?php if ( is_category() ) { ?><title><?php single_cat_title(); ?><?php if (get_query_var('paged')){

    echo '-第'; echo get_query_var('paged'); echo '页';}?> | <?php bloginfo('name'); ?></title><?php } ?>

<?php if ( is_post_type_archive() ) { ?><title><?php post_type_archive_title(); ?><?php if (get_query_var('paged')){

    echo '-第'; echo get_query_var('paged'); echo '页';}?> | <?php bloginfo('name'); ?></title><?php } ?>

<?php if ( is_year() ) { ?><title><?php the_time('Y年'); ?>日志归档<?php if (get_query_var('paged')){

    echo '-第'; echo get_query_var('paged'); echo '页';}?> | <?php bloginfo('name'); ?></title><?php } ?>

<?php if ( is_month() ) { ?><title><?php the_time('Y年n月'); ?>日志归档<?php if (get_query_var('paged')){

    echo '-第'; echo get_query_var('paged'); echo '页';}?> | <?php bloginfo('name'); ?></title><?php } ?>

<?php if ( is_day() ) { ?><title><?php the_time('Y年n月j日'); ?>日志归档<?php if (get_query_var('paged')){

    echo '-第'; echo get_query_var('paged'); echo '页';}?> | <?php bloginfo('name'); ?></title><?php } ?>

<?php if (function_exists('is_tag')) { if ( is_tag() ) { ?><title><?php  single_tag_title("", true); ?> | <?php bloginfo('name'); ?></title><?php } ?><?php } ?>

<?php if ( is_author() ) {?><title><?php wp_title('');?>发布的所有日志 <?php if (get_query_var('paged')){

    echo '-第'; echo get_query_var('paged'); echo '页';}?> | <?php bloginfo('name'); ?></title><?php }?>
<?php if ( is_404() ) {?><title>页面不存在 | <?php bloginfo('name'); ?></title><?php }?>

<?php if (is_home() || is_front_page())
{
    $description = cs_get_option('description');
    $keywords = cs_get_option('keywords');
}
elseif (is_category()||is_post_type_archive() )
{
    $description = strip_tags(trim(category_description()));
    $keywords = single_cat_title('', false);
}
elseif (is_tag())
{
    $description = sprintf( __( '与标签 %s 相关联的文章列表'), single_tag_title('', false));
    $keywords = single_tag_title('', false);
}
elseif (is_single())
{
    if ($post->post_excerpt) {$description = $post->post_excerpt;}
    else {$description = mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 1400,"...","utf-8");}
    $keywords = "";
    $tags = wp_get_post_tags($post->ID);
    foreach ($tags as $tag ) {$keywords = $keywords . $tag->name . ", ";}
}
elseif (is_page())
{
    $keywords = get_post_meta($post->ID, "keywords", true);
    $description = get_post_meta($post->ID, "description", true);
}
?>
    <meta name="keywords" content="<?php echo $keywords ?>" />
    <meta name="description" content="<?php echo $description?>" />

