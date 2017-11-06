<?php

/**
 * 数字分页函数
 * 因为wordpress默认仅仅提供简单分页
 * 所以要实现数字分页，需要自定义函数
 * @Param int $range			数字分页的宽度
 * @Return string|empty		输出分页的HTML代码
 */
function wex_pagenavi( $range = 4 ) {
    global $paged,$wp_query;
    if ( !$max_page ) {
        $max_page = $wp_query->max_num_pages;
    }
    if( $max_page >1 ) {
        echo '<nav class="pagination">';
        if( !$paged ){
            $paged = 1;
        }

        previous_posts_link('<');
        if ( $max_page >$range ) {
            if( $paged <$range ) {
                for( $i = 1; $i <= ($range +1); $i++ ) {
                    echo "<a href='".get_pagenum_link($i) ."'";
                    if($i==$paged) echo " class='current'";echo ">$i</a>";
                }
            }elseif($paged >= ($max_page -ceil(($range/2)))){
                for($i = $max_page -$range;$i <= $max_page;$i++){
                    echo "<a href='".get_pagenum_link($i) ."'";
                    if($i==$paged)echo " class='current'";echo ">$i</a>";
                }
            }elseif($paged >= $range &&$paged <($max_page -ceil(($range/2)))){
                for($i = ($paged -ceil($range/2));$i <= ($paged +ceil(($range/2)));$i++){
                    echo "<a href='".get_pagenum_link($i) ."'";if($i==$paged) echo " class='current'";echo ">$i</a>";
                }
            }
        }else{
            for($i = 1;$i <= $max_page;$i++){
                echo "<a href='".get_pagenum_link($i) ."'";
                if($i==$paged)echo " class='current'";echo ">$i</a>";
            }
        }
        next_posts_link('>');


        echo "</nav>\n";
    }
}
//


?>