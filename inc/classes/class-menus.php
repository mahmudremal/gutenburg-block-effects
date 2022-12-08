<?php
/**
 * Register Menus
 *
 * @package FutureWordPress GBE
 */

namespace FUTUREWORDPRESS_PROJECT\Inc;

use FUTUREWORDPRESS_PROJECT\Inc\Traits\Singleton;

class Menus {

	use Singleton;
	private $getIcons = null;

	protected function __construct() {
		// load class.
		$this->setup_hooks();
	}
	protected function setup_hooks() {
		add_filter( 'futurewordpress/project/settings/fields', [ $this, 'menus' ], 10, 1 );
	}
	public function menus( $args ) {
    // get_fwp_option( 'key', 'default' )
		// is_FwpActive( 'key' )
		$args = [];
		$args['standard'] = [
			'title'					=> __( 'General', 'fwp-gbe' ),
			'description'			=> __( 'Setup your Gutenberg Block effects and all of it\'s customization is here.', 'fwp-gbe' ),
			'fields'				=> [
				[
					'id' 			=> 'fwp_gbe_enabled',
					'label'					=> __( 'Enable Effect', 'fwp-gbe' ),
					'description'			=> __( 'Mark to enable Block Effect globally.', 'fwp-gbe' ),
					'type'			=> 'checkbox',
					'default'		=> true
				],
				// [
				// 	'id' 			=> 'fwp_gbe_metabox',
				// 	'label'					=> __( 'MetaBox Widget', 'fwp-gbe' ),
				// 	'description'			=> __( 'Enable meta box widget on single page / post edit screen.', 'fwp-gbe' ),
				// 	'type'			=> 'checkbox',
				// 	'default'		=> true
				// ],
				[
					'id' 			=> 'fwp_gbe_animation',
					'label'			=> __( 'Default Animation', 'fwp-gbe' ),
					'description'	=> __( 'Set Default animation on Gutenberg Block Effect.', 'fwp-gbe' ),
					'type'			=> 'select',
					'default'		=> 'fade-in',
					'options'		=> [
						'fade-in'				=> __( 'Fade In', 'fwp-gbe' ),
						'fade-bottom'		=> __( 'Fade Bottom', 'fwp-gbe' ),
						'fade-left'			=> __( 'Fade Left', 'fwp-gbe' ),
						'fade-right'		=> __( 'Fade Right', 'fwp-gbe' )
					]
				],
				[
					'id' 			=> 'fwp_gbe_animduration',
					'label'					=> __( 'Animation Duration', 'fwp-gbe' ),
					'description'			=> __( 'Animation Effect duration. Better to let it less then 1.5 second.', 'fwp-gbe' ),
					'type'			=> 'text',
					'default'		=> '.7'
				],
				[
					'id' 			=> 'fwp_gbe_animdistance',
					'label'					=> __( 'Animation Distance', 'fwp-gbe' ),
					'description'			=> __( 'Distence from where element should be animated. In pixel formate.', 'fwp-gbe' ),
					'type'			=> 'text',
					'default'		=> '30px'
				],
				[
					'id' 			=> 'fwp_gbe_effectedclasses',
					'label'			=> __( 'CSS Selectors', 'fwp-gbe' ),
					'description'	=> __( 'Here you\'ve to suggest those widgets classes to apply block effect. Every single selectors should be seperated with comma.', 'fwp-gbe' ),
					'type'			=> 'textarea',
					'default'		=> '.wp-block-image, .wp-block-cover, .wp-block-stackable-heading, .wp-block-stackable-text, .wp-block-stackable-button, .wp-block-stackable-image, .stk-block-content'
				],
				// [
				// 	'id' 			=> 'fwp_gbe_repeatoneach',
				// 	'label'					=> __( 'Repeat Animation', 'fwp-gbe' ),
				// 	'description'			=> __( 'Repeat animation on every scroll down function.', 'fwp-gbe' ),
				// 	'type'			=> 'checkbox',
				// 	'default'		=> false
				// ],
			]
		];
		return $args;
	}

}
