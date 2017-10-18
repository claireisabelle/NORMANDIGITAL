<?php
	function wpb_customize_register_home_fr($wp_customize){

		// ***
		// FRONT PAGE FR
		// ***
		$wp_customize->add_section('front-fr', array(
			'title'			=> __('HOME FR', 'normandigital'),
			'description'	=> sprintf(__('Contenu de la page d\'accueil version française', 'normandigital')),
			'priority'		=> 2
		));

		// LOGO
		$wp_customize->add_setting('front-fr_logo', array(
			'default'		=> get_bloginfo('template_directory').'/img/logo.png',
			'type'			=> 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'front-fr_logo', array(
			'label'			=> __('Logo', 'normandigital'),
			'section'		=> 'front-fr',
			'settings'		=> 'front-fr_logo',
			'priority'		=> 1
		)));


		// TITRE
		$wp_customize->add_setting('front-fr_titre', array(
			'default' 		=> _x('Ingénierie de présence digitale','normandigital'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('front-fr_titre', array(
			'label' 		=> __('Titre', 'normandigital'),
			'section' 		=> 'front-fr',
			'type' 			=> 'text',
			'priority' 		=> 2
		));

		// SOUS-TITRE 1
		$wp_customize->add_setting('front-fr_sous-titre1', array(
			'default' 		=> _x('Stratégie & Optimisation','normandigital'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('front-fr_sous-titre1', array(
			'label' 		=> __('Sous Titre 1', 'normandigital'),
			'section' 		=> 'front-fr',
			'type' 			=> 'text',
			'priority' 		=> 3
		));
		

		// LISTE 1
		$wp_customize->add_setting('front-fr_liste1', array(
			'default' 		=> _x('<li>Objectifs</li><li>Positionnement</li><li>Cohérence</li>','normandigital'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('front-fr_liste1', array(
			'label' 		=> __('Liste 1', 'normandigital'),
			'description'	=> sprintf(__('Encadrer chaque intitulé par &#60;li> et &#60;/li><br /><strong>Exemple : </strong> &#60;li>Objectifs&#60;/li>', 'normandigital')),
			'section' 		=> 'front-fr',
			'type' 			=> 'textarea',
			'priority' 		=> 4
		));

		// SOUS-TITRE 2
		$wp_customize->add_setting('front-fr_sous-titre2', array(
			'default' 		=> _x('Conseil & Maîtrise d\'Oeuvre','normandigital'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('front-fr_sous-titre2', array(
			'label' 		=> __('Sous Titre 2', 'normandigital'),
			'section' 		=> 'front-fr',
			'type' 			=> 'text',
			'priority' 		=> 5
		));
		

		// LISTE 2
		$wp_customize->add_setting('front-fr_liste2', array(
			'default' 		=> _x('<li>Web</li><li>Medias Sociaux</li><li>Mobile</li><li>Supports</li>','normandigital'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('front-fr_liste2', array(
			'label' 		=> __('Liste 2', 'normandigital'),
			'description'	=> sprintf(__('Encadrer chaque intitulé par &#60;li> et &#60;/li><br /><strong>Exemple : </strong> &#60;li>Objectifs&#60;/li>', 'normandigital')),
			'section' 		=> 'front-fr',
			'type' 			=> 'textarea',
			'priority' 		=> 6
		));


		// IMAGE
		$wp_customize->add_setting('front-fr_image', array(
			'default'		=> get_bloginfo('template_directory').'/img/chess.jpg',
			'type'			=> 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'front-fr_image', array(
			'label'			=> __('Illustration, 500px max de large', 'normandigital'),
			'section'		=> 'front-fr',
			'settings'		=> 'front-fr_image',
			'priority'		=> 7
		)));


		// COORDONNEES
		$wp_customize->add_setting('front-fr_contact', array(
			'default' 		=> _x('<li>info<span class="rouge">@</span>normandigital.uk</li><li>+44 <span class="rouge">(</span>0<span class="rouge">)</span>203 432 59 84</li><li>+44 <span class="rouge">(</span>0<span class="rouge">)</span>7786 394 294</li>','normandigital'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('front-fr_contact', array(
			'label' 		=> __('Coordonnées', 'normandigital'),
			'description'	=> sprintf(__('Encadrer chaque intitulé par &#60;li> et &#60;/li>', 'normandigital')),
			'section' 		=> 'front-fr',
			'type' 			=> 'textarea',
			'priority' 		=> 8
		));

		
	}


	add_action('customize_register', 'wpb_customize_register_home_fr');