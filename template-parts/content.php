<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package goldcrest
 */

?>

<style>
.entry-content {
	margin-top: -3em;
	background: white;
	padding: 3em;
}

.entry-content h2:first-of-type {
	margin-top: 0px;
}
</style>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	

	<div class="entry-content container">
		<?php
/* $stylesheet_root = get_stylesheet_directory();
include( $stylesheet_root . '/inc/flexible-content.php' ); */

	the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'goldcrest' ),
				'after'  => '</div>',
			)
		);
		?>

		
	</div><!-- .entry-content -->

	
</article><!-- #post-<?php the_ID(); ?> -->
<div class="guides-outer container posts_guides " data-aos="fade-up">
                <h2 class="section-header txt-center sm-gold-line"> <?php the_field('related_articles', 'option');?> </h2>
                <div class="guides">
                <?php
                        $args = array(
                            'post_type' => 'post',
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

                </div>
				<style>
                    .form-block .left {
                        background-image: url('<?php the_field('global_image_form', 'option'); ?>'); 
                    }

                   
                </style>
                <div class="form-block ">
                    <div class="left">
                       

                      
                        

                    </div>
                    <div class="right">
                        <div class="form-container">
                            <?php $form = get_field('global_form', 'options');
                        echo do_shortcode($form);
                        ?>
                        </div>

                    
                        
                    </div>
                </div>

