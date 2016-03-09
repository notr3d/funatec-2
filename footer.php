<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>
		</div><!-- #content__wrapper -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
	  <div class="site-footer__higher">
    	<div class="container">
    		<section class="site-footer__about col-sm-6">
				<h2>about</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis molestiae, possimus illum! Reprehenderit minima rem, nulla autem molestiae, maxime id, voluptatem voluptate cupiditate labore impedit voluptatum. Minima recusandae maiores natus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, fugiat, nihil mollitia asperiores, officia, est similique natus necessitatibus quae maxime nam incidunt. Ullam ea facere atque, commodi, libero beatae doloremque.</p>
			</section>
			<section class="site-footer__contacts col-sm-6">
				<h2>contact us</h2>
				<ul>
					<li class="site-footer__address">Seligenthalerstr. 16 a, D-84034 Landshut, Germany</li>
					<li class="site-footer__phone">+49 (871) 9221122</li>
					<li class="site-footer__email"><a href="#">lorem@lorem.com</a></li>
				</ul>
			</section>
    	</div>
    </div>
    <div class="site-footer__lower">
      <div class="container">
				<ul class="site-footer__links col-sm-9">
					<li><a href="home">Home</a></li>
					<li><a href="products">Products</a></li>
					<li><a href="about">About us</a></li>
					<li><a href="contacts">Contacts</a></li>
				</ul> 		
				<span class="site-footer__copy col-sm-3">Copyright © 2016 Lorem</span>
			</div>	
    </div>     
  	<button class="scrollup"></button>
	</footer><!-- #colophon -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maps.googleapis.com/maps/api/js"></script>
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/slick.js"></script>
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/lightbox.js"></script>
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/script.js"></script>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
