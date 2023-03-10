<?php
/**
 * Sample implementation of the Custom Header feature
 *
 * You can add an optional custom header image to header.php like so ...
 *
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package Fashion Estore
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses fashion_estore_header_style()
 */
function fashion_estore_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'fashion_estore_custom_header_args', array(
		'width'                  => 1400,
		'height'                 => 250,
		'flex-height'            => true,
		'flex-width'             => true,
		'header-text'						 => false,
		'wp-head-callback'       => 'fashion_estore_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'fashion_estore_custom_header_setup' );

if ( ! function_exists( 'fashion_estore_header_style' ) ) :
	/**
	 * Styles the header image and text displayed on the blog.
	 *
	 * @see fashion_estore_custom_header_setup().
	 */
	function fashion_estore_header_style() {
		$header_text_color = get_header_textcolor(); ?>

		<style type="text/css">
			<?php
				//Check if user has defined any header image.
				if ( get_header_image() ) :
			?>
				.socialmedia {
					background: url(<?php echo esc_url( get_header_image() ); ?>) no-repeat;
					background-position: center top;
				}
			<?php endif; ?>
		</style>

		<?php if ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) {
			return;
		}

		// If we get this far, we have custom styles. Let's do this.
		?>
		<style type="text/css">
		<?php
		// Has the text been hidden?
		if ( ! display_header_text() ) :
			?>
			.site-title,
			.site-description {
				position: absolute;
				clip: rect(1px, 1px, 1px, 1px);
			}
		<?php
		// If the user has set a custom color for the text use that.
		else :
			?>
			.site-title,
			.site-description {
				color: #<?php echo esc_attr( $header_text_color ); ?>;
			}
		<?php endif; ?>
		</style>
		<?php
	}
endif;
