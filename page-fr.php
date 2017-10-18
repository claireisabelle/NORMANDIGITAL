<?php 
/*
Template Name: PAGE FR
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset') ?>" >

	<title>NormanDigital</title>

	<meta name="viewport" content="width=device-width, user-scalable=no">

	<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Oswald:300" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

<?php wp_head(); ?>
</head>
<body>

	<div class="wrapper">
		
		<header>
			<ul>
				<?php echo get_theme_mod('front-fr_contact', '<li>info<span class="rouge">@</span>normandigital.uk</li>
				<li>+44 <span class="rouge">(</span>0<span class="rouge">)</span>203 432 59 84</li>
				<li>+44 <span class="rouge">(</span>0<span class="rouge">)</span>7786 394 294</li>'); ?>
				
			</ul>
		</header>

		<div class="contenu">
			<div class="wrapper-logo">
				<div class="logo">
					<h1><img src="<?php echo get_theme_mod('front-fr_logo', get_bloginfo('template_url').'/img/logo.png'); ?>" alt="NormanDigital" title="" /></h1>
					<h2><?php echo get_theme_mod('front-fr_titre', 'Ingénierie de présence digitale'); ?></h2>
				</div>
				<!-- /.logo -->
			</div>
			<!-- /.wrapper-logo -->


			<div class="wrapper-info">

				<div class="textes">

					<div class="info">
						<h3><?php echo get_theme_mod('front-fr_sous-titre1', 'Stratégie & Optimisation'); ?></h3>
						<ul>
							<?php echo get_theme_mod('front-fr_liste1', '<li>Objectifs</li><li>Positionnement</li><li>Cohérence</li>'); ?>
						</ul>
					</div>
					<!-- /.info-detail -->

					<div class="info">
						<h3><?php echo get_theme_mod('front-fr_sous-titre2', 'Conseil & Maîtrise d\'Oeuvre'); ?></h3>
						<ul>
							<?php echo get_theme_mod('front-fr_liste2', '<li>Web</li><li>Medias Sociaux</li><li>Mobile</li><li>Supports</li>'); ?>
						</ul>
					</div>
					<!-- /.info-detail -->
					
				</div>
				<!-- /.textes -->
				

				<div class="image">
					<img src="<?php echo get_theme_mod('front-fr_image', get_bloginfo('template_url').'/img/chess.jpg'); ?>" alt="NormanDigital" title="" />

					<div class="cadre"></div>
					<!-- /.cadre -->
				</div>
				<!-- /.image -->
				
			</div>
			<!-- /.wrapper-info -->

		</div>
		<!-- /.contenu -->

	</div>
	<!-- /.wrapper -->


<?php wp_footer(); ?>
</body>
</html>