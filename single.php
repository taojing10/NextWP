<?php get_header();if( have_posts() ) : while( have_posts() ) : the_post(); ?>
	<main id="main" class="main">
		<div class="main-inner">
			<div id="content" class="content">
				<div id="posts" class="posts-expand">
					<article class="post post-type-normal " itemscope itemtype="http://schema.org/Article">
						<header class="post-header">
							<h1 class="post-title" itemprop="name headline"><?php the_title();?></h1>
							<div class="post-meta">
							  <span class="post-time"><time itemprop="dateCreated" datetime="2016-08-13T17:40:00+00:00" content="1616-08-13"><?php the_time('Y-n-j') ?></time></span>
								<span class="post-category">
									 &nbsp; | &nbsp; <span itemprop="about"><?php $category = get_the_category(); echo "<a href='".get_category_link($category[0]->cat_ID)."'>".$category[0]->cat_name."</a>"; ?></span>
								</span> 
								<span class="post-views">
									 &nbsp; | &nbsp; 阅读：<span itemprop="about"><?php echo get_post_meta(get_the_ID(), "views", true); ?></span>
								</span>
								<span class="post-comments-count">&nbsp; | &nbsp; <?php comments_popup_link('暂无评论', '1 条评论', '% 条评论', '', '评论关闭'); ?></span>
							</div>
		
						</header>
						<div class="post-body">
							<span itemprop="articleBody"><p><?php the_content();?></p></span>
						</div>


						<footer class="post-footer">
							<div class="post-tags"><?php the_tags('',' ','');?></div>
						</footer>
						
						<div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_fbook" data-cmd="fbook" title="分享到Facebook"></a><a href="#" class="bds_linkedin" data-cmd="linkedin" title="分享到linkedin"></a></div>
						<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"24"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
						
						
						
							<?php if ( comments_open() || get_comments_number() ) : ?>
								<div class="padding-content white-color margin-top-40">
									<?php comments_template(); ?>
								</div>
							<?php endif; ?>						
						
						
						
					</article>
				</div>
			</div>
		</div>
	</main>

<?php endwhile; ?>
<?php endif; ?>
<?php get_sidebar();?>
<?php get_footer();?>