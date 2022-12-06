<?php
/**
 * Custom template tags for the theme.
 *
 * @package FutureWordPress BSP
 */

if( ! function_exists( 'is_FwpActive' ) ) {
  function is_FwpActive( $opt ) {
    return ( isset( FUTUREWORDPRESS_PROJECT_OPTIONS[ $opt ] ) && FUTUREWORDPRESS_PROJECT_OPTIONS[ $opt ] == 'on' );
  }
}
if( ! function_exists( 'get_fwp_option' ) ) {
  function get_fwp_option( $opt, $def = false ) {
    return isset( FUTUREWORDPRESS_PROJECT_OPTIONS[ $opt ] ) ? FUTUREWORDPRESS_PROJECT_OPTIONS[ $opt ] : $def;
  }
}