<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Amazium site</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	<script type="text/javascript">
		/mobi/i.test(navigator.userAgent) && !location.hash  && setTimeout(function () {
		  if (!pageYOffset) window.scrollTo(0, 1);
		}, 1000);
	</script>

	<!-- CSS -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/base.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/amazium.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/form.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/layout.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/custom.css">


	<!-- Favicons -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon.png">

	<?php wp_head(); ?>
</head>
<body>
	<header>
		<div class="row-max header hide-tablet">
			<div class="grid_2">logo</div>
			<nav class="grid_9"><?php wp_nav_menu(); ?></nav>
			<div class="grid_1">social media</div>
			<div class="clear"></div>
		</div>
		
		<div class="row-max show-tablet">
			<div class="grid_12">logo</div>
		</div>

		<div class="row-max header show-tablet">
			
			<nav class="grid_11"><?php wp_nav_menu(); ?></nav>
			<div class="grid_1">social media</div>
			<div class="clear"></div>
		</div>
	</header>