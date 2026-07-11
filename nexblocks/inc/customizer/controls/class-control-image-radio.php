<?php
/**
 * Image Radio Control — Layout picker with thumbnails
 *
 * @package NexBlocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class NexBlocks_Control_Image_Radio
 */
class NexBlocks_Control_Image_Radio extends WP_Customize_Control {

	/**
	 * Control type identifier.
	 *
	 * @var string
	 */
	public $type = 'nexblocks-image-radio';

	/**
	 * Render the control in the customizer panel.
	 */
	public function render_content() {
		if ( empty( $this->choices ) ) {
			return;
		}
		?>
		<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
		<?php if ( $this->description ) : ?>
			<span class="description customize-control-description"><?php echo esc_html( $this->description ); ?></span>
		<?php endif; ?>

		<div class="nexblocks-image-radio-control">
			<?php foreach ( $this->choices as $value => $data ) : ?>
				<?php
				$label = is_array( $data ) ? ( $data['label'] ?? $value ) : $data;
				$image = is_array( $data ) ? ( $data['image'] ?? '' ) : '';
				$id    = 'nexblocks-image-radio-' . esc_attr( $this->id ) . '-' . esc_attr( $value );
				?>
				<label
					for="<?php echo esc_attr( $id ); ?>"
					class="nexblocks-image-radio-item<?php echo ( $this->value() === $value ) ? ' is-selected' : ''; ?>"
					title="<?php echo esc_attr( $label ); ?>"
				>
					<input
						type="radio"
						id="<?php echo esc_attr( $id ); ?>"
						name="<?php echo esc_attr( $this->id ); ?>"
						value="<?php echo esc_attr( $value ); ?>"
						<?php $this->link(); ?>
						<?php checked( $this->value(), $value ); ?>
					/>
					<?php if ( $image ) : ?>
						<img src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_attr( $label ); ?>" loading="lazy" />
					<?php else : ?>
						<span class="nexblocks-image-radio-placeholder"><?php echo esc_html( $label ); ?></span>
					<?php endif; ?>
					<span class="nexblocks-image-radio-label"><?php echo esc_html( $label ); ?></span>
				</label>
			<?php endforeach; ?>
		</div>

		<style>
			.nexblocks-image-radio-control { display: grid; grid-template-columns: repeat(auto-fill,minmax(120px,1fr)); gap:.75rem; margin-top:.5rem; }
			.nexblocks-image-radio-item { display:flex; flex-direction:column; align-items:center; gap:.25rem; cursor:pointer; border:2px solid #ddd; border-radius:4px; padding:.375rem; transition:border-color .2s; }
			.nexblocks-image-radio-item:hover { border-color:#2563eb; }
			.nexblocks-image-radio-item.is-selected { border-color:#2563eb; background:#eff6ff; }
			.nexblocks-image-radio-item input { position:absolute; opacity:0; width:0; height:0; }
			.nexblocks-image-radio-item img { width:100%; height:70px; object-fit:cover; border-radius:2px; display:block; }
			.nexblocks-image-radio-placeholder { width:100%; height:70px; background:#f1f5f9; display:flex; align-items:center; justify-content:center; border-radius:2px; font-size:.75rem; color:#64748b; }
			.nexblocks-image-radio-label { font-size:.75rem; color:#374151; text-align:center; }
		</style>
		<?php
	}
}
