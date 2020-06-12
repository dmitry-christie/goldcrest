<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package goldcrest
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;700&family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

	<?php wp_head(); ?>

	<link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">

</head>
<style>
#masthead {
            background-image: url('<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); echo $featured_img_url;?>');           
			background-color: #aaa;
			background-blend-mode: multiply;
			height: 90vh;
			background-size: cover;
}
<?php if(is_archive() or !is_front_page() ) { ?>

	#masthead {
		height: 60vh;
		background-image: url('<?php 
		$term = get_queried_object();
		if(is_archive()) {
			$featured_img_url = get_field('background_image' , $term); echo $featured_img_url;
		} else {
			$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); echo $featured_img_url;
		} ?>');           
}
<?php } ?>

</style>


<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'goldcrest' ); ?></a>
	<div id="top-bar-outer" class="top-bar-outer">	
		<div class="top-bar container">
				<div class="site-branding">
					<?php
					the_custom_logo();
					?>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
				</nav><!-- #site-navigation -->
		</div>
	<hr >
	</div>
	<header id="masthead" class="site-header">
		
		<hr>

		<?php if (is_front_page()): ?>
			<div class="header-cta-container ">
				<header class="header-cta-section txt-center ">
					<h1 class="txt-center">Find a property</h1>
					<p>We're your source for local listings</p>
					<div class="buttons-container">
						<a href="#">
							<div class="button button_gold">
								For Relocate
							</div>
						</a>

						<a href="#">
							<div class="button button_white">
								For Invest
							</div>
						</a>
					</div>
					
				</header>
			</div>
		<?php else: ?>
			<div class="page-title-container">
				<div class="page-title  txt-center ">
					<h1 class="txt-center-after">
						<?php 
						$custom_header = get_field('custom_header'); 
						if($custom_header) {
							echo $custom_header; 
						} else {
							single_term_title();
							single_post_title(); 
						}?>
					</h1>
				</div>
			</div>
			
		<?php endif; ?>
		
		
		
<?php 
/* the_post_navigation(
	array(
		'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'goldcrest' ) . '</span> <span class="nav-title">%title</span>',
		'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'goldcrest' ) . '</span> <span class="nav-title">%title</span>',
	)
);
*/
?>
		
	</header><!-- #masthead -->
