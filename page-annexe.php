<?php 
/*
Template Name: PAGE ANNEXE
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset') ?>" >

	<title><?php the_title(); ?></title>

	<meta name="viewport" content="width=device-width, user-scalable=no">

	<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Oswald:300" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

<?php wp_head(); ?>
</head>
<body>

	<div class="annexe">
		<?php if (have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>

		<?php else : ?>
			<?php _e('No Posts Found'); ?>
		<?php endif; ?>

	</div>
	<!-- /.annexe -->




<?php wp_footer(); ?>
</body>
</html>