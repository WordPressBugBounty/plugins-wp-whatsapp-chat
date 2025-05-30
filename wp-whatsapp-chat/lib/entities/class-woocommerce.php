<?php
namespace QuadLayers\QLWAPP\Entities;

use QuadLayers\WP_Orm\Entity\SingleEntity;

class WooCommerce extends SingleEntity {
	public $layout            = 'button';
	public $box               = 'no';
	public $position          = 'none';
	public $text              = '';
	public $message           = '';
	public $icon              = 'qlwapp-whatsapp-icon';
	public $type              = 'phone';
	public $phone             = QLWAPP_PHONE_NUMBER;
	public $group             = QLWAPP_GROUP_LINK;
	public $developer         = 'no';
	public $rounded           = 'yes';
	public $timefrom          = '00:00';
	public $timeto            = '00:00';
	public $timedays          = array();
	public $timezone          = '';
	public $visibility        = 'readonly';
	public $animation_name    = '';
	public $animation_delay   = '';
	public $position_priority = 10;

	public function __construct() {
		$this->text     = esc_html__( 'How can I help you?', 'wp-whatsapp-chat' );
		$this->message  = sprintf( esc_html__( 'Hello! I\'m testing the %1$s plugin %2$s', 'wp-whatsapp-chat' ), QLWAPP_PLUGIN_NAME, QLWAPP_LANDING_URL );
		$this->timezone = qlwapp_get_timezone_current();
	}
}
