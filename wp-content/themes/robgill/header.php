<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php wp_title(''); ?></title>

		<!-- mobile meta (hooray!) -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<!-- icons & favicons -->
		<link href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-touch-icon-iphone.png" rel="apple-touch-icon-precomposed" />
		<link href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-touch-icon-ipad.png" rel="apple-touch-icon-precomposed" sizes="72x72" />
		<link href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-touch-icon-iphone4.png" rel="apple-touch-icon-precomposed" sizes="114x114" />
		<link href="<?php echo get_template_directory_uri(); ?>/images/favicon/favicon.ico" rel="icon" type="image/vnd.microsoft.icon' />
		<link href="<?php echo get_template_directory_uri(); ?>/images/favicon/favicon.ico" rel="shortcut icon />
		<!--[if IE]"
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<!-- or, set images/favicon/favicon.ico for IE10 win -->
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		
		<?php wp_enqueue_script('jquery'); ?>
		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!--sticky nav script -->
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/jquery.sticky.js"></script>
	  <script>
	    jQuery(window).load(function(){
	      jQuery(".nav-wrapper").sticky({ topSpacing: 0 });
	    });
	  </script>

		<!-- drop Google Analytics Here -->
		<!-- end analytics -->
		
		<!--Scripts -->
		

		

	</head>

	<body <?php body_class(); ?>>

		<div id="container">


			<header class="header" role="banner">

					<a href="<?php echo home_url(); ?>" rel="nofollow"><img src="<?php echo get_template_directory_uri(); ?>/images/robgill-logo.png" id="BigLogo" alt="Rob Gill"></a>
				
					<div class="nav-wrapper" class="wrap clearfix">
						
						<nav role="navigation" class="wrap clearfix">
						<div id="small-logo" class="fl">LEFT</div>
								<?php bones_main_nav(); ?>
						<div id="social-icons" class="fr">RIGHT</div>
						</nav>
						
					</div>

			</header> <!-- end header -->
