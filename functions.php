/**
 * Enqueuing the scripts and css
 *
 * @param void
 *
 * @return void
 */
function se_wp_enqueue_scripts() {
	// Add custom js
	wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() . '/js/custom.js', array( 'jquery', 'elementor-frontend' ), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'se_wp_enqueue_scripts' );
