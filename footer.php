<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package goldcrest
 */

?>

	<footer id="colophon" class="site-footer ">
		<div class="widgets container">
			<div class="menu">
				<ul class="footer-list">
					<?php
					// check if the repeater field has rows of data

					$i = 0;
					if( have_rows('links_menu', 'options') ):
						// loop through the rows of data
						while ( have_rows('links_menu', 'options') ) : the_row();
						
							if ($i > 0) {
								echo '<li class="separator">|</li>';
							}
							$i++;
							?>
								<li><a href="<?php the_sub_field('url');?>"><?php the_sub_field('text');?></a></li>
							<?php
							
						endwhile;
					endif;?>
				</ul>
			
			</div>
			<div class="social">
					<?php $social_link_linked = get_field('social_links_linked', 'options'); if($social_link_linked) {  ?><a href="<?php the_field('social_links_linked', 'options');?>"><img src="<?php echo get_template_directory_uri(); ?>/img/footer-linked.png"></a><?php } ?>
					<?php $social_links_facebook = get_field('social_links-facebook', 'options'); if($social_links_facebook) {  ?><a href="<?php the_field('social_links-facebook', 'options');?>"><img src="<?php echo get_template_directory_uri(); ?>/img/footer-fb.png"></a><?php } ?>
					<?php $social_links_instagram_url = get_field('social_links-instagram_url', 'options'); if($social_links_instagram_url) {  ?><a href="<?php the_field('social_links-instagram_url', 'options');?>"><img src="<?php echo get_template_directory_uri(); ?>/img/footer-ig.png"> </a><?php } ?>
			</div>
		</div>
		<hr class="container">
		<div class="copyright-container container">
			<p>Goldcrest Advisors - All rights reserved - <?php echo date("Y"); ?></p>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script>
window.onscroll = function() {
    var nav = document.getElementById('top-bar-outer');
    if ( window.pageYOffset > 100 ) {
        nav.classList.add("scrolled");
    } else {
        nav.classList.remove("scrolled");
    }
}
</script>
<script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
<script>
  var mySwiper = new Swiper ('.swiper-container', {
    // Optional parameters
    direction: 'vertical',
    loop: true,

    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },
  })
  </script>


<script>

(function($) {
$('#toggle').toggle( 
    function() {
        $('#popout').animate({ left: 0 }, 'slow', function() {
            $('#toggle').html('<img src="<?php echo get_template_directory_uri(); ?>/img/hamburger.png">');
        });
    }, 
    function() {
        $('#popout').animate({ left: -250 }, 'slow', function() {
            $('#toggle').html('<img src="<?php echo get_template_directory_uri(); ?>/img/hamburger.png">');
        });
    }
);
})(jQuery);
</script>
</body>
</html>
