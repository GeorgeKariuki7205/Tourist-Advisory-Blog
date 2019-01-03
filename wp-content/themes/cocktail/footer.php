<?php
/**
 * The template for displaying the footer.
 *
 * @package Theme Freesia
 * @subpackage Cocktail
 * @since Cocktail 1.0
 */

if( is_front_page() ) {

	do_action('cocktail_display_footer_frontpage_posts');

}

$cocktail_settings = cocktail_get_theme_options(); ?>
</div><!-- end #content -->
		<!-- Footer Start ============================================= -->
		<footer id="colophon" class="site-footer">
		<?php
		 if ( is_front_page() && is_home() ) {
			if ((function_exists('display_instagram')) && $cocktail_settings['cocktail_instagram_feed_display'] ==0){
				echo do_shortcode('[instagram-feed]');
			}// Default homepage
		} elseif ( is_front_page()){
			if ((function_exists('display_instagram')) && $cocktail_settings['cocktail_instagram_feed_display'] ==0){
				echo do_shortcode('[instagram-feed]');
			}//Static homepage
		} else {
		//silence is golden
		}

		do_action('cocktail_footer_columns'); ?>

			<!-- Site Information ============================================= -->
			<div class="site-info"  <?php if($cocktail_settings['cocktail_img-upload-footer-image'] !=''){?>style="background-image:url('<?php echo esc_url($cocktail_settings['cocktail_img-upload-footer-image']); ?>');" <?php } ?>>
				<div class="wrap">
						<a class="elementor-icon elementor-social-icon elementor-social-icon-facebook" href="" target="_blank">
					<i class="fa fa-facebook"></i>
				</a>
							<a class="elementor-icon elementor-social-icon elementor-social-icon-twitter" href="" target="_blank">
					<i class="fa fa-twitter"></i>
				</a>
							<a class="elementor-icon elementor-social-icon elementor-social-icon-google-plus" href="" target="_blank">
					<i class="fa fa-google-plus"></i>
				</a>
							<a class="elementor-icon elementor-social-icon elementor-social-icon-wordpress" href="" target="_blank">
					<i class="fa fa-wordpress"></i>
				</a>
					<a class="fa fa-linkedin" href="" target="_blank">
					<i class="fa fa-wordpress"></i>
				</a>
					<?php
						if($cocktail_settings['cocktail_buttom_social_icons'] == 0):
							do_action('cocktail_social_links');
						endif;
					?>
					<div class="copyright">
					<?php
					 
					 if ( is_active_sidebar( 'cocktail_footer_options' ) ) :
						dynamic_sidebar( 'cocktail_footer_options' );
					else: ?>
						<a title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" target="_blank" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo get_bloginfo( 'name', 'display' ); ?></a> | 
									<?php esc_html_e('Designed by:','george Kariuki'); ?> <a title="<?php echo esc_attr__( 'Theme Freesia', 'cocktail' ); ?>" target="_blank" href="<?php echo esc_url( 'http://jeorgeinc.tk' ); ?>"> |
									<?php  date_i18n(__('Y','cocktail')) ; ?> <a target="_blank" href="<?php echo esc_url( 'grrhbvhnb' );?>"><?php esc_html_e('George K','Kariuki'); ?></a> | <?php echo '&copy; ' . esc_attr__('Copyright All right reserved 2018','cocktail'); ?>
						<?php
							if ( function_exists( 'the_privacy_policy_link' ) ) { 
								the_privacy_policy_link( ' | ', '<span role="separator" aria-hidden="true"></span>' );
							}
							?>
					<?php endif; ?>
					
					</div><!-- end .copyright -->
					<div style="clear:both;"></div>
				</div> <!-- end .wrap -->
			</div> <!-- end .site-info -->
			<?php
				$disable_scroll = $cocktail_settings['cocktail_scroll'];
				if($disable_scroll == 0):?>
					<a class="go-to-top">
						<span class="icon-bg"></span>
							 <span class="back-to-top-text"><?php _e('Top','cocktail'); ?></span>
							<i class="fa fa-angle-up back-to-top-icon"></i>
					</a>
			<?php endif; ?>
			<div class="page-overlay"></div>
		</footer> <!-- end #colophon -->
	</div><!-- end .site-content-contain -->
</div><!-- end #page -->
<?php wp_footer(); ?>
</body>
</html>