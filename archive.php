<?php get_header();?>
<main id="main" class="main">
    <div class="main-inner">
        <div id="content" class="content">
            <section id="posts" class="posts-collapse">
                <span class="archive-move-on"></span>

                <span class="archive-page-counter" style="position: relative;"><?php wex_breadcrumbs();?></span>

                <?php
                if (have_posts() ) {while (have_posts() ):the_post();


                    include 'element/list-item-thin.php';

                endwhile;}
                else{
                    echo '<h4 style="margin-top: 160px;">好像出了一些问题，这里空空如也</h4>';
                }
                ?>
            </section>
            <?php wex_pagenavi();?>
        </div>
    </div>
</main>
<?php get_sidebar();?>
<?php get_footer();?>
