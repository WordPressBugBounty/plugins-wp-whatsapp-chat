<?php

namespace QuadLayers\QLWAPP\Controllers;

use QuadLayers\QLWAPP\WooCommerce as WooCommerce_Free;
use QuadLayers\QLWAPP\Models\WooCommerce as Models_WooCommerce;
use QuadLayers\QLWAPP\Models\Box as Models_Box;
use QuadLayers\QLWAPP\Models\Display as Models_Display;
use QuadLayers\QLWAPP\Models\Scheme as Models_Scheme;

class WooCommerce {

	protected static $instance;

	private function __construct() {
		remove_action( 'wp', array( WooCommerce_Free::instance(), 'woocommerce_init' ) );
		add_action( 'wp', array( $this, 'woocommerce_init' ) );
	}

	public function woocommerce_init() {
		if ( ! class_exists( 'WooCommerce' ) ) {
			return;
		}

		$woocommerce       = Models_WooCommerce::instance()->get();
		$position          = (string) $woocommerce['position'];
		$position_priority = (int) $woocommerce['position_priority'];

		$devices = (string) $woocommerce['devices'];

		if ( ! is_product() || 'none' === $position || 'hide' === $devices ) {
			return;
		}

		add_action( $position, array( $this, 'product_button' ), $position_priority );
	}

	public function product_button( $product ) {
		self::render_button( Models_WooCommerce::instance()->get() );
	}

	/**
	 * Prints the container the frontend app mounts a WooCommerce button on.
	 *
	 * Shared by the product and archive buttons.
	 *
	 * @param array $button WooCommerce button settings, with the product placeholders already replaced.
	 */
	public static function render_button( array $button ) {

		$display = Models_Display::instance()->get();
		$box     = Models_Box::instance()->get();
		$scheme  = Models_Scheme::instance()->get();

		$style = Frontend::get_scheme_css_properties( $scheme );

		// The WooCommerce button carries its own contact data (type, phone,
		// username, group, message), so it is also the toggle's primary contact.
		$button  = htmlentities( wp_json_encode( $button ), ENT_QUOTES, 'UTF-8' );
		$display = htmlentities( wp_json_encode( $display ), ENT_QUOTES, 'UTF-8' );
		$box     = htmlentities( wp_json_encode( $box ), ENT_QUOTES, 'UTF-8' );

		// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		echo '<div class="qlwapp qlwapp--woocommerce" style="' . $style . '" data-primary-contact="' . $button . '" data-display="' . $display . '" data-button="' . $button . '" data-box="' . $box . '"></div>';
	}

	public static function instance() {
		if ( ! isset( self::$instance ) ) {
			self::$instance = new self();
		}
		return self::$instance;
	}
}
