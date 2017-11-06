
	<div class="sidebar-toggle">
		<div class="sidebar-toggle-line-wrap">
			<span class="sidebar-toggle-line sidebar-toggle-line-first"></span>
			<span class="sidebar-toggle-line sidebar-toggle-line-middle"></span>
			<span class="sidebar-toggle-line sidebar-toggle-line-last"></span>
		</div>
	</div>
	<aside id="sidebar" class="sidebar">
		<div class="sidebar-inner">

			<section class="site-overview sidebar-panel sidebar-panel-active">
				<div class="site-author motion-element">
					<img class="site-author-image" src="<?php wexweb('admin-photo','');?>" alt="<?php wexweb('site_name','');?>" />
				</div>

				<p class="site-description motion-element" itemprop="description"><?php wexweb('description','Everything is hard before it is easy') ;?></p>
				<nav class="site-state motion-element">
					<div class="site-state-item site-state-posts">
						<span class="site-state-item-count">
							<?php $count_posts = wp_count_posts(); echo $published_posts =$count_posts->publish;?>
						</span>
						<span class="site-state-item-name">日志</span>
					</div>
					<div class="site-state-item site-state-categories">
						<span class="site-state-item-count">
							<?php echo $count_categories = wp_count_terms('category'); ?>
						</span>
						<span class="site-state-item-name">分类</span>
					</div>
					<div class="site-state-item site-state-tags">
						<span class="site-state-item-count">
							<?php echo $count_tags = wp_count_terms('post_tag'); ?>
						</span>
						<span class="site-state-item-name">标签</span>
					</div>
				</nav>

				<?php

					if (cs_get_option('friendslink_switcher')==true){
						if(cs_get_option('friendlink_radio')=='index'){
							if(is_home()){ include 'element/sidebar-friendlink.php'; }
						}
						elseif(cs_get_option('friendlink_radio')=='EveryPage'){
							include 'element/sidebar-friendlink.php';
						}
					}

				?>


			</section>
		</div>
	</aside>




</main>