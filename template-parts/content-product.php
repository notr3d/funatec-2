<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

?>
<?php the_title( sprintf( '<a href="%s" class="products__item col-xs-12 col-sm-6 col-md-4 col-lg-3">', esc_url( get_permalink() ) ) ); ?>
	<div class="products__inner">
		<?php 
			if ( has_post_thumbnail()) {
				the_post_thumbnail();
			} 
		?>
		<div class="products__descr">
			<?php the_title( sprintf( '<h2 class="entry-title">', esc_url( get_permalink() ) ), '</h2>' ); ?>
			<p>
				<?php
					the_content( sprintf(
						/* translators: %s: Name of current post. */
						wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', '_s' ), array( 'span' => array( 'class' => array() ) ) ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					) );
				?>

				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', '_s' ),
						'after'  => '</div>',
					) );
				?>
			</p>
		</div>
	</div>
		
</a>


