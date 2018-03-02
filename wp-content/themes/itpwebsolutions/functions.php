<?php
function add_googleanalytics() {
// Paste your Google Analytics code from Step 6 here
	include_once("analyticstracking.php");
}
add_action('wp_footer', 'add_googleanalytics');
?>
