<!doctype html>

  <html class="no-js"  <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">
    <script src="https://use.fontawesome.com/d6445cbd05.js"></script>

		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta class="foundation-mq">

		<!-- If Site Icon isn't set in customizer -->
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
			<!-- Icons & Favicons -->
			<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
			<link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />
      <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico/apple-icon-57x57.png">
      <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico/apple-icon-60x60.png">
      <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico/apple-icon-72x72.png">
      <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico/apple-icon-76x76.png">
      <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico/apple-icon-114x114.png">
      <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico/apple-icon-120x120.png">
      <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico/apple-icon-144x144.png">
      <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico/apple-icon-152x152.png">
      <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico/apple-icon-180x180.png">
      <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico/android-icon-192x192.png">
      <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico/favicon-96x96.png">
      <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico/favicon-16x16.png">
      <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico/manifest.json">
      <meta name="msapplication-TileColor" content="#ffffff">
      <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico/ms-icon-144x144.png">
      <meta name="theme-color" content="#ffffff">
      <!--[if IE]>
				<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
			<![endif]-->
			<meta name="msapplication-TileColor" content="#f01d4f">
			<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/images/win8-tile-icon.png">
	    	<meta name="theme-color" content="#121212">
	    <?php } ?>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>

		<!-- Drop Google Analytics here -->
		<!-- end analytics -->

	</head>

	<!-- Uncomment this line if using the Off-Canvas Menu -->

	<body <?php body_class(); ?>>

		<div class="off-canvas-wrapper">

			<?php get_template_part( 'parts/content', 'offcanvas' ); ?>

			<div class="off-canvas-content" data-off-canvas-content>

				<header class="header" role="banner">

          <!-- This navs will be applied to the topbar, above all content
            To see additional nav styles, visit the /parts directory -->
          <?php get_template_part( 'parts/nav', 'title-bar' ); ?>

				</header> <!-- end .header -->
