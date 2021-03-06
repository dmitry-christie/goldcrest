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
			<div class="social social-desktop">
					<?php $social_link_linked = get_field('social_links_linked', 'options'); if(!empty($social_link_linked)) {  ?><a href="<?php the_field('social_links_linked', 'options');?>"><img src="<?php echo get_template_directory_uri(); ?>/images/footer-linked.png"></a><?php } ?>
					<?php $social_links_facebook = get_field('social_links-facebook', 'options'); if(!empty($social_links_facebook)) {  ?><a href="<?php the_field('social_links-facebook', 'options');?>"><img src="<?php echo get_template_directory_uri(); ?>/images/footer-fb.png"></a><?php } ?>
					<?php $social_links_instagram_url = get_field('social_links-instagram_url', 'options'); if(!empty($social_links_instagram_url)) {  ?><a href="<?php the_field('social_links-instagram_url', 'options');?>"><img src="<?php echo get_template_directory_uri(); ?>/images/footer-ig.png"> </a><?php } ?>
					<?php $social_links_twitter_url = get_field('social_links-twitter_url', 'options'); if(!empty($social_links_twitter_url)) {  ?><a href="<?php the_field('social_links-twitter_url', 'options');?>"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-twitter-goldcrest.png"></a><?php } ?>

			</div>
		</div>
		<hr class="container">
		<div class="copyright-container container">
      		<p>
			  <span class="company_name">Goldcrest Advisors </span>- All rights reserved - 2019 - <?php echo date("Y"); ?>
			</p>
			<div id="footer-whatsapp" class="footer-mobile-whatsapp">
				<a target="_blank" href="<?php the_field('whats_app-url', 'options'); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/img/ICON-WHATSAPP.png">
				<span><?php the_field('whats_app-text', 'options'); ?></span>
			</a>
		</div>

      <div class="social social-mobile">
					<?php $social_link_linked = get_field('social_links_linked', 'options'); if(!empty($social_link_linked)) {  ?><a href="<?php the_field('social_links_linked', 'options');?>"><img src="<?php echo get_template_directory_uri(); ?>/images/footer-linked.png"></a><?php } ?>
					<?php $social_links_facebook = get_field('social_links-facebook', 'options'); if(!empty($social_links_facebook)) {  ?><a href="<?php the_field('social_links-facebook', 'options');?>"><img src="<?php echo get_template_directory_uri(); ?>/images/footer-fb.png"></a><?php } ?>
					<?php $social_links_instagram_url = get_field('social_links-instagram_url', 'options'); if(!empty($social_links_instagram_url)) {  ?><a href="<?php the_field('social_links-instagram_url', 'options');?>"><img src="<?php echo get_template_directory_uri(); ?>/images/footer-ig.png"> </a><?php } ?>
					<?php $social_links_twitter_url = get_field('social_links-twitter_url', 'options'); if(!empty($social_links_twitter_url)) {  ?><a href="<?php the_field('social_links-twitter_url', 'options');?>"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-twitter-goldcrest.png"></a><?php } ?>

			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->




<style>
.cookieconsent a {
  color: white;
  text-decoration: underline;
}

.cookieconsent .button {
  background: rgba(210,168,0,1);
  padding: 5px;
  text-decoration: none;
  margin-left: 10px;
}
</style>

<?php if(ICL_LANGUAGE_CODE=='en'): ?>
                     <div class="cookieconsent" id="cookieconsent" style="position:fixed;padding:20px;left:0;bottom:0;background-color:#e0c575;color:#FFF;text-align:center;width:100%;z-index:9999999; display: none;">
			We use cookies to ensure that we give you the best experience on our website. Our <a href="https://portugalbuyersagent.com/terms-and-conditions/">Terms and Coditions</a> 
			<a href="#" id="consent_button" class="button" onclick="event.preventDefault(); acceptConsent();">I Agree</a>
		</div>

<?php elseif(ICL_LANGUAGE_CODE=='pt-pt'): ?>
                        <div class="cookieconsent" id="cookieconsent" style="position:fixed;padding:20px;left:0;bottom:0;background-color:#e0c575;color:#FFF;text-align:center;width:100%;z-index:9999999; display: none;">
						Nós utilizamos cookies para garantir uma melhor experiência no site. Nossos 
 <a href="https://portugalbuyersagent.com/pt-pt/terms-and-conditions-pt/">Termos e Condições</a> 
			<a href="#" id="consent_button" class="button" onclick="event.preventDefault(); acceptConsent();" style="color: white !important">Eu concordo</a>
		</div>
<?php endif; ?>
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
<script src="<?php echo get_template_directory_uri(); ?>/js/swiper.js"></script>
<script>

var menu = ['Lisboa', 'Porto',  'Algarve', 'Centro', 'Alentejo'];

  var mySwiper = new Swiper ('.swiper-container', {
    // Optional parameters
    direction: 'vertical',
    loop: true,

    // If we need pagination
    pagination: {
      el: '.pagination-map, .pagination-menu',
			clickable: true,
        renderBullet: function (index, className) {
          return '<span class="' + className + ' ' + (menu[index]) + '">' + (menu[index]) + '</span>';
        },
    },

    
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
			if (!localStorage.getItem('cookieconsent')) {
	
			document.querySelector('.cookieconsent').style.display = 'block';
		
		
	}
			
			var x = document.getElementById("consent_button");
			
			function acceptConsent() {
				
			
			document.querySelector('.cookieconsent').style.display = 'none';
			localStorage.setItem('cookieconsent', true);
				
			}
			
			



</script>


</body>
</html>
