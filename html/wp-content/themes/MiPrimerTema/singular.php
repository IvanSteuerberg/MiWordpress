<?php
/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content" role="main">

	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();
			title_with_link();
			if ( has_post_thumbnail() ) {
				the_post_thumbnail('large');
			} ?>
			<b><?php the_content(); ?></b>
    <?php
			wp_link_pages();
			edit_post_link();

		}
	}

	?>

</main><!-- #site-content -->
<?php get_footer(); ?>
