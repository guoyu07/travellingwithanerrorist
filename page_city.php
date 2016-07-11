<?php
/**
 * Template Name: City Page
 *
 * @package Amadeus
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
<!-- 		<?php $postid = get_the_ID(); ?>
 -->		<!-- <?php query_posts('cat=' . get_the_post_id()); ?> -->
 			<?php query_posts('category_name='.get_the_title().'&post_status=publish');?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php 
	if (!get_theme_mod('hide_sidebar_single')) {
		get_sidebar();
	}
?>
<?php get_footer(); ?>
