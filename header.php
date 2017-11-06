<!doctype html>
<html class="theme-next use-motion theme-next-mist">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<link rel="shortcut icon" href="<?php wexweb('favicon','');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/css/font-css/current.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/css/font.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/css/jquery.fancybox.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>" />
	<script type="text/javascript" id="hexo.configuration">
		var CONFIG = {
			scheme: 'Mist',
			motion: true,
			sidebar: 'post'
		};
	</script>
	<?php
		include ('seo.php');
		wp_head();
	?>
</head>

<body>
	<div class="container one-column page-home">
	<div class="headband"></div>
	<header id="header" class="header">
		<div class="header-inner">
			<div class="site-meta">
				<?php
					if (cs_get_option('logo_switcher')==true){
						include ('element/header-img-logo.php');
					}
					else{
						include ('element/header-text-logo.php');
					}
				?>
			</div>
			<div class="site-nav-toggle">
				<button>
					<span class="btn-bar"></span>
					<span class="btn-bar"></span>
					<span class="btn-bar"></span>
				</button>
			</div>
			<nav class="site-nav">
				<?php
					$main = array(
						'theme_location'  =>'main-menu',
						'container'       => 'false',
						'menu_class'      => 'menu menu-left',
						'menu_id'         => 'menu',
						'fallback_cb'     => 'wp_page_menu',
						'depth'           => 1,
					);
					wp_nav_menu( $main );
				?>
				<div class="site-search">
					<form class="site-search-form">
						<input type="text" id="st-search-input" name="s" class="st-search-input st-default-search-input"
					autocomplete="off" autocorrect="off" autocapitalize="off" value="" />
					</form>
				</div>
			</nav>
		</div>
	</header>