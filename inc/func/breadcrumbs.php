<?php
//志坤20170408写
function wex_breadcrumbs() {
    $delimiter = '>'; // 分隔符
    $before = ''; // 在当前链接前插入
    $after = ''; // 在当前链接后插入
    if ( !is_home() && !is_front_page() || is_paged() ) {
        echo ' <ol class="breadcrumb">'.__( '' , 'cmp' );
        global $post;
        $homeLink = home_url();
        echo ' <a itemprop="breadcrumb" href="' . $homeLink . '">' . __( '主页' , 'cmp' ) . '</a> ' . $delimiter . ' ';
        if ( is_category() ) { // 分类 存档
            global $wp_query;
            $cat_obj = $wp_query->get_queried_object();
            $thisCat = $cat_obj->term_id;
            $thisCat = get_category($thisCat);
            $parentCat = get_category($thisCat->parent);
            if ($thisCat->parent != 0){
                $cat_code = get_category_parents($parentCat, TRUE, ' ' . $delimiter . ' ');
                echo $cat_code = str_replace ('<a','<a itemprop="breadcrumb"', $cat_code );
            }
            echo $before . '' . single_cat_title('', false) . '' . $after;
        } elseif ( is_day() ) { // 天 存档
            echo '<a itemprop="breadcrumb" href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
            echo '<a itemprop="breadcrumb"  href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
            echo $before . get_the_time('d') . $after;
        } elseif ( is_month() ) { // 月 存档
            echo '<a itemprop="breadcrumb" href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
            echo $before . get_the_time('F') . $after;
        } elseif ( is_year() ) { // 年 存档
            echo $before . get_the_time('Y') . $after;
        } elseif ( is_single() && !is_attachment() ) { // 文章
            if ( get_post_type() != 'post' ) { // 自定义文章类型
                $post_type = get_post_type_object(get_post_type());
                $slug = $post_type->rewrite;
                echo '<a itemprop="breadcrumb" href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a> ' . $delimiter . ' ';
                echo $before . get_the_title() . $after;
            } else { // 文章 post
                $cat = get_the_category(); $cat = $cat[0];
                $cat_code = get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
                echo $cat_code = str_replace ('<a','<a itemprop="breadcrumb"', $cat_code );
                echo $before . get_the_title() . $after;
            }
        } elseif ( !is_single() && !is_page() && get_post_type() != 'post' ) {
            $post_type = get_post_type_object(get_post_type());
            echo $before . $post_type->labels->singular_name . $after;
        } elseif ( is_attachment() ) { // 附件
            $parent = get_post($post->post_parent);
            $cat = get_the_category($parent->ID); $cat = $cat[0];
            echo '<a itemprop="breadcrumb" href="' . get_permalink($parent) . '">' . $parent->post_title . '</a> ' . $delimiter . ' ';
            echo $before . get_the_title() . $after;
        } elseif ( is_page() && !$post->post_parent ) { // 页面
            echo $before . get_the_title() . $after;
        } elseif ( is_page() && $post->post_parent ) { // 父级页面
            $parent_id  = $post->post_parent;
            $breadcrumbs = array();
            while ($parent_id) {
                $page = get_page($parent_id);
                $breadcrumbs[] = '<a itemprop="breadcrumb" href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
                $parent_id  = $page->post_parent;
            }
            $breadcrumbs = array_reverse($breadcrumbs);
            foreach ($breadcrumbs as $crumb) echo $crumb . ' ' . $delimiter . ' ';
            echo $before . get_the_title() . $after;
        } elseif ( is_search() ) { // 搜索结果
            echo $before ;
            printf( __( '“%s”的搜索结果', 'cmp' ),  get_search_query() );
            echo  $after;
        } elseif ( is_tag() ) { //标签 存档
            echo $before ;
            printf( __( 'Tag Archives: %s', 'cmp' ), single_tag_title( '', false ) );
            echo  $after;
        } elseif ( is_author() ) { // 作者存档
            global $author;
            $userdata = get_userdata($author);
            echo $before ;
            printf( __( 'Author Archives: %s', 'cmp' ),  $userdata->display_name );
            echo  $after;
        } elseif ( is_404() ) { // 404 页面
            echo $before;
            _e( 'Not Found', 'cmp' );
            echo  $after;
        }
        if ( get_query_var('paged') ) { // 分页
            if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() )
                echo sprintf( __( '( 第 %s 页)', 'cmp' ), get_query_var('paged') );
        }
        echo '</ol>';
    }
}


?>