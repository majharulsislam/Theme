<?php
/**
 * Visual Section Separator Control
 *
 * @package NexBlocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class NexBlocks_Control_Separator
 */
class NexBlocks_Control_Separator extends WP_Customize_Control {

	/**
	 * Control type identifier.
	 *
	 * @var string
	 */
	public $type = 'nexblocks-separator';

	/**
	 * Render the control.
	 */
	public function render_content() {
		?>
		<div class="nexblocks-separator-control">
			<?php if ( $this->label ) : ?>
				<span class="nexblocks-separator-label"><?php echo esc_html( $this->label ); ?></span>
			<?php endif; ?>
			<hr class="nexblocks-separator-line" />
		</div>

		<style>
			.nexblocks-separator-control { margin:.5rem 0; }
			.nexblocks-separator-label { display:block; font-size:.6875rem; font-weight:700; text-transform:uppercase; letter-spacing:.08em; color:#64748b; margin-bottom:.5rem; }
			.nexblocks-separator-line { border:0; border-top:1px solid #e2e8f0; margin:0; }
		</style>
		<?php
	}
}
