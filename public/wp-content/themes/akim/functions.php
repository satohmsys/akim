<?php
include( '_inc/variables.php');
include( '_inc/functions-setup.php');
include( '_inc/functions-cleanheader.php');
include( '_inc/functions-adminscreen.php');
include( '_inc/functions-scripts.php');
include( '_inc/functions-posttypes.php');
include( '_inc/functions-shortcodes.php');
include( '_inc/functions-aio-custom-meta.php');
include( '_inc/functions-langsetter.php');

/**
 * Twenty Seventeen only works in WordPress 4.7 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.7-alpha', '<' ) ) {
	require get_template_directory() . '/_inc/function/back-compat.php';
	return;
}



?>