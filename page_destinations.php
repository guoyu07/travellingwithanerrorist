<?php

/*

Template Name: Destinations Page

*/
	 get_header();
?>
<?php echo do_shortcode("[thumbnailgrid post_type='page' post__not_in='7,11,9,38,69,67' orderby='name' order='ASC' imagesize='medium' aligngrid='autocenter' showcaption='FALSE']"); ?>
<?php get_footer(); ?>
