<?php

namespace QuadLayers\QLWAPP\Controllers;

use QuadLayers\QLWAPP\Models\WooCommerce_Archives as Models_WooCommerceArchives;

class WooCommerce_Archives {

	protected static $instance;

	private function __construct() {
		add_action( 'wp', array( $this, 'woocommerce_archives_init' ) );
	}

	public function woocommerce_archives_init() {
		if ( ! class_exists( 'WooCommerce' ) ) {
			return;
		}

		$woocommerce_archives = Models_WooCommerceArchives::instance()->get();
		$position             = (string) $woocommerce_archives['position'];
		$position_priority    = (int) $woocommerce_archives['position_priority'];
		$devices              = (string) $woocommerce_archives['devices'];

		if ( 'none' === $position || 'hide' === $devices ) {
			return;
		}

		// Check if we should show in shop page
		if ( 'yes' === $woocommerce_archives['show_in_shop'] && is_shop() ) {
			add_action( $position, array( $this, 'archive_button' ), $position_priority );
			return;
		}

		// Check if we should show in category archive
		if ( 'yes' === $woocommerce_archives['show_in_category'] && is_product_category() ) {
			add_action( $position, array( $this, 'archive_button' ), $position_priority );
			return;
		}

		// Check if we should show in tag archive
		if ( 'yes' === $woocommerce_archives['show_in_tag'] && is_product_tag() ) {
			add_action( $position, array( $this, 'archive_button' ), $position_priority );
			return;
		}

		// Check if we should show in brand archive (for plugins that support it)
		if ( 'yes' === $woocommerce_archives['show_in_brand'] && ( is_tax( 'product_brand' ) || ( function_exists( 'is_product_brand' ) && is_product_brand() ) ) ) {
			add_action( $position, array( $this, 'archive_button' ), $position_priority );
			return;
		}
	}

	public function archive_button() {
		WooCommerce::render_button( Models_WooCommerceArchives::instance()->get() );
	}

	public static function instance() {
		if ( ! isset( self::$instance ) ) {
			self::$instance = new self();
		}
		return self::$instance;
	}
}
