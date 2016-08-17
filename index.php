<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

get_header(); ?>

	<div class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="products">
				<div class="products__wrapper">
					<h1 class="products__header">Products</h1>
					<div class="products__filter">
						<span class="hidden-xs">Filter by</span>
						<button id="all" class="filter-active">All</button>
						<button class="pedals" id="pedals">Pedals</button>
						<button class="wheel" id="wheel">Wheels</button>
						<button class="mount" id="mount">Mount</button>
						<button class="shifter" id="shifter">Shifters</button>
					</div>
					<div class="products__container">					
					<?php query_posts('orderby=title&order=ASC' ); ?>
					<?php if ( have_posts() ) : ?>
						<?php if ( is_home() && ! is_front_page() ) : ?>
							<header>
								<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
							</header>
						<?php endif; ?>
						<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<?php

								/*
								 * Include the Post-Format-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
								 */
			//					get_template_part( 'template-parts/content', get_post_format() );
								get_template_part( 'template-parts/content', 'products' );
							?>
						<?php endwhile; ?>
						<?php the_posts_navigation(); ?>
					<?php else : ?>
						<?php get_template_part( 'template-parts/content', 'none' ); ?>
					<?php endif; ?>
					</div>
				</div>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
