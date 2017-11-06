<?php get_header();?>
<main id="main" class="main">
    <div class="main-inner">
        <div id="content" class="content">
            <section id="posts" class="posts-collapse">
                <span class="archive-move-on"></span>

                <span class="archive-page-counter" style="position: relative;">“<?php  the_search_query();?>” 的搜索结果</span>

                <?php
                if (have_posts() ) {while (have_posts() ):the_post();


                    include 'element/list-item-thin.php';

                endwhile;}
                else{

                    if (is_search()){
                        echo '<h2 style="margin-top: 160px;">你搜索的东西貌似不存在</h2>';

                    }
                }
                ?>
            </section>
            <?php wex_pagenavi();?>
        </div>
    </div>
</main>
<?php get_sidebar();?>
<?php get_footer();?>
