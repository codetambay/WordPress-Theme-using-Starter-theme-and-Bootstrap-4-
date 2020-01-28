<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package codetambayb4
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'codetambay_b4' ); ?></a>

	<header id="masthead" class="site-header">

		<nav id="site-navigation" class="main-navigation navbar navbar-expand-md navbar-light bg-light" role="navigation">
			<div class="container">	
				<div class="site-branding">	
					<h1>
						<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">								
							<?php
								if ( has_custom_logo() ) {

										// https://developer.wordpress.org/themes/functionality/custom-logo/
										$custom_logo_id = get_theme_mod( 'custom_logo' );
										$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );	
										
										echo '<img class="img-fluid header-logo" src="'. esc_url( $logo[0] ) .'" >
												<span class="site-title screen-reader-text">' . get_bloginfo( 'name' ) . '</span>';
								} else {
										echo  get_bloginfo( 'name' );
								}
							?>		
						</a>						
					</h1>	
				<?php
					$codetambay_b4_description = get_bloginfo( 'description', 'display' );
					if ( $codetambay_b4_description || is_customize_preview() ) :
				?>
					<p class="site-description"><?php echo $codetambay_b4_description; /* WPCS: xss ok. */ ?></p>
					<?php endif; ?>
				</div><!-- site-branding -->

				<!-- navbar icon taggler -->
				<button class="navbar-toggler" type="button" 
					data-toggle="collapse" 
					data-target="#bs-example-navbar-collapse-1" 
					aria-controls="bs-example-navbar-collapse-1" 
					aria-expanded="false" aria-label="Toggle navigation">
					<span class="screen-reader-text"><?php esc_html_e( 'Menu', 'codetambay_b4' ); ?></span>
					<span class="navbar-toggler-icon"></span>
				</button>

				<?php
			
					wp_nav_menu( array(

						'menu'            => 'primary',
						'theme_location'  => 'menu-1',
						'menu_id'         => 'primary-menu',
						'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
						'container'       => 'div',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'bs-example-navbar-collapse-1',
						'menu_class'      => 'navbar-nav ml-auto',//add class 'ml-auto'  
						'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
						'walker'          => new WP_Bootstrap_Navwalker(),			
						
					));
				?>
			</div><!-- container -->
		</nav>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
