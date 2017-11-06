			<footer id="footer" class="footer">
				<div class="footer-inner">
					<div class="copyright">
						<span>&nbsp;&copy;&nbsp;</span>
						<span>2003-<?php echo date("Y"); ?></span>
						<span class="author" itemprop="copyrightHolder"><a href="<?php bloginfo('url');?>"><?php wexweb('site_name','平靖の天堂');?></a></span>
						<div class="right">Powered by WordPress | Theme: <a href="https://blog.jing.do/5945">NextWP</a></div>
					</div>
				</div>
			</footer>
			<div class="back-to-top"></div>
		</div>

		
		<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/index.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/jquery.fancybox.pack.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/fancy-box.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/helpers.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/velocity.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/velocity.ui.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/motion.js" id="motion.global"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/fastclick.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/lazyload.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/bootstrap.js"></script>

		
		
		
		<?php
			if(is_single()){
				echo '<script type="text/javascript" src="'.get_template_directory_uri().'/js/bootstrap.scrollspy.js"></script>';
				echo '<script type="text/javascript" src="'.get_template_directory_uri().'/js/article.js"></script>';
			}
			wp_footer();
		?>
	</body>

</html>