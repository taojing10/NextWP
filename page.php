<?php get_header();if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    <main id="main" class="main">
        <div class="main-inner">
            <div id="content" class="content">
                <div id="posts" class="posts-expand">
                    <article class="post post-type-normal " itemscope itemtype="http://schema.org/Article">
                        <header class="post-header">
                            <h1 class="post-title" itemprop="name headline"><?php the_title();?></h1>
                        </header>
                        <div class="post-body">
                        <span itemprop="articleBody">
                            <p><?php the_content();?></p>
                        </span>
                        </div>
                        <footer class="post-footer">

                            <div class="post-tags"><?php the_tags('',' ','');?></div>


                        </footer>
                    </article>
                </div>
            </div>
        </div>
    </main>

<?php endwhile; ?>
<?php endif; ?>
<?php get_sidebar();?>
<?php get_footer();?>