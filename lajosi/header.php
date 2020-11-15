<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package LaJosi_Golfing
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- Import through functions when deploying to live server -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="top__header">

<div class="top__info">
	<a href="mailto:someone@yoursite.com" class="top__email">
		<img src="http://localhost:8888/lajosiNew/wp-content/uploads/2020/11/email.png" alt="Email Lajosi">
	</a>  
		
	<p>ENGINEERED FOR GOLF, MELBOURNE, AUSTRALIA</p>
</div>

	<div class="top__iconsWrapper">
		<ul class="top__icons">
			<li>
				<a href="#"><img src="http://localhost:8888/lajosiNew/wp-content/uploads/2020/11/magnifier.png" alt="search lasjoi website" class="top__searchClicked"></a>
			</li>
			<li>
				<a href="#"><img src="http://localhost:8888/lajosiNew/wp-content/uploads/2020/11/account.png" alt="your lasjoi account"></a>
			</li>
			<li>
				<a href="#"><img src="http://localhost:8888/lajosiNew/wp-content/uploads/2020/11/shopping-cart.png" alt="lasjoi shopping cart"></a>
			</li>
		</ul>
	</div>
</div>

<div class="top__search">
		<div class="top__cross">X</div>

		<div class="top__wrapper">	
			<h1>This is the search section!</h1>
			<p>Form below</p>
		</div>
</div>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'lajosi' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$lajosi_description = get_bloginfo( 'description', 'display' );
			if ( $lajosi_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $lajosi_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'lajosi' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
