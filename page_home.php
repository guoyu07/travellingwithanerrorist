<?php

/*

Template Name: Home Page

*/
	 get_header();
?>

	<div id="primary" class="fullwidth">
		<main id="main" class="site-main" role="main">
			<?php echo do_shortcode("[post_grid id='26']"); ?>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
