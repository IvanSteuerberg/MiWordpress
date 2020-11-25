<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
	<?php wp_head(); ?>
</head>
<body id="singular">
<?php get_header(); ?>

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
<?php wp_footer(); ?>
</body>
</html>
