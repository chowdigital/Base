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

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		 <div id="google-reviews"></div>
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
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
 <script>
jQuery(document).ready(function($) {
  if ($("#google-reviews").length == 0) {
    return
  }
  // Find a placeID via https://developers.google.com/places/place-id
  $("#google-reviews").googlePlaces({
    placeId: 'ChIJJ7Vh17MddkgRf6OfLqsPA7k',
    // the following params are optional (default values)
    header: "<h2>Latest Google Reviews</h2>", // html/text over Reviews
    footer: '', // html/text under Reviews block
    maxRows: 3, // max 5 rows of reviews to be displayed
    minRating: 5, // minimum rating of reviews to be displayed
  
    textBreakLength: "90", // length before a review box is set to max width
    shortenNames: true, // example: "Max Mustermann" -> "Max M."",
    moreReviewsButtonUrl: 'https://www.google.com/search?client=firefox-b-d&q=lost+boys+pizza#lrd=0x48761b374ca9695f:0x9e9cf7ac30c9cc68,1,,,', // url to Google Place reviews popup
    moreReviewsButtonLabel: 'Show More Reviews',
    writeReviewButtonUrl: 'https://www.google.com/search?client=firefox-b-d&q=lost+boys+pizza#lrd=0x48761b374ca9695f:0x9e9cf7ac30c9cc68,3,,,', // url to Google Place write review popup
    writeReviewButtonLabel: 'Write New Review',
    showProfilePicture: true
  });
});
</script>
</body>
</html>
