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

	<div class="row">
		<div class="grid_3">logo</div>
		<div class="grid_6"><?php wp_nav_menu(); ?></div>
		<div class="grid_3">social media</div>
	</div>