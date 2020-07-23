<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package goldcrest
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found container">
			<header class="page-header">
				<h1 class="page-title txt-center"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'goldcrest' ); ?></h1>
			</header><!-- .page-header -->

			<h2 class="section-header txt-center sm-gold-line"> <?php the_field('related_articles', 'option');?> </h2>
                <div class="guides">
                <?php
                        $args = array(
                            'post_type' => 'post',
                            'post__not_in' => array (get_the_ID()),

							'posts_per_page' => 3,
							'category__in' => wp_get_post_categories($post->ID),
                        );

                        

                       

                        $post_query = new WP_Query($args);

                        if($post_query->have_posts() ) {
                            while($post_query->have_posts() ) {
                                $post_query->the_post();
                                ?>

                                <div style="background-image: url('<?php the_post_thumbnail_url('medium'); ?>')">
                                    <div class="guide colour">

                                        <h5><?php the_title(); ?></h5>
                                        <a href="<?php the_permalink(); ?>">
                                            <div ><?php $read_more_global_button_text = get_field('read_more_global_button_text', 'option'); 
                            if ($read_more_global_button_text) {
                                echo $read_more_global_button_text; 
                            } else { 
                                echo 'Read more '; 
                            } 
                            ?><img src="<?php echo get_template_directory_uri(); ?>/images/arrow-button.png"></div>
                                        </a>

                                    </div>
                                </div>


                              
                                <?php
                                }
                            }
                            wp_reset_query();
                    ?>



                  
                   
                </div>

		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
