<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cloudsdale_1.0
 */

?>
		 <div id="google-reviews"></div>
		 <script>
jQuery(document).ready(function($) {
   $("#google-reviews").googlePlaces({
  
   });

  

});
</script>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'base-theme' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'base-theme' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'base-theme' ), 'base-theme', '<a href="http://seancloudsdale.com">Sean Cloudsdale</a>' );
				?>
		</div><!-- .site-info -->

	<div class="no-smoothState">
		<?php echo do_shortcode( '[contact-form-7 id="7" title="Contact Form 1"]' ); ?>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>



</body>
</html>
