<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

?>	

<section class="product" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  	<?php the_title( '<h1 class="product__header">', '</h1>' ); ?>
  	<div class="product__wrapper">  		
 		  <div class="product__slider">
 		  	
 		  </div>
 		  <div class="product__slider-nav">
 		    
 		  </div>
 		  		<article> 		  			  
				<?php the_content(); ?>
				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', '_s' ),
						'after'  => '</div>',
					) );
				?>
				</article>
			
			<div class="clearfix"></div>				
		
  	</div>
		</section>