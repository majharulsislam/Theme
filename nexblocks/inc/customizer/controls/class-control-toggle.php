<?php
/**
 * Toggle / Switch Control
 *
 * @package NexBlocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class NexBlocks_Control_Toggle
 */
class NexBlocks_Control_Toggle extends WP_Customize_Control {

	/**
	 * Control type identifier.
	 *
	 * @var string
	 */
	public $type = 'nexblocks-toggle';

	/**
	 * Render the control.
	 */
	public function render_content() {
		$input_id = 'nexblocks-toggle-' . esc_attr( $this->id );
		?>
		<div class="nexblocks-toggle-control">
			<label for="<?php echo esc_attr( $input_id ); ?>" class="nexblocks-toggle-label">
				<span class="nexblocks-toggle-text"><?php echo esc_html( $this->label ); ?></span>
				<span class="nexblocks-toggle-switch" aria-hidden="true"></span>
			</label>
			<input
				type="checkbox"
				id="<?php echo esc_attr( $input_id ); ?>"
				class="nexblocks-toggle-input"
				value="1"
				<?php $this->link(); ?>
				<?php checked( $this->value(), true ); ?>
			/>
			<?php if ( $this->description ) : ?>
				<p class="description"><?php echo esc_html( $this->description ); ?></p>
			<?php endif; ?>
		</div>

		<style>
			.nexblocks-toggle-control { display:flex; flex-direction:column; gap:.25rem; }
			.nexblocks-toggle-label { display:flex; justify-content:space-between; align-items:center; cursor:pointer; }
			.nexblocks-toggle-input { position:absolute; opacity:0; width:0; height:0; }
			.nexblocks-toggle-switch { position:relative; width:40px; height:22px; background:#ccc; border-radius:11px; transition:background .2s; flex-shrink:0; }
			.nexblocks-toggle-switch::after { content:''; position:absolute; top:2px; left:2px; width:18px; height:18px; background:#fff; border-radius:50%; transition:transform .2s; box-shadow:0 1px 3px rgba(0,0,0,.3); }
			.nexblocks-toggle-input:checked + .nexblocks-toggle-label .nexblocks-toggle-switch,
			.nexblocks-toggle-input:checked ~ .nexblocks-toggle-label .nexblocks-toggle-switch { background:#2563eb; }
			.nexblocks-toggle-input:checked ~ label .nexblocks-toggle-switch::after,
			.nexblocks-toggle-input:checked + label .nexblocks-toggle-switch::after { transform:translateX(18px); }
		</style>
		<?php
	}
}
