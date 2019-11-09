<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package envirodyn
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/styles.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/slick/slick/slick.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/slick/slick/slick-theme.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/favicon.ico" type="image/x-icon">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'envirodyn' ); ?></a>
	<section id="masthead" style="background: url('<?php bloginfo('stylesheet_directory'); ?>/assets/img/masthead.jpg') 0px -520px;">
		<div class="container-fluid">
			<div class="container p-5 text-white">
				<h1 id=”site-title” class="tagline text-center"><?php echo get_bloginfo('name'); ?></h1>
				<p class="text-center lead subtitle px-5"><?php echo get_bloginfo('description'); ?></p>
			</div>
		</div>
	</section>
    <section id="menu-bar">
        <div class="container-fluid bg-success">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-dark bg-success">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
					<?php
						wp_nav_menu( array(
							'theme_location'  => 	'primary-menu',
							'depth'	          =>	1, // 1 = no dropdowns, 2 = with dropdowns.
							'container'       => 	'div',
							'container_class' => 	'collapse navbar-collapse',
							'container_id'    => 	'bs-example-navbar-collapse-1',
							'menu_class'      => 	'navbar-nav mr-auto',
							'fallback_cb'     => 	'WP_Bootstrap_Navwalker::fallback',
							'walker'          => 	new WP_Bootstrap_Navwalker(),
						) );
					?>
                </nav>
            </div>
        </div>
    </section>
