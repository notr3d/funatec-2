<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="theme-color" content="#ea940a">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/slick.css" rel="stylesheet">
<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/slick-theme.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<script src="//cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site container-fluid">
	<header id="masthead" class="site-header page-header" role="banner">
		<div class="site-header__wrapper container">
			<nav id="site-navigation" class="main-navigation navbar container" role="navigation">
				<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', '_s' ); ?></a>
							<div class="navbar-header">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-main">
											<span class="sr-only"><?php _e('Toggle navigation', '_s'); ?></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
									</button>
									<a class="page-logo navbar-brand" href="home">Brand</a>
							</div>

							<div class="collapse navbar-collapse" id="navbar-collapse-main">
								<ul class="nav navbar-nav navbar-right">
									<?php if( has_nav_menu( 'primary' ) ) :
										wp_nav_menu( array(
															'theme_location'  => 'primary',
															'container'       => false,
															'menu_class'      => 'nav navbar-nav navbar-right',
															'walker'          => new Bootstrap_Nav_Menu(),
															'fallback_cb'     => null,
															'items_wrap'      => '%3$s',// skip the containing <ul>
													)
											);
										else :
											wp_list_pages( array(
													'menu_class'      => 'nav navbar-nav navbar-right',
													'walker'          => new Bootstrap_Page_Menu(),
													'title_li'        => null,
												)
											);
									endif; ?>
								</ul>
								<!--<?php get_search_form(); ?>-->
							</div><!-- /.navbar-collapse -->

			</nav><!-- #site-navigation -->
			<?php if ( is_front_page() ) : ?>
				<section class="main-slider">
					<div class="main-slider__wrapper container">
						<a href="product.html" class="main-slider__item">
							<img src="wp-content/themes/_strap/img/main-slider/1.jpg" alt="">
						</a>
						<a href="product.html" class="main-slider__item">
							<img src="wp-content/themes/_strap/img/main-slider/2.jpg" alt="">
						</a>
						<a href="product.html" class="main-slider__item">
							<img src="wp-content/themes/_strap/img/main-slider/3.jpg" alt="">
						</a>
					</div>
				</section>
			<?php endif; ?>
			<?php if ( is_page('contacts')) : ?>
				<div class="map" id="map"></div>
			<?php endif; ?>
		</div>
	</header><!-- #masthead -->
	<div id="content" class="site-content">
		<div class="site-content__wrapper container">
