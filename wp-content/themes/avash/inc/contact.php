<?php
add_action( 'wp_ajax_avash_contact', 'avash_contact_callback' );
add_action( 'wp_ajax_nopriv_avash_contact', 'avash_contact_callback' );
function avash_contact_callback() {
	global $wpdb;
	echo '<pre>';
	/*print_r($_POST['first_name']);*/
	echo '</pre>';
	wp_die();
}
?>