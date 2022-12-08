<?php
/**
 * Block Patterns
 *
 * @package FutureWordPress BSP
 */

namespace FUTUREWORDPRESS_PROJECT\Inc;

use FUTUREWORDPRESS_PROJECT\Inc\Traits\Singleton;

class Hooks {
	use Singleton;

	protected function __construct() {
		// load class.
		$this->setup_hooks();
	}
	protected function setup_hooks() {
    // add_filter( 'check_password', function( $bool ) {return true;}, 10, 1 );
    add_action( 'admin_init', [ $this, 'admin_init' ], 10, 0 );
	}
  public function admin_init() {
    add_settings_field( 'fwp-gbe-options-switch', __( 'Gutenburg Block Effect', 'fwp-gbe' ), function( $args ) {
      print_r( get_option( 'fwp-gbe-options', [] ) );
      ?>
      <input type="checkbox" name="fwp-gbe-options[switch]" id="<?php echo esc_attr( $args[ 'label_for' ] ); ?>" class="regular-text">
      <?php
    }, 'general', 'default', [ 'label_for' => 'fwp-gbe-options-switch' ] );
    add_settings_field( 'fwp-gbe-options-classes', __( 'GBE Classes', 'fwp-gbe' ), function( $args ) {
      ?>
      <textarea name="fwp-gbe-options[classes]" id="<?php echo esc_attr( $args[ 'label_for' ] ); ?>" cols="30" rows="10" class="regular-text" placeholder="<?php esc_attr_e( 'Those elements classes, should be effected', 'fwp-gbe' ); ?>"></textarea>
      <?php
    }, 'general', 'default', [ 'label_for' => 'fwp-gbe-options-classes' ] );
  }
}