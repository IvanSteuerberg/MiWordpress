<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
	<?php wp_head(); ?>
</head>
<body>
<?php get_header() ?> <!-- Obtenemos el header -->
<?php get_sidebar() ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php
    title_with_link();
    if ( has_post_thumbnail() ) {
		the_post_thumbnail('medium');
	}
	the_excerpt();
	wp_link_pages();
	edit_post_link();
	?>

<?php endwhile; ?>

	<?php
	if ( get_next_posts_link() ) {
		next_posts_link();
	}
	?>
	<?php
	if ( get_previous_posts_link() ) {
		previous_posts_link();
	}
	?>

<?php else: ?>

    <p>No posts found. :(</p>

<?php endif; ?>
<?php get_footer() ?> <!-- Obtenemos el footer -->
<?php wp_footer(); ?>
</body>
</html>