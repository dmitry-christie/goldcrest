
<?php $k = 0; ?>

    <?php if( have_rows('flexible-content-pages') ): ?>
        <?php while( have_rows('flexible-content-pages') ): the_row(); ?>

            

            <!-- visual editor --> 
                <?php if( get_row_layout() == 'text-visual_editor' ): ?>
                    
                    <?php 
                    
                    $add_grey_padding = get_sub_field('add_grey_padding');
                    if ($add_grey_padding): ?>
                    <div  class="grey-padding ">

                    
                <?php endif; ?>
                    <div class="container visual-editor">

                   
                    <?php $header = get_field('header');
                    if ($header) {
                    ?>
                    <h2 class="section-header sm-gold-line"> <?php the_sub_field('header'); }?> </h2>
                    <?php $visual_editor_content = get_sub_field('text-visual_editor'); 
                            echo $visual_editor_content;
                    ?>
                     </div>

                     <?php                    $add_grey_padding = get_sub_field('add_grey_padding');
 if ($add_grey_padding): ?>
                        
                    </div> <!-- grey padding -->
                <?php endif; ?>
            <!-- END visual editor --> 


              



            <!-- Text and Image --> 
            
            <?php elseif( get_row_layout() == 'text_image' ):  ?>                                     
                   
                    
                <?php 
                    
                    $add_grey_padding = get_sub_field('add_grey_padding');
                    if ($add_grey_padding): ?>
                    <div class="grey-padding">

                    
                <?php endif; ?>

            <div class="text_image  space container ">

                <?php $image_on_the_right = get_sub_field('image_on_the_right');
                
                if(!$image_on_the_right) {
                    ?>
                <div class="image-container">
                    <?php $sub_header = get_sub_field('sub_header'); if($sub_header) {?>  <h3 class="section-sub-header hidden-sub-header"><?php echo $sub_header; }?></h3>

                    <img class="img-stack-top-left stack-bottom" data-aos="fade-right" src="<?php $image_1 = get_sub_field('image_1'); echo $image_1; ?>" alt="">

                </div>

                    <?php
                }
                ?>
               

                <div class="text-container" data-aos="fade-up">
                    <h2 class="section-header sm-gold-line"><?php $header = get_sub_field('header'); echo $header; ?></h2>
                    <?php $text = get_sub_field('text'); echo $text; ?>

                    <?php $enable_button = get_sub_field('enable_button');
                
                if($enable_button) {
                    ?>
                    <a href="<?php $button_url = get_sub_field('button_url'); echo $button_url; ?>">
                        <div class="button"><?php $button_text = get_sub_field('button_text'); echo $button_text; ?> <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-button.png"></div>
                    </a>

                    <?php
                }
                ?>

                </div>


                <?php $image_on_the_right = get_sub_field('image_on_the_right');
                
                if($image_on_the_right) {
                    ?>
                <div class="image-container">
                    <?php $sub_header = get_sub_field('sub_header'); if($sub_header) {?>  <h3 class="section-sub-header hidden-sub-header"><?php echo $sub_header; }?></h3>

                    <img class="img-stack-top-left stack-bottom" data-aos="fade-left" src="<?php $image_1 = get_sub_field('image_1'); echo $image_1; ?>" alt="">

                </div>

                    <?php
                }
                ?>

            </div>
            <?php                    $add_grey_padding = get_sub_field('add_grey_padding');
 if ($add_grey_padding): ?>
                        
                    </div> <!-- grey padding -->
                <?php endif; ?>

             <!-- Text and Image --> 




                <!-- text_image_cta --> 
            
            <?php elseif( get_row_layout() == 'text_image_cta' ):  ?>                                     
                   
                    

                   <div class="text_image  text_image_cta space ">
       
                      
       
                       <div class="text-container text_image_cta-text space" data-aos="fade-up">
                           <?php $sub_header = get_sub_field('sub_header'); if($sub_header) {?>  <h3 class="section-sub-header "><?php echo $sub_header; }?></h3>
                           <h2 class="section-header sm-gold-line"><?php $header = get_sub_field('header'); echo $header; ?></h2>
                           <?php $text = get_sub_field('text'); echo $text; ?>
       
                           <?php $enable_button = get_sub_field('enable_button');
                       
                       if($enable_button) {
                           ?>
                           <a href="<?php $button_url = get_sub_field('button_url'); echo $button_url; ?>">
                               <div class="button"><?php $button_text = get_sub_field('button_text'); echo $button_text; ?> <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-button.png"></div>
                           </a>
       
                           <?php
                       }
                       ?>
       
                       </div>
       
       
                       <div class="image-container space">
                            <?php if(get_sub_field('cta_url')) { ?><a href="<?php the_sub_field('cta_url');?>"> <?php }?>
                           <img data-aos="fade-left" src="<?php $image_1 = get_sub_field('image_1'); echo $image_1; ?>" alt="">
                           <?php if(get_sub_field('cta_url')) { ?></a> <?php }?>

                       </div>
       
                         
       
                   </div>
       
                    <!-- text_image_cta --> 


                 <!-- Text and 2 Images --> 
            
            <?php elseif( get_row_layout() == 'text_2images' ):  ?>                                     
                   
                    

                   <div class="text_image text_2images ">
       
                       <?php $image_on_the_right = get_sub_field('image_on_the_right');
                       
                       if(!$image_on_the_right) {
                           ?>
                       <div class="image-container">
                           <img class="img-stack-top-left   stack-bottom" data-aos="fade-right" src="<?php $image_1 = get_sub_field('image_1'); echo $image_1; ?>" alt="">
                           <img class="img-stack-bottom-right stack-top" data-aos="fade-up" src="<?php $image_2 = get_sub_field('image_2'); echo $image_2; ?>" alt="">
       
                       </div>
       
                           <?php
                       }
                       ?>
                      
       
                       <div class="text-container" data-aos="fade-up">
                           <?php $sub_header = get_sub_field('sub_header'); if($sub_header) {?>  <h3 class="section-sub-header "><?php echo $sub_header; }?></h3>
                           <h2 class="section-header sm-gold-line"><?php $header = get_sub_field('header'); echo $header; ?></h2>
                           <?php $text = get_sub_field('text'); echo $text; ?>
       
                           <?php $enable_button = get_sub_field('enable_button');
                       
                       if($enable_button) {
                           ?>
                           <a href="<?php $button_url = get_sub_field('button_url'); echo $button_url; ?>">
                               <div class="button"><?php $button_text = get_sub_field('button_text'); echo $button_text; ?> <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-button.png"></div>
                           </a>
       
                           <?php
                       }
                       ?>
       
                       </div>
       
       
                       <?php $image_on_the_right = get_sub_field('image_on_the_right');
                       
                       if($image_on_the_right) {
                           ?>
                       <div class="image-container">
                            <img class="img-stack-top-left stack-bottom" data-aos="fade-right" src="<?php $image_1 = get_sub_field('image_1'); echo $image_1; ?>" alt="">
                           <img class="img-stack-bottom-right stack-top" data-aos="fade-up" src="<?php $image_2 = get_sub_field('image_2'); echo $image_2; ?>" alt="">
       
                       </div>
       
                           <?php
                       }
                       ?>
       
                   </div>
       
                    <!-- Text and 2 Images --> 




             <!-- blurbs type 1 -->
             <?php elseif( get_row_layout() == 'blurbs_type_1' ): ?>
                <?php 
                    
                    $add_grey_padding = get_sub_field('add_grey_padding');
                    if ($add_grey_padding): ?>
                    <div class="grey-padding">

                    
                <?php endif; ?>



             <?php $header = get_sub_field('header'); if($header) { ?><h2 class="section-header txt-center sm-gold-line space" data-aos="fade-up"> <?php the_sub_field('header'); ?> </h6> <?php } ?>
                        <?php if( have_rows('blurb_type_1_repeater') ): ?>
                            <div class="blurbs blurbs-type-1 space container" data-aos="fade-up">
                                <?php while ( have_rows('blurb_type_1_repeater') ) : the_row(); ?>

                                    <div class="blurb txt-center">
                                        <img src="<?php $icon = get_sub_field('icon'); echo get_template_directory_uri() . '/img/icons/GC-ICON-' . $icon . '.png'; ?>">
                                        <?php $header = get_sub_field('header'); if($header) { ?><h3 class="blurb-header sm-gold-line txt-center "><?php   the_sub_field('header');?> </h3> <?php } ?>
                                        <span> <?php the_sub_field('text'); ?></span>
                                    </div>
                                    
                                   
                                    <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
            
                <?php                    $add_grey_padding = get_sub_field('add_grey_padding');
 if ($add_grey_padding): ?>
                        
                    </div> <!-- grey padding -->
                <?php endif; ?>
            <!-- END blurbs type 1 -->


             <!-- blurbs type 2 -->
             <?php elseif( get_row_layout() == 'blurbs_type_2' ): ?>
                <?php 
                    
                    $add_grey_padding = get_sub_field('add_grey_padding');
                    if ($add_grey_padding): ?>
                    <div class="grey-padding">

                    
                <?php endif; ?>



             <?php $header = get_sub_field('header'); if($header) { ?><h2 class="section-header txt-center sm-gold-line space" data-aos="fade-up"> <?php the_sub_field('header'); ?> </h6> <?php } ?>
                        <?php if( have_rows('blurb_type_2_repeater') ): ?>
                            <div class="blurbs blurbs-type-2 space container" data-aos="fade-up">

                                <?php $k = 0; ?>
                                <?php while ( have_rows('blurb_type_2_repeater') ) : the_row(); ?>

                                    <div class="blurb txt-center blurb-<?php echo $k; ?> in-row-<?php if($k < 4) { echo '1';} elseif ($k <8){  echo '2';} elseif( $k < 12) { echo '3';}?>">
                                        <img src="<?php $icon = get_sub_field('icon'); echo get_template_directory_uri() . '/img/icons/GC-ICON-' . $icon . '.png'; ?>">
                                        <?php $header = get_sub_field('header'); if($header) { ?><h3 class="blurb-header sm-gold-line txt-center "><?php   the_sub_field('header');?> </h3> <?php } ?>
                                        <span> <?php the_sub_field('text'); ?></span>
                                    </div>

                                    <?php $k++ ?>
                                    
                                   
                                    <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
            
                <?php                    $add_grey_padding = get_sub_field('add_grey_padding');
 if ($add_grey_padding): ?>
                        
                    </div> <!-- grey padding -->
                <?php endif; ?>
            <!-- END blurbs type 2 -->


            <!-- blurbs type 3 -->
              <?php elseif( get_row_layout() == 'blurbs_type_3' ): ?>

                <? $k_blurbs_type_3 = 0; ?>

                <?php 
                    
                    $add_grey_padding = get_sub_field('add_grey_padding');
                    if ($add_grey_padding): ?>
                    <div class="grey-padding">

                    
                <?php endif; ?>
                        <h2 class="section-header sm-gold-line space container txt-center"> <?php the_sub_field('header'); ?> </h2>

                        <?php 
                        $section_description = get_sub_field('section_description'); 
                        if($section_description) {
                            echo '<div class="container blurb_type_3_section-decsription txt-center">' . $section_description . '</div>';
                        }
                    ?>
                        <?php if( have_rows('blurb_type_3_repeater') ): ?>
                            <div class="blurb_type_3_container blurbs container">
                                <?php while ( have_rows('blurb_type_3_repeater') ) : the_row(); ?>
                                    <div class="blurb blurb-<?php echo $k_blurbs_type_3; ?>">
                                        <img src="<?php $icon = get_sub_field('icon'); echo get_template_directory_uri() . '/img/icons/GC-ICON-' . $icon . '.png'; ?>">
                                        <h3 class="blurb-header sm-gold-line txt-center "><?php   the_sub_field('header');?> </h3>
                                        <p class="blurb-text txt-center ">
                                            <?php the_sub_field('text'); ?>
                                        </p>
                                    </div>
                                    <?php $k_blurbs_type_3++;?>
                                    <?php endwhile; ?>
                            </div>
                        <?php endif; ?>


                <?php $add_grey_padding = get_sub_field('add_grey_padding');
 if ($add_grey_padding): ?>
                        
                    </div> <!-- grey padding -->
                <?php endif; ?>
            <!-- END blurbs type 3 -->


             <!-- Step by step -->
             <?php elseif( get_row_layout() == 'step_by_step' ): ?>
                <div class="steps-container container">    
                    <h2 class="section-header txt-center sm-gold-line space"> 
                        <?php the_sub_field('section_header'); ?> 
                    </h2>
                    <?php 
                        $section_description = get_sub_field('section_description'); 
                        if($section_description) {
                            echo  $section_description;
                        }
                    ?>

                    <?php $k_step_by_step = 1; ?>
                    <?php if( have_rows('step') ): ?>
                        <div class="steps">
                            <?php while ( have_rows('step') ) : the_row(); ?>
                                <div class="step step-<?php echo $k_step_by_step; ?> row-<?php if(5 <=
                                 $k_step_by_step) { echo '2';} else { echo '1';}?>">
                             

<div class="arrow arrow-<?php echo $k_step_by_step; ?>"><img src="<?php echo get_template_directory_uri() . "/img/arrow-step-by-step.png"; ?>"></div>
                                    <div class="number"><?php echo $k_step_by_step; ?></div>
                                    <div class="step-content">
                                        <img src="<?php $icon = get_sub_field('icon'); echo get_template_directory_uri() . '/img/icons/GC-ICON-' . $icon . '.png'; ?>">
                                        <h3 class="blurb-header sm-gold-line txt-center "><?php   the_sub_field('header');?> </h3>
                                        <p class="blurb-text txt-center ">
                                            <?php the_sub_field('text'); ?>
                                        </p>
                                    </div>
                                </div>
                                <?php $k_step_by_step++; ?> 
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>

                    <?php $closing_remarks = get_sub_field('closing_remarks');
                            if($closing_remarks) {
                                echo '<div class="closing-remarkts space">' . $closing_remarks . '</div>';
                            }
                    ?>
                </div>
            <!-- END step by step -->


            



                 


          



  



               <!-- USPs -->
               <?php elseif( get_row_layout() == 'usps_type1' ): ?>
                <h2 class="section-header sm-gold-line space container"> <?php the_sub_field('section_header'); ?> </h2>
                        <?php if( have_rows('usp') ): ?>
                            <div class="usps" data-aos="fade-up">
                                <?php while ( have_rows('usp') ) : the_row(); ?>

                                    <div class="usp">
                                        <img src="<?php $icon = get_sub_field('icon'); echo get_template_directory_uri() . '/img/icons/GC-ICON-' . $icon . '.png'; ?>">
                                        <?php $header = get_sub_field('header'); if($header) { ?><h5 class="blurb-header sm-gold-line txt-center "><?php   the_sub_field('header');?> </h5> <?php } ?>
                                        <span class="txt-center"> <?php the_sub_field('text'); ?></span>
                                    </div>
                                   
                                   
                                    <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
            <!-- END USPs -->



               <!-- The Team -->
               <?php elseif( get_row_layout() == 'the_team' ): ?>
                <h2 class="section-header sm-gold-line container space"> <?php the_sub_field('section_header'); ?> </h2>
                        <?php if( have_rows('the_team') ): ?>
                            <div class="the-team container" data-aos="fade-up">
                                <?php while ( have_rows('the_team') ) : the_row(); ?>

                                    <div class="team-member">
                                        <img src="<?php the_sub_field('photo'); ?>">
                                        <span class="name"><?php the_sub_field('name'); ?></span>
                                        <span class="title"><?php the_sub_field('title'); ?></span>

                                    </div>
                                   
                                   
                                    <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
            <!-- END The Team -->




             <!-- Blog posts loop -->
             <?php elseif( get_row_layout() == 'blogs_loop' ): ?>
             <?php if(get_sub_field('section_header')) { ?><h2 class="section-header sm-gold-line"> <?php the_sub_field('section_header'); ?> </h2><?php } ?>
                <div class="the-loop">

                    <?php
                        $args = array(
                            'post_type' => 'post',
                        );

                        if(get_sub_field('posts_category')) { 
                            $posts_per_page = get_sub_field('posts_category');
                            $args['posts_per_page'] = $posts_per_page;
                        } else {
                           $args['posts_per_page'] =  6;
                        }

                        $post_query = new WP_Query($args);

                        if($post_query->have_posts() ) {
                            while($post_query->have_posts() ) {
                                $post_query->the_post();
                                ?>
                                <div class="post">
                                    <a href="<?php the_permalink(); ?>">
                                    <div class="thumbnail-container" style="background-image: url('<?php the_post_thumbnail_url('medium'); ?>'); height: 220px;">
                                    </div>
                                    <div class="text">

                                    
                                        <h5><?php the_title(); ?></h5>
                                        <?php
                                        
                                            the_excerpt();
                                         ?> 
                                        <div class="button"> <?php 
                            $read_more_global_button_text = get_field('read_more_global_button_text', 'option'); 
                            if ($read_more_global_button_text) {
                                echo $read_more_global_button_text; 
                            } else { 
                                echo 'Read more '; 
                            } 
                        ?> <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-button.png"></div>

                                        </div>
                                    </a>
                                </div>
                                <?php
                                }
                            }
                            wp_reset_query();
                    ?>
                    </div>

                    <?php if(ICL_LANGUAGE_CODE=='en'): ?>
                        <?php echo apply_filters( 'the_content', '[ajax_load_more container_type="div" posts_per_page="6" css_classes="the-loop"  offset="6" pause="true" scroll="false" button_label="Older Entries"]'); ?>

                    <?php elseif(ICL_LANGUAGE_CODE=='pt-pt'): ?>
                        <?php echo  apply_filters( 'the_content', '[ajax_load_more container_type="div" posts_per_page="6" css_classes="the-loop"  offset="6" pause="true" scroll="false" button_label="Posts Antigos" category="cidadania-europeia,investir-na-europa,mercado-imobiliario,residencia-europeia,vida-na-europa,visto-europeu"]'); ?>

                    <?php endif; ?>

            <!-- END Blog posts loop -->



   




           


             <!-- Local Experts Guide -->
             <?php elseif( get_row_layout() == 'local_experts_guides' ): ?>
             <div class="guides-outer container " data-aos="fade-up">
                <?php if(get_sub_field('section_header')) { ?><h2 class="section-header txt-center sm-gold-line"> <?php the_sub_field('section_header'); ?> </h2><?php } ?>
                <?php if(get_sub_field('description')) { ?><p class="description txt-center"> <?php the_sub_field('description'); ?> </p><?php } ?>
                <div class="guides">
                <?php
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 3
                        );

                        if(get_sub_field('guides_category')) {
                                  $args['category_name'] = get_sub_field('guides_category');
                        }

                       

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
                            ?><img src="<?php echo get_template_directory_uri(); ?>/img/arrow-button.png"></div>
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
            <!-- END Local Experts Guide -->





              <!-- Flip Cards -->
              <?php elseif( get_row_layout() == 'flip_cards' ): ?>
                <h2 class="section-header space sm-gold-line txt-center"> <?php the_sub_field('section_header'); ?> </h2>
                <?php $section_description = get_sub_field('section_description'); 
                        if($section_description) { ?>
                    <div class="section-description container"><?php echo $section_description; ?></div>
                <?php } ?>
                        <?php if( have_rows('flip_card') ): ?>
                            <div class="flip_cards space container" data-aos="fade-up">
                                <?php while ( have_rows('flip_card') ) : the_row(); ?>

                                    


                                    <div class="flip-card">
                                        <div class="flip-card-inner">
                                            <div class="flip-card-front">
                                            <img src="<?php $icon = get_sub_field('icon'); echo get_template_directory_uri() . '/img/icons/GC-ICON-' . $icon . '.png'; ?>">
                                            <?php $header = get_sub_field('header'); if($header) { ?><h5 class="blurb-header sm-gold-line txt-center "><?php   the_sub_field('header');?> </h5> <?php } ?>
                                            <img class="more" src="<?php 
                                                                        $more_button_flip_cards = get_field('more_button_flip_cards', 'option'); 
                                                                        if ($more_button_flip_cards) {
                                                                            echo $more_button_flip_cards; 
                                                                        } else { 
                                                                            echo get_template_directory_uri() . '/img/more.png'; 
                                                                        } 
                                                                    ?>" alt="">
                                            </div>
                                            <div class="flip-card-back">
                                                <span class="txt-center"> <?php the_sub_field('text'); ?></span>

                                            </div>
                                        </div>
                                    </div>
                                   
                                   
                                    <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
            <!-- END Flip Cards -->
            

            <!-- Slider -->

            <?php elseif( get_row_layout() == 'slider' ): ?>
            <style>
                .swiper-container {
                width: 100%;
                height: 650px;
                }

                .pagination-menu{
                    right: calc((100vw - 1080px) / 2) !important;
                }

                .swiper-slide {
                    background-color: #aaa;
                    background-blend-mode: multiply;
                    background-size: cover;
                }

               

                .swiper-pagination {
                    max-width: 20%;
                }


                .pagination-map {
                    left: calc((100vw - 1080px) / 2);
                    background-image: url('<?php echo get_template_directory_uri(); ?>/img/map.png');
                    height: 95%;
                    background-size: contain;
                    background-repeat: no-repeat;
                    max-width: 30%;
                }

                .pagination-map span {
                    visibility: hidden;
                    opacity: 1;
                }

                .pagination-map .Porto {
                    position: relative;
                    left: 90px;
                    top: 100px;
                }

                .pagination-map .swiper-pagination-bullet-active.Porto {
                    left: 70px;
                    top: 80px;
                }

                .pagination-map .Braga {
                    position: relative;
                    left: 110px;
                    top: 30px;
                }
                .pagination-map .swiper-pagination-bullet-active.Braga {
                    left: 90px;
                    top: 10px;
                }

                .pagination-map .Lisbon {
                    position: relative;
                    left: 40px;
                    top: 350px;
                }
                .pagination-map .swiper-pagination-bullet-active.Lisbon{
                    left: 20px;
                    top: 300px;
                }


                .pagination-map .Faro {
                    position: relative;
                    left: 140px;
                    top: 550px;
                }

                .pagination-map .swiper-pagination-bullet-active.Faro {
                    left: 120px;
                    top: 500px;
                }

                .pagination-map .Coimbra {
                    position: relative;
                    left: 110px;
                    top: 200px;
                }

                .pagination-map .swiper-pagination-bullet-active.Coimbra {
                    left: 95px;
                    top: 150px;
                }


                .pagination-map .Evora {
                    position: relative;
                    left: 150px;
                    top: 330px;
                }

                .pagination-map .swiper-pagination-bullet-active.Evora {
                    left: 130px;
                    top: 280px;
                }

                .pagination-map span:before {
                    content: url(<?php echo get_template_directory_uri(); ?>/img/map_pointer-mini.png);
                    visibility: visible;
                    opacity: 1;
                }

                .pagination-map .swiper-pagination-bullet-active.Porto:before {
                    content: url(<?php echo get_template_directory_uri(); ?>/img/slider_pointer-porto.png);
                    visibility: visible;
                    opacity: 1;
                   
                }

                .pagination-map .swiper-pagination-bullet-active.Braga:before {
                    content: url(<?php echo get_template_directory_uri(); ?>/img/slider_pointer-braga.png);
                    visibility: visible;
                    opacity: 1;
                   
                }
                .pagination-map .swiper-pagination-bullet-active.Lisbon:before {
                    content: url(<?php echo get_template_directory_uri(); ?>/img/slider_pointer-lisbon.png);
                    visibility: visible;
                    opacity: 1;
                   
                }

                .pagination-map .swiper-pagination-bullet-active.Faro:before {
                    content: url(<?php echo get_template_directory_uri(); ?>/img/slider_pointer-faro.png);
                    visibility: visible;
                    opacity: 1;
                   
                }
                .pagination-map .swiper-pagination-bullet-active.Coimbra:before {
                    content: url(<?php echo get_template_directory_uri(); ?>/img/slider_pointer-coimbra.png);
                    visibility: visible;
                    opacity: 1;
                   
                }

                .pagination-map .swiper-pagination-bullet-active.Evora:before {
                    content: url(<?php echo get_template_directory_uri(); ?>/img/slider_pointer-evora.png);
                    visibility: visible;
                    opacity: 1;
                   
                }
                
                
               

                .swiper-slide .text {
                    position: relative;
                    right: calc((100vw - 1080px) * -3.1);
                    max-width: 400px;
                    height: 100%;
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    text-align: right;
                }

                .slider_sub-header {
                    color: white;
                }

                .swiper-button-prev, .swiper-button-next {
                    color: white;
                }

                .slider_country-header, .slider_country-description {

                    color: #e0c575; 
                    margin-bottom: 0px;

                }

               

                .swiper-button-prev {
                    left: none;
                    right: 10% !important;
                    top: 20px;
                }

                .pagination-menu {
                    color: white;
                }

                .pagination-menu {
                    font-weight: 500;
                    height: 100%;
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    justify-content: center;
              
                }

                .pagination-menu .swiper-pagination-bullet {
                    content: "";
                    text-align: left;
                    opacity: 1;
                    background: 0 0;
                    color: #fff;
                    margin: 15px 0 !important;
                    position: relative;
                    color: #fff;
                    line-height: 1.8;
                    display: flex !important;
                    align-items: center;
                }

                .pagination-menu .swiper-pagination-bullet-active:before {
                    content: "";
                    position: absolute;
                    left: -37px;
                    width: 16px;
                    height: 16px;
                    border-radius: 100%;
                    background-color: white;
                }

                .pagination-menu:before {
                    content: "";
                    position: absolute;
                    left: -30px;
                    top: 0;
                    height: 100%;
                    width: 1px;
                    background-color: rgba(255,255,255,.2);
                }

                .pagination-menu .swiper-pagination-bullet {
                    background-size: 20px;
                    padding-left: 10px;
                }

                .slider_header {
                    font-family: 'Raleway', sans-serif;
                    font-size: 2em;
                    color: white;
                    margin-top: 0px;
                    font-weight: 500;
                    margin-bottom: 0px;
                }
                .slider_header:after {
                    content: ' ';
                    
                    display: block;
                    text-align: right;
                    margin-top: 7px;
                    max-width: 25px;
                    border: 2px solid white;
                    margin-left: calc(100% - 25px);

                }
            

           
                        
            </style>

                <div class="swiper-container">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/slider-porto-bg.jpg');">
                            <div class="text">
                                <h2 class="slider_header">
                                    Discover Portugal
                                </h2>
                                <p class="slider_sub-header">
                                    Click on the map reveal more info
                                </p>

                                <h3 class="slider_country-header">
                                    Discover Lisbon 
                                </h3>
                                <p class="slider_country-description">
                                    45% of the country’s GDP.
                                    Home to most multinational companies in Portugal.
                                    Dynamic financial and technological hub.
                                    High real estate returns.
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/slider-porto-bg.jpg');">
                            <div class="text">
                                <h2 class="slider_header">
                                    Discover Portugal
                                </h2>
                                <p class="slider_sub-header">
                                    Click on the map reveal more info
                                </p>

                                <h3 class="slider_country-header">
                                    Discover Porto 
                                </h3>
                                <p class="slider_country-description">
                                    45% of the country’s GDP.
                                    Home to most multinational companies in Portugal.
                                    Dynamic financial and technological hub.
                                    High real estate returns.
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/slider-porto-bg.jpg');">
                            <div class="text">
                                <h2 class="slider_header">
                                    Discover Portugal
                                </h2>
                                <p class="slider_sub-header">
                                    Click on the map reveal more info
                                </p>

                                <h3 class="slider_country-header">
                                    Discover Braga 
                                </h3>
                                <p class="slider_country-description">
                                    45% of the country’s GDP.
                                    Home to most multinational companies in Portugal.
                                    Dynamic financial and technological hub.
                                    High real estate returns.
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/slider-porto-bg.jpg');">
                            <div class="text">
                                <h2 class="slider_header">
                                    Discover Portugal
                                </h2>
                                <p class="slider_sub-header">
                                    Click on the map reveal more info
                                </p>

                                <h3 class="slider_country-header">
                                    Discover Faro
                                </h3>
                                <p class="slider_country-description">
                                    45% of the country’s GDP.
                                    Home to most multinational companies in Portugal.
                                    Dynamic financial and technological hub.
                                    High real estate returns.
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/slider-porto-bg.jpg');">
                            <div class="text">
                                <h2 class="slider_header">
                                    Discover Portugal
                                </h2>
                                <p class="slider_sub-header">
                                    Click on the map reveal more info
                                </p>

                                <h3 class="slider_country-header">
                                    Discover Coimbra
                                <p class="slider_country-description">
                                    45% of the country’s GDP.
                                    Home to most multinational companies in Portugal.
                                    Dynamic financial and technological hub.
                                    High real estate returns.
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/slider-porto-bg.jpg');">
                        <div class="text">
                                <h2 class="slider_header">
                                    Discover Portugal
                                </h2>
                                <p class="slider_sub-header">
                                    Click on the map reveal more info
                                </p>

                                <h3 class="slider_country-header">
                                    Discover Evora
                                <p class="slider_country-description">
                                    45% of the country’s GDP.
                                    Home to most multinational companies in Portugal.
                                    Dynamic financial and technological hub.
                                    High real estate returns.
                                </p>
                            </div>
                        </div>
                        
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination pagination-menu"></div>
                    <div class="swiper-pagination pagination-map"></div>


                    <!-- If we need navigation buttons -->
                 <!--   <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div> -->

                    <!-- If we need scrollbar -->
                    <div class="swiper-scrollbar"></div>
                </div>

            <!-- END Slider -->


                <!-- TWO buttons -->

            <?php elseif( get_row_layout() == 'two_buttons' ): ?>
           
            <style>
                 .two-buttons  {
                   
                        background-image: url('<?php the_sub_field('background'); ?>'); 
                    
                 }
            </style>
           <div class="two-buttons">
            <div class="header-cta-container ">
                    <header class="header-cta-section txt-center ">
                        <h1 class="txt-center"><?php the_sub_field('header'); ?></h1>
                        <p><?php the_sub_field('sub_header'); ?></p>
                        <div class="buttons-container">
                            <a href="<?php the_sub_field('button_1_url'); ?>">
                                <div class="button button_gold">
                                    <?php the_sub_field('button_1_text'); ?>
                                </div>
                            </a>

                            <a href="<?php the_sub_field('button_2_url'); ?>">
                                <div class="button button_white">
                                <?php the_sub_field('button_2_text'); ?>
                                </div>
                            </a>
                        </div>
                        
                    </header>
                </div>
           </div>                                                


            <!-- END two buttons -->


             <!-- Tiles -->

             

             <?php elseif( get_row_layout() == 'tiles' ): ?>
                <style>
                    .tiles .left {
                        background-image: url('<?php the_sub_field('left-background'); ?>'); 
                    }

                    .tiles .right {
                        background-image: url('<?php the_sub_field('right-image'); ?>'); 
                    }
                </style>
                <div class="tiles space">
                    <div class="left">
                        <div class="left-container">
                        <?php the_sub_field('left-text'); ?>

                        <?php 

                        $button_text = get_sub_field('button_-_text'); 
                        if ($button_text) {
                            ?>
                                <a href="<?php the_sub_field('button_-_url');?>">
                                    <div class="button button_blue">        
                                        <?php echo $button_text; ?>
                                    </div>
                                </a>
                            <?php
                        }?>
                        </div>
                        

                    </div>
                    <div class="right">

                    </div>
                </div>

            <!-- END Tiles -->
            

              <!-- Contact form -->

             

              <?php elseif( get_row_layout() == 'contact_form' ): ?>
                <style>
                    .form-block .left {
                        background-image: url('<?php
                            $image_left = get_sub_field("image-left");
                            if($image_left) {
                                the_sub_field("image-left");            
                            } else {
                                the_sub_field("global_image_form", "option");
                            }
                        ?>'); 
                  
        
                   
                </style>
                <div class="form-block ">
                    <div class="left">
                       


                        

                    </div>
                    <div class="right">
                        <div class="form-container">

                        <?php
            $form = get_sub_field('form');
            
            if($form) {
                echo apply_filters( 'the_content', $form);
            
            } else {
                $global_form = get_field('global_form', 'option');
                echo apply_filters( 'the_content', $global_form);

            }
            
           ?>
                        </div>

                    
                        
                    </div>
                </div>

            <!-- END contact form -->


               <!-- Contact form (contact us) -->

             

               <?php elseif( get_row_layout() == 'contact_form_contac_us' ): ?>
          
                <div class="container contact-us">
                    <div class="left">
                       <?php the_sub_field('Text-left'); ?>

                      
                        

                    </div>
                    <div class="right">
                        <div class="form-container">
                            <?php $form = get_sub_field('form');
                        echo do_shortcode($form);
                        ?>
                        </div>

                    
                        
                    </div>
                </div>

            <!-- END contact form -->

             




             <!-- image -->
            <?php elseif( get_row_layout() == 'image' ): ?>

                    <?php 
                    
                    global $image_center;
                    $image_center =  get_sub_field('image_center');
                     ?>

                    
                <?php $image_header = get_sub_field('header'); if($image_header) {?> <h2 class="section-header space <?php if($image_center) { echo 'txt-center';} ?> sm-gold-line"> <?php the_sub_field('header'); ?> </h2><?php } ?>
                    



                    <?php 

                    $link = get_sub_field('link');
                    $image_url = get_sub_field('image_url'); 
                    if($link) {
                        echo '<a href="' . $link . '">';
                    }
                    
                   
                        echo ' <div class="block-image container';?>
                        <?php if($image_center) { echo 'block-image-center';} ?>
                        
                        ">
                        <?php $image_url_mobile = get_sub_field('image_url_mobile'); 
                                if($image_url_mobile) { 
                                    echo '<img class="image-block-mobile" src="' . $image_url_mobile . '">';
                                    echo '<style> 
                                    @media (max-width: 769px) {
                                    .image-block-desktop {
                                        display: none;
                                    }
                                }
                                    </style>';
                                } 
                        ?>

                        <img class="image image-block-desktop
                       <?php echo '" src="' . $image_url . '">
                       </div> ';
                       if($link) {
                        echo '</a>';
                    }
                   ?> 
                   
            <?php endif; ?>
                      
            <!-- END image -->
               
            </div>
            <?php endwhile; ?>
        <?php endif; ?>


<?php
