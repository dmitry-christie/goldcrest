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


</head>
<style>
#masthead {
            background-image: url('<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); echo $featured_img_url;?>');           
			background-color: #aaa;
			background-blend-mode: multiply;
			height: 60vh;
			min-height: 650px;
			background-size: cover;
}

@media (max-width: 700px) {
	.buttons-container .button_gold{
		margin: 0px 0px 1em 0px;
	}

	.buttons-container .button_white {
		margin-left: 0px;
	}
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
				<div id="toggle">
					<img alt="Residency and citizenship by investment" src="<?php echo get_template_directory_uri(); ?>/images/hamburger.png"></div>
					<div id="popout">
						<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_class' => 'nav-menu-mobile' ) ); ?>
					</div>

				</div>
		</div>
	<hr >
	</div>
	<header id="masthead" class="site-header">
		
		<hr>

		<?php if (is_front_page()): ?>
			<div class="header-cta-container ">
				<header class="header-cta-section txt-center ">
					<h1 class="txt-center"><?php the_field('header');?></h1>
					<p><?php the_field('sub_header');?></p>
					<div class="buttons-container">
						<a href="<?php the_field('button_1-url');?>">
							<div class="button button_gold">
							<?php the_field('button_1-text');?>
							</div>
						</a>

						<a href="<?php the_field('button_2-url');?>">
							<div class="button button_white">
							<?php the_field('button_2-text');?>
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
					<?php if (is_single()): ?>
						<div class="post-meta"> BY <?php $author_name = get_author_name(); echo $author_name; ?> Published on <?php echo get_the_date( 'F j, Y' ); ?>
. Updated: <?php the_modified_date(); ?></div>
					<?php endif; ?>


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
