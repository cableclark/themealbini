<?php
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>"><?php  
	  if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
		wpcf7_enqueue_scripts();
	  }
	  if ( function_exists( 'wpcf7_enqueue_styles' ) ) {
		wpcf7_enqueue_styles();
	  }
	?><meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php 
	wp_head(); 
	?>
</head>
<body>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'Miss Albini' ); ?></a>
	<header id="masthead" class="site-header">
		<div class="site-branding"><?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?><h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php
			else :
				?><p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;
			$miss_albini_description = get_bloginfo( 'description', 'display' );
			if ( $miss_albini_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $miss_albini_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div>
		<nav id="site-navigation" class="main-navigation">
			<div class="main-menu">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				if ( ! is_active_sidebar( 'sidebar-1' ) ) {
					return;
				}
				echo search_icon_svg();
			?></div>
			<div class="toggler" aria-controls="primary-menu" aria-expanded="false"> 
				<div></div> 
				<div></div> 
				<div></div>
			</div>
			<div class="menu-hider"></div>
		</nav>
	</header>