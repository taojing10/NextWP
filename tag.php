<?php get_header();?>      
<main id="main" class="main">
	<div class="main-inner">
		<div id="content" class="content">
			<section id="posts" class="posts-expand">
				<span>标签 “<?php echo single_tag_title(); ?>” 下的文章</span>
				<?php  
					while(have_posts()) : the_post(); 
				?>                    
					<article class="post post-type-normal">
						<header class="post-header">
							<h1 class="post-title" itemprop="name headline">
								<a class="post-title-link" href="<?php the_permalink(); ?>"><?php the_title();?></a>
							</h1>
							<div class="post-meta">
							  <span class="post-time">发表于：<time itemprop="dateCreated" datetime="2016-08-13T17:40:00+00:00" content="1616-08-13"><?php the_time('Y-n-j') ?></time></span>
								<span class="post-category">
									 &nbsp; | &nbsp; 分类：<span itemprop="about"><?php $category = get_the_category(); echo "<a href='".get_category_link($category[0]->cat_ID)."'>".$category[0]->cat_name."</a>"; ?></span>
								</span> 
								<span class="post-views">
									 &nbsp; | &nbsp; 阅读：<span itemprop="about"><?php echo get_post_meta(get_the_ID(), "views", true); ?></span>
								</span>
								<span class="post-comments-count">&nbsp; | &nbsp; <?php comments_popup_link('暂无评论', '1 条评论', '% 条评论', '', '评论关闭'); ?></span>
							</div>
						</header>
						<div class="post-body">
							<p>
								<?php
									if ($post->post_excerpt) {
										_e(wp_trim_words( $post->post_excerpt, 150,'......' ));
									}
									else {
										_e(wp_trim_words( $post->post_content, 150,'......' ));
									}
								?>
							</p>
							<p class="more"><a href="<?php the_permalink(); ?>" title="<?php the_title();?>">阅读全文 »</a></p>
						</div>
						<footer class="post-footer">
							<div class="post-eof"></div>
						</footer>
					</article>
				<?php endwhile; ?>
			</section>
			<nav class="pagination"><?php if(function_exists('wpdx_paging_nav')) wpdx_paging_nav(); ?></nav>
		</div>
	</div>
<?php get_sidebar();?>
<?php get_footer();?>