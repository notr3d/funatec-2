<?php get_header(); ?>

<div class="content-area col-sm-9">
	<main id="main" class="site-main" role="main">
		<section class="contacts">
			<h1 class="contacts__header">Contact us</h1>
			<form class="contacts__form">
				<div class="form-group">
					<label for="name" class="col-sm-2">Your name*</label>
					<input type="text" class="col-xs-12 col-sm-9" id="name" name="name" required>
				</div>
				<div class="form-group">
					<label for="email" class="col-sm-2">Your email*</label>
					<input type="email" class="col-xs-12 col-sm-9" id="email" name="name" required>
				</div>
				<div class="form-group">
					<label for="tel" class="col-sm-2">Your number</label>
					<input type="tel" class="col-xs-12 col-sm-9" id="tel" name="name">
				</div>
				<div class="form-group">
					<label for="message" class="col-sm-2">Your message*</label>
					<textarea name="message" class="col-xs-12 col-sm-9" id="message" rows="4" required></textarea>
				</div>
				<div class="form-group">
					<input type="submit" class="col-xs-12 col-sm-offset-2 col-sm-9" value="Send">
				</div>
			</form>
		</section>
	</main><!-- #main -->
</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
