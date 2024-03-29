<?php
/**
 * Render slider page file.
 *
 * @package WPBFSlideshow
 */

 // Get the saved image IDs.
 $get_image_ids = get_option( 'wpbf_slideshow_image_ids', array() );
 $image_ids     = array();

if ( ! empty( $get_image_ids ) ) {

	?>

<!-- Slider main container -->
<div class="swiper wpbf-swiper-slider">

	<!-- Additional required wrapper -->
	<div class="swiper-wrapper">

	   <?php

		// Get the saved image IDs.
		$image_ids = explode( ',', get_option( 'wpbf_slideshow_image_ids', array() ) );

		// Loop through each saved image ID and display them.
		foreach ( $image_ids as $image_id ) {

			$image_url = wp_get_attachment_image_url( $image_id, 'full' );

			if ( $image_url ) {

				?>

				<div class="swiper-slide">
					<img src="<?php echo esc_url( $image_url ); ?>" loading="lazy">
					<div class="swiper-lazy-preloader"></div>
				</div>

				<?php

			}
		}

		?>
	</div>
	<!-- If we need pagination -->
	<div class="swiper-pagination"></div>

	<!-- If we need navigation buttons -->
	<div class="swiper-button-prev"></div>
	<div class="swiper-button-next"></div>
</div>

	<?php
}
