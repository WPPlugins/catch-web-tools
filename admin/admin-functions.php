<?php
/**
 * @package Admin
 */

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

/**
 * Enqueue admin scripts and styles
 */
function catchwebtools_admin_enqueue_scripts( $hook_suffix ) {
	$allowed_admin_hook_suffix = catchwebtools_admin_hook_suffix();

	if ( in_array( $hook_suffix, $allowed_admin_hook_suffix) ) {
		wp_enqueue_media();

		wp_enqueue_script( 'catchwebtools-plugin-options', CATCHWEBTOOLS_URL . 'admin/js/admin.min.js', array( 'jquery', 'wp-color-picker' ), '2013-10-05' );

		wp_enqueue_script( 'catchwebtools-equal-height', CATCHWEBTOOLS_URL . 'admin/js/equal_height.js', array( 'jquery' ) );

		//CSS Styles
		//Only add genericons CSS in Social Icons Page
		if( 'catch-web-tools_page_catch-web-tools-social-icons' == $hook_suffix ) {
			wp_enqueue_style( 'genericons', CATCHWEBTOOLS_URL . 'css/genericons.css', false, '3.4.1' );
		}

		wp_enqueue_style( 'catchwebtools-plugin-css', CATCHWEBTOOLS_URL . 'admin/css/admin.css', array( 'wp-color-picker', 'thickbox' ), '2013-10-05' );

		/**
		 * Admin Social Links
		 * use facebook and twitter scripts only on dashboard
		 */
		if( 'toplevel_page_catch-web-tools' == $hook_suffix ) {
			?>
		    <!-- Start Social scripts -->
		    <div id="fb-root"></div>
		    <script>(function(d, s, id) {
		      var js, fjs = d.getElementsByTagName(s)[0];
		      if (d.getElementById(id)) return;
		      js = d.createElement(s); js.id = id;
		      js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=276203972392824";
		      fjs.parentNode.insertBefore(js, fjs);
		    }(document, 'script', 'facebook-jssdk'));</script>
		    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		    <!-- End Social scripts -->
		<?php
		}
	}

	//Catch Updater Scripts and Style
	//Only add Catch Updater Scripts and Style to theme-install page
	if( 'theme-install.php' == $hook_suffix ) {
		wp_enqueue_script( 'catch-updater-admin-js', CATCHWEBTOOLS_URL . 'admin/js/catch-updater-admin.js');

		wp_enqueue_style( 'catch-updater-admin-css', CATCHWEBTOOLS_URL . 'admin/css/catch-updater-admin.css');
	}
}
add_action( 'admin_enqueue_scripts', 'catchwebtools_admin_enqueue_scripts' );

require_once( CATCHWEBTOOLS_PATH . 'admin/inc/core.php' );

require_once( CATCHWEBTOOLS_PATH . 'admin/inc/catch-ids.php' );

require_once( CATCHWEBTOOLS_PATH . 'admin/inc/social-icons.php' );

require_once( CATCHWEBTOOLS_PATH . 'to-top/to-top.php' );


//Get Catch Updater Status
$catchwebtools_catch_updater = catchwebtools_get_options( 'catchwebtools_catch_updater' );

if ( $catchwebtools_catch_updater['status'] ) {
	if ( is_admin() ) {
		require_once( CATCHWEBTOOLS_PATH . 'admin/catch-updater/inc/catch-updater-modify-installer.php' );
	}
	else {
		require_once( CATCHWEBTOOLS_PATH . 'admin/catch-updater/inc/catch-updater-show-maintenance-message.php' );
	}
}

//Get SEO and OG status
$catchwebtools_seo = catchwebtools_get_options( 'catchwebtools_seo' );
$catchwebtools_og = catchwebtools_get_options( 'catchwebtools_opengraph' );

/* Include metabox only if SEO or OG modules are activated. 
 * Otherwise it produced an error due to WP nonce 
 */
if ( ( $catchwebtools_seo['status'] || $catchwebtools_og['status'] ) && is_admin() ) {
	require_once( CATCHWEBTOOLS_PATH . 'admin/inc/metabox.php' );
}