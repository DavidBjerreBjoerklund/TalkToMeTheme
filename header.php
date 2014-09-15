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
		


	<div class="row-max header show-screen">

		<nav class="grid_9 offset_2">
			<!-- Logo image is inserted here to ensure logo is placed relative to menu -->
			<div class="site-logo">
				<img src="<?php echo(get_template_directory_uri()) ?>/img/TalkToMeLogo.gif" alt="">
			</div>
		<?php wp_nav_menu(); ?>

		</nav>
		<div class="grid_1">social media</div>
		<div class="clear"></div>
	</div>
	
	<div class="row hide-screen txt-center">
		<div class="grid_12">
			<div class="site-logo-mobile">
				<img src="<?php echo(get_template_directory_uri()) ?>/img/TalkToMeLogo.svg" alt="Talk To Me logo" onerror="this.src=<?php echo(get_template_directory_uri()) ?>/img/TalkToMeLogo.gif">
			</div>
		</div>
	</div>

	<div class="row-max header hide-screen">
		<nav class="grid_12_center"><?php wp_nav_menu();?></nav>
		<div class="clear"></div>
	</div>

	<div class="row hide-screen txt-right">
		<div class="grid_12">social media</div>
	</div>