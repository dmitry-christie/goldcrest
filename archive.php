<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package goldcrest
 */

get_header();
?>

	<main id="primary" class="site-main container archive-container">

		<?php if ( have_posts() ) : ?>

	

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				?>
				<div class="loop-item-container">
					<a href="<?php the_permalink(); ?>">
						<div class="thumbnail" style="background: url('<?php echo get_the_post_thumbnail_url(); ?>'">
							
						</div>
					</a>
					<div class="text">
						<header class="entry-header">
							<?php
							if ( is_singular() ) :
								the_title( '<h1 class="entry-title">', '</h1>' );
							else :
								the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
							endif;

							if ( 'post' === get_post_type() ) :
								?>
								
							<?php endif; ?>
						</header><!-- .entry-header -->

						

						<div class="entry-content">
							<?php
							the_excerpt();	
							?>
						</div><!-- .entry-content -->

						<a href="<?php the_permalink(); ?>">
						<div class="read-more"> Read More <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-button.png"></div>

                                        
						</a>

					</div>

					
				</article>
				</div>
	<!-- #post-<?php the_ID(); ?> -->
<?php

			endwhile;

			/* ajax */
		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		

	</main><!-- #main -->

	<style>
                    .form-block .left {
    				background-image: url(//localhost:3000/wp-content/uploads/2020/06/contact-form-image.png);
			}

                   
                </style>
                <div class="form-block space">
                    <div class="left">
                       

                      
                        

                    </div>
                    <div class="right">
                        <div class="form-container">
							<?php $term = get_queried_object(); $form = get_sub_field('form', $term);
							if($form) {
								echo do_shortcode($form);

							} else {
								echo do_shortcode('[activecampaign form=73]');

							}
                        ?>
                        </div>

                    
                        
                    </div>
                </div>
	
<?php
get_footer();
