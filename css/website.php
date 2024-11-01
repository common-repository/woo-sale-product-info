<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<style>
.product.sale .onsale {
	background: <?php echo esc_html( $this->settings->{$this->settings_enum->background_color} ) ?>;
	color: <?php echo esc_html( $this->settings->{$this->settings_enum->color} ) ?>;
	font-weight: <?php echo esc_html( $this->settings->{$this->settings_enum->font_weight} ) ?>;
	text-transform: <?php echo esc_html( $this->settings->{$this->settings_enum->text_transform} ) ?>;
	text-align: center;
	border-radius: 25px;
	border: none;
	padding: 4px 10px;
	display: inline-block;
}
</style>
