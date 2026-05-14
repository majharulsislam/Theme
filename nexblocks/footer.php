<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
	if ( isset( $GLOBALS['nexblocks_footer_manager'] ) ) {
		$GLOBALS['nexblocks_footer_manager']->render();
	}
?>

</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
