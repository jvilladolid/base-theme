<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title(' | ', true, 'right'); ?></title>

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" >
	<link rel="shortcut icon" href="images/favicon_black.png" >
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png" >

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script type="text/javascript" id="ucfhb-script" src="https://universityheader.ucf.edu/bar/js/university-header.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/bootstrap/js/bootstrap.min.js"></script>

	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/sdes_main_ucf.js"></script>
	<script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
	<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/additional-methods.min.js"></script>

	
	<?php $settings = (array) get_option( 'sdes_theme_settings' ); ?>
	<?php if (!empty($settings['javascript'])) { ?>			
		<script>
			$(document).ready(function(){
				<?= $settings['javascript'] ?>
			});	
		</script>
	<?php } ?>

	<?php if (!empty($settings['javascript_libraries'])) { ?>			
		<script type="text/javascript" src="<?= $settings['javascript_libraries'] ?>"></script>
	<?php } ?>

	<?php if (!empty($settings['google_analytics_id'])) { ?>
		<script>

			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', "<?= $settings['google_analytics_id'] ?>", 'ucf.edu');
			ga('send', 'pageview');
			
		</script>
	<?php } ?>

	<?php if (!empty($settings['css'])) { ?>			
		<link rel="stylesheet" href="<?= $settings['css'] ?>">
	<?php } ?>

	<?php if (!empty($settings['subtitle'])) { 
		$subtitle = explode(":", $settings['subtitle']);
	 } ?>
	

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body>
	<!-- header -->
	<div class="container header">
		<div class="site-title">
			<a href="#"><?php bloginfo('name'); ?></a>
			<div class="site-subtitle">
				<a href="<?= $subtitle[1] ?>"><?= $subtitle[0] ?></a>
			</div>
		</div>
	</div>

	<!-- WP Navi -->
	<nav class="site-nav navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="navbar-collapse collapse">
				<?php
				wp_nav_menu(array('menu' => 'Pages', 'container' => '', 'items_wrap' => '<ul class="nav navbar-nav">%3$s</ul>'));
				?> 
				<p class="navbar-text navbar-right translate-button">
					<a href="http://it.sdes.ucf.edu/translate/" class="navbar-link">Translate
						<img alt="translate icon" src="<?php bloginfo('template_url'); ?>/images/fff_page_world.png" >
					</a>
				</p>
			</div>
		</div>
	</nav>

	<!-- content area -->
	<div class="container site-content">		
		<?php !is_page('Home') ? the_title( '<div class="page-header">'.links().'<h1>', '</h1></div>' ) : false ?>	 