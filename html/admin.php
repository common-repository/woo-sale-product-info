<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<div class="wrap" id="motpr355_woo_sale_product_info">

	<h1>
		<?php _e( 'Sale product info', 'woo-sale-product-info' ) ?>
	</h1>

	<h3><?php _e( 'Customize WooCommerce products "Sale" tag.', 'woo-sale-product-info' ) ?></h3>

	<noscript>
		<div class="notice notice-warning is-dismissible">
			<p>
				<?php _e( 'Please activate JavaScript to edit the configuration.', 'woo-sale-product-info' ) ?>
			</p>
		</div>
	</noscript>

	<?php if ( $this->configuration_saved ) { ?>
	<div class="notice notice-success is-dismissible">
		<p>
			<?php _e( 'Configuration saved.', 'woo-sale-product-info' ) ?>
		</p>
	</div>
	<?php } ?>

	<form autocomplete="off" method="POST" action="">
		<p>
			<span>
				<?php _e( 'Activate functionality:', 'woo-sale-product-info' ) ?>
			</span>
			<span>
				<label>
					<input type="radio"
						   name="<?php echo $this->settings_enum->activation ?>"
						   value="<?php echo $this->activation_enum->actived ?>">
					<span>
						<?php _e( 'Activate', 'woo-sale-product-info' ) ?>
					</span>
					<span id="motpr355_woo_sale_product_info_activate_arrow">
						<span></span>
						<span></span>
					</span>
				</label>
				<label>
					<input type="radio"
						   name="<?php echo $this->settings_enum->activation ?>"
						   value="<?php echo $this->activation_enum->deactived ?>">
					<span>
						<?php _e( 'Deactivate', 'woo-sale-product-info' ) ?>
					</span>
				</label>
			</span>
		</p>
		<hr/>
		<p>
			<span>
				<?php _e( 'Background color:', 'woo-sale-product-info' ) ?>
			</span>
			<span>
				<input type="text"
					   class="input_color"
					   name="<?php echo $this->settings_enum->background_color ?>">
			</span>
		</p>
		<p>
			<span>
				<?php _e( 'Color:', 'woo-sale-product-info' ) ?>
			</span>
			<span>
				<input type="text"
					   class="input_color"
					   name="<?php echo $this->settings_enum->color ?>">
			</span>
		</p>
		<p>
			<span>
				<?php _e( 'Font weight:', 'woo-sale-product-info' ) ?>
			</span>
			<span>
				<label>
					<input type="radio"
						   name="<?php echo $this->settings_enum->font_weight ?>"
						   value="<?php echo $this->font_weight_enum->normal ?>">
					<span><?php _e( 'Normal', 'woo-sale-product-info' ) ?></span>
				</label>
				<label>
					<input type="radio"
						   name="<?php echo $this->settings_enum->font_weight ?>"
						   value="<?php echo $this->font_weight_enum->bold ?>">
					<span><?php _e( 'Bold', 'woo-sale-product-info' ) ?></span>
				</label>
			</span>
		</p>
		<p>
			<span>
				<?php _e( 'Text transform:', 'woo-sale-product-info' ) ?>
			</span>
			<span>
				<label>
					<input type="radio"
						   name="<?php echo $this->settings_enum->text_transform ?>"
						   value="<?php echo $this->text_transform_enum->none ?>">
					<span><?php _e( 'None', 'woo-sale-product-info' ) ?></span>
				</label>
				<label>
					<input type="radio"
						   name="<?php echo $this->settings_enum->text_transform ?>"
						   value="<?php echo $this->text_transform_enum->lowercase ?>">
					<span><?php _e( 'Lowercase', 'woo-sale-product-info' ) ?></span>
				</label>
				<label>
					<input type="radio"
						   name="<?php echo $this->settings_enum->text_transform ?>"
						   value="<?php echo $this->text_transform_enum->uppercase ?>">
					<span><?php _e( 'Uppercase', 'woo-sale-product-info' ) ?></span>
				</label>
			</span>
		</p>
		<hr/>
		<p>
			<span>
				<?php _e( 'Preview:', 'woo-sale-product-info' ) ?>
			</span>
			<span>
				<span class="motpr355_woo_sale_product_info_classic">
					<?php _e( 'Sale!', 'woocommerce' ) ?>
				</span>
			</span>
		</p>
		<hr/>
		<p>
			<?php wp_nonce_field( $this->settings->{$this->settings_enum->nonce}, 'nonce' ) ?>
			<input type="button"
				   class="button button-primary"
				   id="motpr355_woo_sale_product_info_submit"
				   value="<?php esc_attr_e( 'Save configuration', 'woo-sale-product-info' ) ?>">
		</p>
	</form>

</div>
