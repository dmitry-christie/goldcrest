
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

                   
                    <?php $header = get_sub_field('header');
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
                        <div class="button button_gold"><?php $button_text = get_sub_field('button_text'); echo $button_text; ?> </div>
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
                               <div class="button"><?php $button_text = get_sub_field('button_text'); echo $button_text; ?> <img src="<?php echo get_template_directory_uri(); ?>/images/arrow-button.png"></div>
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
                               <div class="button"><?php $button_text = get_sub_field('button_text'); echo $button_text; ?> <img src="<?php echo get_template_directory_uri(); ?>/images/arrow-button.png"></div>
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
                                        <img src="<?php $icon = get_sub_field('icon'); echo get_template_directory_uri() . '/images/icons/GC-ICON-' . $icon . '.png'; ?>">
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
                                        <img src="<?php $icon = get_sub_field('icon'); echo get_template_directory_uri() . '/images/icons/GC-ICON-' . $icon . '.png'; ?>">
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
                                        <img src="<?php $icon = get_sub_field('icon'); echo get_template_directory_uri() . '/images/icons/GC-ICON-' . $icon . '.png'; ?>">
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
                             

<div class="arrow arrow-<?php echo $k_step_by_step; ?>"><img src="<?php echo get_template_directory_uri() . "/images/arrow-step-by-step.png"; ?>"></div>
                                    <div class="number"><?php echo $k_step_by_step; ?></div>
                                    <div class="step-content">
                                        <img src="<?php $icon = get_sub_field('icon'); echo get_template_directory_uri() . '/images/icons/GC-ICON-' . $icon . '.png'; ?>">
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
                                        <img src="<?php $icon = get_sub_field('icon'); echo get_template_directory_uri() . '/images/icons/GC-ICON-' . $icon . '.png'; ?>">
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
                        ?> <img src="<?php echo get_template_directory_uri(); ?>/images/arrow-button.png"></div>

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
                                            <img src="<?php $icon = get_sub_field('icon'); echo get_template_directory_uri() . '/images/icons/GC-ICON-' . $icon . '.png'; ?>">
                                            <?php $header = get_sub_field('header'); if($header) { ?><h5 class="blurb-header sm-gold-line txt-center "><?php   the_sub_field('header');?> </h5> <?php } ?>
                                            <img class="more" src="<?php 
                                                                        $more_button_flip_cards = get_field('more_button_flip_cards', 'option'); 
                                                                        if ($more_button_flip_cards) {
                                                                            echo $more_button_flip_cards; 
                                                                        } else { 
                                                                            echo get_template_directory_uri() . '/images/more.png'; 
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

@font-face {
  font-family: 'swiper-icons';
  src: url('data:application/font-woff;charset=utf-8;base64, d09GRgABAAAAAAZgABAAAAAADAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABGRlRNAAAGRAAAABoAAAAci6qHkUdERUYAAAWgAAAAIwAAACQAYABXR1BPUwAABhQAAAAuAAAANuAY7+xHU1VCAAAFxAAAAFAAAABm2fPczU9TLzIAAAHcAAAASgAAAGBP9V5RY21hcAAAAkQAAACIAAABYt6F0cBjdnQgAAACzAAAAAQAAAAEABEBRGdhc3AAAAWYAAAACAAAAAj//wADZ2x5ZgAAAywAAADMAAAD2MHtryVoZWFkAAABbAAAADAAAAA2E2+eoWhoZWEAAAGcAAAAHwAAACQC9gDzaG10eAAAAigAAAAZAAAArgJkABFsb2NhAAAC0AAAAFoAAABaFQAUGG1heHAAAAG8AAAAHwAAACAAcABAbmFtZQAAA/gAAAE5AAACXvFdBwlwb3N0AAAFNAAAAGIAAACE5s74hXjaY2BkYGAAYpf5Hu/j+W2+MnAzMYDAzaX6QjD6/4//Bxj5GA8AuRwMYGkAPywL13jaY2BkYGA88P8Agx4j+/8fQDYfA1AEBWgDAIB2BOoAeNpjYGRgYNBh4GdgYgABEMnIABJzYNADCQAACWgAsQB42mNgYfzCOIGBlYGB0YcxjYGBwR1Kf2WQZGhhYGBiYGVmgAFGBiQQkOaawtDAoMBQxXjg/wEGPcYDDA4wNUA2CCgwsAAAO4EL6gAAeNpj2M0gyAACqxgGNWBkZ2D4/wMA+xkDdgAAAHjaY2BgYGaAYBkGRgYQiAHyGMF8FgYHIM3DwMHABGQrMOgyWDLEM1T9/w8UBfEMgLzE////P/5//f/V/xv+r4eaAAeMbAxwIUYmIMHEgKYAYjUcsDAwsLKxc3BycfPw8jEQA/gZBASFhEVExcQlJKWkZWTl5BUUlZRVVNXUNTQZBgMAAMR+E+gAEQFEAAAAKgAqACoANAA+AEgAUgBcAGYAcAB6AIQAjgCYAKIArAC2AMAAygDUAN4A6ADyAPwBBgEQARoBJAEuATgBQgFMAVYBYAFqAXQBfgGIAZIBnAGmAbIBzgHsAAB42u2NMQ6CUAyGW568x9AneYYgm4MJbhKFaExIOAVX8ApewSt4Bic4AfeAid3VOBixDxfPYEza5O+Xfi04YADggiUIULCuEJK8VhO4bSvpdnktHI5QCYtdi2sl8ZnXaHlqUrNKzdKcT8cjlq+rwZSvIVczNiezsfnP/uznmfPFBNODM2K7MTQ45YEAZqGP81AmGGcF3iPqOop0r1SPTaTbVkfUe4HXj97wYE+yNwWYxwWu4v1ugWHgo3S1XdZEVqWM7ET0cfnLGxWfkgR42o2PvWrDMBSFj/IHLaF0zKjRgdiVMwScNRAoWUoH78Y2icB/yIY09An6AH2Bdu/UB+yxopYshQiEvnvu0dURgDt8QeC8PDw7Fpji3fEA4z/PEJ6YOB5hKh4dj3EvXhxPqH/SKUY3rJ7srZ4FZnh1PMAtPhwP6fl2PMJMPDgeQ4rY8YT6Gzao0eAEA409DuggmTnFnOcSCiEiLMgxCiTI6Cq5DZUd3Qmp10vO0LaLTd2cjN4fOumlc7lUYbSQcZFkutRG7g6JKZKy0RmdLY680CDnEJ+UMkpFFe1RN7nxdVpXrC4aTtnaurOnYercZg2YVmLN/d/gczfEimrE/fs/bOuq29Zmn8tloORaXgZgGa78yO9/cnXm2BpaGvq25Dv9S4E9+5SIc9PqupJKhYFSSl47+Qcr1mYNAAAAeNptw0cKwkAAAMDZJA8Q7OUJvkLsPfZ6zFVERPy8qHh2YER+3i/BP83vIBLLySsoKimrqKqpa2hp6+jq6RsYGhmbmJqZSy0sraxtbO3sHRydnEMU4uR6yx7JJXveP7WrDycAAAAAAAH//wACeNpjYGRgYOABYhkgZgJCZgZNBkYGLQZtIJsFLMYAAAw3ALgAeNolizEKgDAQBCchRbC2sFER0YD6qVQiBCv/H9ezGI6Z5XBAw8CBK/m5iQQVauVbXLnOrMZv2oLdKFa8Pjuru2hJzGabmOSLzNMzvutpB3N42mNgZGBg4GKQYzBhYMxJLMlj4GBgAYow/P/PAJJhLM6sSoWKfWCAAwDAjgbRAAB42mNgYGBkAIIbCZo5IPrmUn0hGA0AO8EFTQAA') format('woff');
  font-weight: 400;
  font-style: normal;
}
:root {
  --swiper-theme-color: #007aff;
}
.swiper-container {
  margin-left: auto;
  margin-right: auto;
  position: relative;
  overflow: hidden;
  list-style: none;
  padding: 0;
  /* Fix of Webkit flickering */
  z-index: 1;
}
.swiper-container-vertical > .swiper-wrapper {
  flex-direction: column;
}
.swiper-wrapper {
  position: relative;
  width: 100%;
  height: 100%;
  z-index: 1;
  display: flex;
  transition-property: transform;
  box-sizing: content-box;
}
.swiper-container-android .swiper-slide,
.swiper-wrapper {
  transform: translate3d(0px, 0, 0);
}
.swiper-container-multirow > .swiper-wrapper {
  flex-wrap: wrap;
}
.swiper-container-multirow-column > .swiper-wrapper {
  flex-wrap: wrap;
  flex-direction: column;
}
.swiper-container-free-mode > .swiper-wrapper {
  transition-timing-function: ease-out;
  margin: 0 auto;
}
.swiper-slide {
  flex-shrink: 0;
  width: 100%;
  height: 100%;
  position: relative;
  transition-property: transform;
}
.swiper-slide-invisible-blank {
  visibility: hidden;
}
/* Auto Height */
.swiper-container-autoheight,
.swiper-container-autoheight .swiper-slide {
  height: auto;
}
.swiper-container-autoheight .swiper-wrapper {
  align-items: flex-start;
  transition-property: transform, height;
}
/* 3D Effects */
.swiper-container-3d {
  perspective: 1200px;
}
.swiper-container-3d .swiper-wrapper,
.swiper-container-3d .swiper-slide,
.swiper-container-3d .swiper-slide-shadow-left,
.swiper-container-3d .swiper-slide-shadow-right,
.swiper-container-3d .swiper-slide-shadow-top,
.swiper-container-3d .swiper-slide-shadow-bottom,
.swiper-container-3d .swiper-cube-shadow {
  transform-style: preserve-3d;
}
.swiper-container-3d .swiper-slide-shadow-left,
.swiper-container-3d .swiper-slide-shadow-right,
.swiper-container-3d .swiper-slide-shadow-top,
.swiper-container-3d .swiper-slide-shadow-bottom {
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  pointer-events: none;
  z-index: 10;
}
.swiper-container-3d .swiper-slide-shadow-left {
  background-image: linear-gradient(to left, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
}
.swiper-container-3d .swiper-slide-shadow-right {
  background-image: linear-gradient(to right, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
}
.swiper-container-3d .swiper-slide-shadow-top {
  background-image: linear-gradient(to top, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
}
.swiper-container-3d .swiper-slide-shadow-bottom {
  background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
}
/* CSS Mode */
.swiper-container-css-mode > .swiper-wrapper {
  overflow: auto;
  scrollbar-width: none;
  /* For Firefox */
  -ms-overflow-style: none;
  /* For Internet Explorer and Edge */
}
.swiper-container-css-mode > .swiper-wrapper::-webkit-scrollbar {
  display: none;
}
.swiper-container-css-mode > .swiper-wrapper > .swiper-slide {
  scroll-snap-align: start start;
}
.swiper-container-horizontal.swiper-container-css-mode > .swiper-wrapper {
  scroll-snap-type: x mandatory;
}
.swiper-container-vertical.swiper-container-css-mode > .swiper-wrapper {
  scroll-snap-type: y mandatory;
}
:root {
  --swiper-navigation-size: 44px;
  /*
  --swiper-navigation-color: var(--swiper-theme-color);
  */
}
.swiper-button-prev,
.swiper-button-next {
  position: absolute;
  top: 50%;
  width: calc(var(--swiper-navigation-size) / 44 * 27);
  height: var(--swiper-navigation-size);
  margin-top: calc(-1 * var(--swiper-navigation-size) / 2);
  z-index: 10;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--swiper-navigation-color, var(--swiper-theme-color));
}
.swiper-button-prev.swiper-button-disabled,
.swiper-button-next.swiper-button-disabled {
  opacity: 0.35;
  cursor: auto;
  pointer-events: none;
}
.swiper-button-prev:after,
.swiper-button-next:after {
  font-family: swiper-icons;
  font-size: var(--swiper-navigation-size);
  text-transform: none !important;
  letter-spacing: 0;
  text-transform: none;
  font-variant: initial;
  line-height: 1;
}
.swiper-button-prev,
.swiper-container-rtl .swiper-button-next {
  left: 10px;
  right: auto;
}
.swiper-button-prev:after,
.swiper-container-rtl .swiper-button-next:after {
  content: 'prev';
}
.swiper-button-next,
.swiper-container-rtl .swiper-button-prev {
  right: 10px;
  left: auto;
}
.swiper-button-next:after,
.swiper-container-rtl .swiper-button-prev:after {
  content: 'next';
}
.swiper-button-prev.swiper-button-white,
.swiper-button-next.swiper-button-white {
  --swiper-navigation-color: #ffffff;
}
.swiper-button-prev.swiper-button-black,
.swiper-button-next.swiper-button-black {
  --swiper-navigation-color: #000000;
}
.swiper-button-lock {
  display: none;
}
:root {
  /*
  --swiper-pagination-color: var(--swiper-theme-color);
  */
}
.swiper-pagination {
  position: absolute;
  text-align: center;
  transition: 300ms opacity;
  transform: translate3d(0, 0, 0);
  z-index: 10;
}
.swiper-pagination.swiper-pagination-hidden {
  opacity: 0;
}
/* Common Styles */
.swiper-pagination-fraction,
.swiper-pagination-custom,
.swiper-container-horizontal > .swiper-pagination-bullets {
  bottom: 10px;
  left: 0;
  width: 100%;
}
/* Bullets */
.swiper-pagination-bullets-dynamic {
  overflow: hidden;
  font-size: 0;
}
.swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
  transform: scale(0.33);
  position: relative;
}
.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active {
  transform: scale(1);
}
.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-main {
  transform: scale(1);
}
.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-prev {
  transform: scale(0.66);
}
.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-prev-prev {
  transform: scale(0.33);
}
.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-next {
  transform: scale(0.66);
}
.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-next-next {
  transform: scale(0.33);
}
.swiper-pagination-bullet {
  width: 8px;
  height: 8px;
  display: inline-block;
  border-radius: 100%;
  background: #000;
  opacity: 0.2;
}
button.swiper-pagination-bullet {
  border: none;
  margin: 0;
  padding: 0;
  box-shadow: none;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
}
.swiper-pagination-clickable .swiper-pagination-bullet {
  cursor: pointer;
}
.swiper-pagination-bullet-active {
  opacity: 1;
  background: var(--swiper-pagination-color, var(--swiper-theme-color));
}
.swiper-container-vertical > .swiper-pagination-bullets {
  right: 10px;
  top: 50%;
  transform: translate3d(0px, -50%, 0);
}
.swiper-container-vertical > .swiper-pagination-bullets .swiper-pagination-bullet {
  margin: 6px 0;
  display: block;
}
.swiper-container-vertical > .swiper-pagination-bullets.swiper-pagination-bullets-dynamic {
  top: 50%;
  transform: translateY(-50%);
  width: 8px;
}
.swiper-container-vertical > .swiper-pagination-bullets.swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
  display: inline-block;
  transition: 200ms transform, 200ms top;
}
.swiper-container-horizontal > .swiper-pagination-bullets .swiper-pagination-bullet {
  margin: 0 4px;
}
.swiper-container-horizontal > .swiper-pagination-bullets.swiper-pagination-bullets-dynamic {
  left: 50%;
  transform: translateX(-50%);
  white-space: nowrap;
}
.swiper-container-horizontal > .swiper-pagination-bullets.swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
  transition: 200ms transform, 200ms left;
}
.swiper-container-horizontal.swiper-container-rtl > .swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
  transition: 200ms transform, 200ms right;
}
/* Progress */
.swiper-pagination-progressbar {
  background: rgba(0, 0, 0, 0.25);
  position: absolute;
}
.swiper-pagination-progressbar .swiper-pagination-progressbar-fill {
  background: var(--swiper-pagination-color, var(--swiper-theme-color));
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  transform: scale(0);
  transform-origin: left top;
}
.swiper-container-rtl .swiper-pagination-progressbar .swiper-pagination-progressbar-fill {
  transform-origin: right top;
}
.swiper-container-horizontal > .swiper-pagination-progressbar,
.swiper-container-vertical > .swiper-pagination-progressbar.swiper-pagination-progressbar-opposite {
  width: 100%;
  height: 4px;
  left: 0;
  top: 0;
}
.swiper-container-vertical > .swiper-pagination-progressbar,
.swiper-container-horizontal > .swiper-pagination-progressbar.swiper-pagination-progressbar-opposite {
  width: 4px;
  height: 100%;
  left: 0;
  top: 0;
}
.swiper-pagination-white {
  --swiper-pagination-color: #ffffff;
}
.swiper-pagination-black {
  --swiper-pagination-color: #000000;
}
.swiper-pagination-lock {
  display: none;
}
/* Scrollbar */
.swiper-scrollbar {
  border-radius: 10px;
  position: relative;
  -ms-touch-action: none;
  background: rgba(0, 0, 0, 0.1);
}
.swiper-container-horizontal > .swiper-scrollbar {
  position: absolute;
  left: 1%;
  bottom: 3px;
  z-index: 50;
  height: 5px;
  width: 98%;
}
.swiper-container-vertical > .swiper-scrollbar {
  position: absolute;
  right: 3px;
  top: 1%;
  z-index: 50;
  width: 5px;
  height: 98%;
}
.swiper-scrollbar-drag {
  height: 100%;
  width: 100%;
  position: relative;
  background: rgba(0, 0, 0, 0.5);
  border-radius: 10px;
  left: 0;
  top: 0;
}
.swiper-scrollbar-cursor-drag {
  cursor: move;
}
.swiper-scrollbar-lock {
  display: none;
}
.swiper-zoom-container {
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
}
.swiper-zoom-container > img,
.swiper-zoom-container > svg,
.swiper-zoom-container > canvas {
  max-width: 100%;
  max-height: 100%;
  object-fit: contain;
}
.swiper-slide-zoomed {
  cursor: move;
}
/* Preloader */
:root {
  /*
  --swiper-preloader-color: var(--swiper-theme-color);
  */
}
.swiper-lazy-preloader {
  width: 42px;
  height: 42px;
  position: absolute;
  left: 50%;
  top: 50%;
  margin-left: -21px;
  margin-top: -21px;
  z-index: 10;
  transform-origin: 50%;
  animation: swiper-preloader-spin 1s infinite linear;
  box-sizing: border-box;
  border: 4px solid var(--swiper-preloader-color, var(--swiper-theme-color));
  border-radius: 50%;
  border-top-color: transparent;
}
.swiper-lazy-preloader-white {
  --swiper-preloader-color: #fff;
}
.swiper-lazy-preloader-black {
  --swiper-preloader-color: #000;
}
@keyframes swiper-preloader-spin {
  100% {
    transform: rotate(360deg);
  }
}
/* a11y */
.swiper-container .swiper-notification {
  position: absolute;
  left: 0;
  top: 0;
  pointer-events: none;
  opacity: 0;
  z-index: -1000;
}
.swiper-container-fade.swiper-container-free-mode .swiper-slide {
  transition-timing-function: ease-out;
}
.swiper-container-fade .swiper-slide {
  pointer-events: none;
  transition-property: opacity;
}
.swiper-container-fade .swiper-slide .swiper-slide {
  pointer-events: none;
}
.swiper-container-fade .swiper-slide-active,
.swiper-container-fade .swiper-slide-active .swiper-slide-active {
  pointer-events: auto;
}
.swiper-container-cube {
  overflow: visible;
}
.swiper-container-cube .swiper-slide {
  pointer-events: none;
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
  z-index: 1;
  visibility: hidden;
  transform-origin: 0 0;
  width: 100%;
  height: 100%;
}
.swiper-container-cube .swiper-slide .swiper-slide {
  pointer-events: none;
}
.swiper-container-cube.swiper-container-rtl .swiper-slide {
  transform-origin: 100% 0;
}
.swiper-container-cube .swiper-slide-active,
.swiper-container-cube .swiper-slide-active .swiper-slide-active {
  pointer-events: auto;
}
.swiper-container-cube .swiper-slide-active,
.swiper-container-cube .swiper-slide-next,
.swiper-container-cube .swiper-slide-prev,
.swiper-container-cube .swiper-slide-next + .swiper-slide {
  pointer-events: auto;
  visibility: visible;
}
.swiper-container-cube .swiper-slide-shadow-top,

</style>
            <style>
                .swiper-container {
                width: 100%;
                height: 650px;
                }

                .pagination-menu{
                    right: calc((100vw - 1080px) / 2) !important;
                }

                .swiper-slide {
                    background-color:  #3d3d3d;
                    background-blend-mode: multiply;
                    background-size: cover;
                }

               

                .swiper-pagination {
                    max-width: 20%;
                }


                .pagination-map {
                    left: calc((100vw - 1080px) / 2);
                    background-image: url('<?php echo get_template_directory_uri(); ?>/images/map.png');
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
                    content: url(<?php echo get_template_directory_uri(); ?>/images/map_pointer-mini.png);
                    visibility: visible;
                    opacity: 1;
                }

                .pagination-map .swiper-pagination-bullet-active.Porto:before {
                    content: url(<?php echo get_template_directory_uri(); ?>/images/slider_pointer-porto.png);
                    visibility: visible;
                    opacity: 1;
                   
                }

                .pagination-map .swiper-pagination-bullet-active.Braga:before {
                    content: url(<?php echo get_template_directory_uri(); ?>/images/slider_pointer-braga.png);
                    visibility: visible;
                    opacity: 1;
                   
                }
                .pagination-map .swiper-pagination-bullet-active.Lisbon:before {
                    content: url(<?php echo get_template_directory_uri(); ?>/images/slider_pointer-lisbon.png);
                    visibility: visible;
                    opacity: 1;
                   
                }

                .pagination-map .swiper-pagination-bullet-active.Faro:before {
                    content: url(<?php echo get_template_directory_uri(); ?>/images/slider_pointer-faro.png);
                    visibility: visible;
                    opacity: 1;
                   
                }
                .pagination-map .swiper-pagination-bullet-active.Coimbra:before {
                    content: url(<?php echo get_template_directory_uri(); ?>/images/slider_pointer-coimbra.png);
                    visibility: visible;
                    opacity: 1;
                   
                }

                .pagination-map .swiper-pagination-bullet-active.Evora:before {
                    content: url(<?php echo get_template_directory_uri(); ?>/images/slider_pointer-evora.png);
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

                @media (min-width: 1300px) {
                    .swiper-slide .text {
                        right: calc((100vw - 1080px) * -1);

                    }
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


                @media (max-width: 800px ) {
                    .swiper-button-prev {
                        right: 80% !important;
                        top: 30px;
                        left: 80%;
                        transform: rotate(90deg);
                    }

                    .swiper-button-next {
                        right: 80% !important;
                        top: 90%;
                        left: 80%;
                        transform: rotate(90deg);
                    }
                }

            

           
                        
            </style>

                <div class="swiper-container">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/slider/slide-lisbon.jpg');">
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
                        <div class="swiper-slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/slider/slide-porto.jpg');">
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
                        <div class="swiper-slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/slider/slide-braga.jpg');">
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
                        <div class="swiper-slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/slider/slide-faro.jpg');">
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
                        <div class="swiper-slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/slider/slide-coimbra.jpg');">
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
                        <div class="swiper-slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/slider/slide-evora.jpg');">
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


                   <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div> 

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
