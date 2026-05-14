<?php
/**
 * Customizer Sanitization Callbacks
 *
 * @package NexBlocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class NexBlocks_Sanitize
 */
class NexBlocks_Sanitize {

	/**
	 * Sanitize a hex color value.
	 *
	 * @param string $color Hex color string.
	 * @return string
	 */
	public static function hex_color( $color ) {
		if ( preg_match( '/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/', $color ) ) {
			return $color;
		}
		return '';
	}

	/**
	 * Sanitize a checkbox (boolean) value.
	 *
	 * @param bool $value Raw value.
	 * @return bool
	 */
	public static function checkbox( $value ) {
		return (bool) $value;
	}

	/**
	 * Sanitize a select value against an allowed list.
	 *
	 * @param string               $value   Input value.
	 * @param WP_Customize_Setting $setting Customizer setting object.
	 * @return string
	 */
	public static function select( $value, $setting ) {
		$choices = $setting->manager->get_control( $setting->id );
		$choices = $choices ? $choices->choices : array();

		return array_key_exists( $value, $choices ) ? $value : $setting->default;
	}

	/**
	 * Sanitize a positive integer.
	 *
	 * @param mixed $value Raw value.
	 * @return int
	 */
	public static function positive_int( $value ) {
		$value = absint( $value );
		return $value > 0 ? $value : 1;
	}

	/**
	 * Sanitize a text field.
	 *
	 * @param string $value Raw value.
	 * @return string
	 */
	public static function text( $value ) {
		return sanitize_text_field( $value );
	}

	/**
	 * Sanitize a URL.
	 *
	 * @param string $value Raw value.
	 * @return string
	 */
	public static function url( $value ) {
		return esc_url_raw( $value );
	}

	/**
	 * Sanitize an HTML textarea (allow limited tags).
	 *
	 * @param string $value Raw value.
	 * @return string
	 */
	public static function html( $value ) {
		return wp_kses_post( $value );
	}

	/**
	 * Sanitize a CSS dimension (px, em, rem, %).
	 *
	 * @param string $value Raw value.
	 * @return string
	 */
	public static function css_dimension( $value ) {
		if ( preg_match( '/^\d+(\.\d+)?(px|em|rem|%)$/', $value ) ) {
			return $value;
		}
		return '';
	}
}
