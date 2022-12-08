<?php
/**
 * Enqueue theme assets
 *
 * @package FutureWordPress BSP
 */

namespace FUTUREWORDPRESS_PROJECT\Inc;

use FUTUREWORDPRESS_PROJECT\Inc\Traits\Singleton;

class Assets {
	use Singleton;

	protected function __construct() {

		// load class.
		$this->setup_hooks();
	}

	protected function setup_hooks() {
		add_action( 'wp_enqueue_scripts', [ $this, 'register_styles' ] );
		// add_action( 'admin_enqueue_scripts', [ $this, 'register_admin_styles' ] );
		add_action( 'wp_enqueue_scripts', [ $this, 'register_scripts' ] );
		// print_r( FUTUREWORDPRESS_PROJECT_OPTIONS );wp_die();
		add_action( 'wp_footer', [ $this, 'wp_footer' ] );
	}
	public function register_styles() {
		// Register styles.
		// wp_register_style( 'bootstrap-css', FUTUREWORDPRESS_PROJECT_BUILD_LIB_URI . '/css/bootstrap.min.css', [], false, 'all' );
		// wp_register_style( 'slick-css', FUTUREWORDPRESS_PROJECT_BUILD_LIB_URI . '/css/slick.css', [], false, 'all' );
		// wp_register_style( 'slick-theme-css', FUTUREWORDPRESS_PROJECT_BUILD_LIB_URI . '/css/slick-theme.css', ['slick-css'], false, 'all' );
		// wp_enqueue_style( 'fwp-gbe-frontend', FUTUREWORDPRESS_PROJECT_BUILD_CSS_URI . '/frontend.css', [], $this->filemtime( FUTUREWORDPRESS_PROJECT_BUILD_CSS_DIR_PATH . '/frontend.css' ), 'all' );
		// wp_register_style( 'frontend-base', FUTUREWORDPRESS_PROJECT_BUILD_LIB_URI . '/css/frontend-base.css', ['bootstrap-css'], $this->filemtime( FUTUREWORDPRESS_PROJECT_BUILD_LIB_PATH . '/css/frontend-base.css' ), 'all' );
		// wp_register_style( 'select2', 'https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css', [], false, 'all' );
		// wp_register_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css', [], false, 'all' );

		
		// wp_register_style( 'fullcalendar', 'https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css', [], false, 'all' );

		// Enqueue Styles.
		// wp_enqueue_style( 'bootstrap-css' );
		// wp_enqueue_style( 'slick-css' );
		// wp_enqueue_style( 'slick-theme-css' );

		// wp_enqueue_style( 'fullcalendar' );
		// wp_enqueue_style( 'fwp-gbe-frontend' );

		// wp_enqueue_style( 'font-awesome' );
		// wp_enqueue_style( 'frontend-base' );
		
		// wp_add_inline_style( 'fwp-gbe-inline-css', $this->renderCSS() );
	}
	public function register_scripts() {
		// Register scripts.
		// wp_register_script( 'slick-js', FUTUREWORDPRESS_PROJECT_BUILD_LIB_URI . '/js/slick.min.js', ['jquery'], false, true );
		// wp_register_script( 'single-js', FUTUREWORDPRESS_PROJECT_BUILD_JS_URI . '/single.js', ['jquery', 'slick-js'], $this->filemtime( FUTUREWORDPRESS_PROJECT_BUILD_JS_DIR_PATH . '/single.js' ), true );
		// wp_register_script( 'author-js', FUTUREWORDPRESS_PROJECT_BUILD_JS_URI . '/author.js', ['jquery'], $this->filemtime( FUTUREWORDPRESS_PROJECT_BUILD_JS_DIR_PATH . '/author.js' ), true );
		// wp_register_script( 'bootstrap-js', FUTUREWORDPRESS_PROJECT_BUILD_LIB_URI . '/js/bootstrap.min.js', ['jquery'], false, true );
		// wp_register_script( 'tailwindcss', 'https://cdn.tailwindcss.com', [], false, true );
		// wp_register_script( 'select2', 'https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js', [], false, true );
		// wp_register_script( 'ckeditor', 'https://cdn.ckeditor.com/ckeditor5/35.3.2/classic/ckeditor.js', [], false, true );
		// wp_register_script( 'data-table', 'https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js', [ 'jquery' ], false, true );

		
		// wp_register_script( 'fullcalendar', 'https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js', [ 'jquery' ], false, true );
		if( is_FwpActive( 'fwp_gbe_enabled' ) ) {
			wp_enqueue_script( 'fwp-gbe-frontend', FUTUREWORDPRESS_PROJECT_BUILD_JS_URI . '/frontend.js', [ 'jquery' ], $this->filemtime( FUTUREWORDPRESS_PROJECT_BUILD_JS_DIR_PATH . '/frontend.js' ), true );
		}
		// Enqueue Scripts.
		// wp_enqueue_script( 'fullcalendar' );

		// wp_enqueue_script( 'fwp-gbe-frontend' );
		
		// wp_enqueue_script( 'bootstrap-js' );
		// wp_enqueue_script( 'slick-js' );

		// If single post page
		// if ( is_single() ) {
		// 	wp_enqueue_script( 'single-js' );
		// }

		// If author archive page
		// if ( is_author() ) {
		// 	wp_enqueue_script( 'author-js' );
		// }
		// When an query Arguments detected
		// if ( isset( $_GET[ 'create-activity' ] ) ) {
		// 	wp_enqueue_script( 'ckeditor' );
		// }

		// get_fwp_option( 'candidate_cv_delete_confirm_txt', 'Are you sure you want to delete Your CV? This can\'t be undo.' ),
		wp_localize_script( 'fwp-gbe-frontend', 'siteConfig', [
			// 'ajaxUrl'						=> admin_url( 'admin-ajax.php' ),
			// 'ajax_nonce'				=> wp_create_nonce( 'fwp_gbe_ajax_post_nonce' ),
      'intClasses'				=> get_fwp_option( 'fwp_gbe_effectedclasses', '.wp-block-image, .wp-block-cover, .wp-block-stackable-heading, .wp-block-stackable-text, .wp-block-stackable-button, .wp-block-stackable-image, .stk-block-content' ),
      'willRepeat'				=> is_FwpActive( 'fwp_gbe_repeatoneach' ),
      // 'iScheduled'				=> is_FwpActive( 'fwp_gbe_enabled' ),
      // 'defaulTime'				=> get_fwp_option( 'fwp_gbe_defaultime', '12:00:00 AM' ),
      // 'hideSubmit'				=> is_FwpActive( 'fwp_gbe_hidepostnow' ),
      // 'confirmDelete'			=> __( 'Are you sure you want ot delete this activity post? Please click cancel to dismiss this request.', 'fwp-gbe' ),
			// 'onDragConfirm'			=> is_FwpActive( 'fwp_gbe_ondragconfirm' ),
			// 'confirmSwitch'			=> __( 'Are you sure about this change? Click on Cancel to dismiss.', 'fwp-gbe' )
		] );
	}
	public function register_admin_styles() {
    // if( ! is_admin() ) {return;}
		// wp_enqueue_style( 'buddypress-schedule-post-admin', FUTUREWORDPRESS_PROJECT_BUILD_CSS_URI . '/backend.css', [], $this->filemtime( FUTUREWORDPRESS_PROJECT_BUILD_CSS_DIR_PATH . '/backend.css' ), 'all' );
	}
  protected function filemtime( $file ) {
    return ( file_exists( $file ) && ! is_dir( $file ) ) ? filemtime( $file ) : rand( 0, 9999999 );
  }
	public function wp_footer() {
		if( ! is_FwpActive( 'fwp_gbe_enabled' ) ) {return;}
		?>
		<style id="fwp-gbe-inline-css"><?php echo $this->renderCSS(); ?></style>
		<?php
	}
	private function renderCSS() {
		$cssContent = '';$classes = get_fwp_option( 'fwp_gbe_effectedclasses', '.wp-block-image, .wp-block-cover, .wp-block-stackable-heading, .wp-block-stackable-text, .wp-block-stackable-button, .wp-block-stackable-image, .stk-block-content' );$classesSplit = explode( ',', $classes );$cssAnimation = get_fwp_option( 'fwp_gbe_animation', 'fade-in' );$cssAnimDuration = get_fwp_option( 'fwp_gbe_animduration', '.7' );$cssAnimDistance = get_fwp_option( 'fwp_gbe_animdistance', '30px' );
		$cssContent .= $classes .' {position: relative;' . ( ( $cssAnimation == 'fade-in' ) ? '' : 'transform: translateY(' . esc_attr( $cssAnimDistance ) . ');' ) . 'opacity: 0;transition: all 1s ease}';
		foreach( $classesSplit as $class ) {$cssContent .= $class . '.fwp-gbe-animationActive,';}
		$cssContent .= '.fwp-gbe .somerandomblocks.fwp-gbe-animationActive {transform: translateY(0);opacity: 1;animation: fwp-gbe-' . esc_attr( $cssAnimation ) . ' ' . esc_attr( $cssAnimDuration ) . 's ease-in}';
		$cssContent .= '@keyframes fwp-gbe-fade-in {0% {opacity: 0;}100% {opacity: 1;}}@keyframes fwp-gbe-fade-bottom{0%{transform:translateY(' . esc_attr( $cssAnimDistance ) . ');opacity:0}to{transform:translateY(0);opacity:1}}@keyframes fwp-gbe-fade-left{0%{transform:translateX(-' . esc_attr( $cssAnimDistance ) . ');opacity:0}to{transform:translateX(0);opacity:1}}@keyframes fwp-gbe-fade-right{0%{transform:translateX(' . esc_attr( $cssAnimDistance ) . ');opacity:0}to{transform:translateX(0);opacity:1}}';
		return $cssContent;
	}

}
