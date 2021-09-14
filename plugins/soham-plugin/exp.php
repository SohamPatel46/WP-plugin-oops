<?php

// =================================================
// Simple hook -> init
// =================================================

// function custom_callback_function() {
// add your custom code here to do something
// echo 'I will be fired on WordPress initialization -soham patel';
// }

// add_action( 'init', 'custom_callback_function' );

// =================================================
// Add Filter Demo
// =================================================
// add_filter( 'render_block', function( $block ){
// return '<img src="https://placekitten.com/' . rand( 200, 400 ) . '" />';
// });


// =================================================
// Send mail
// =================================================

// function post_published_notification( $post_id, $post ) {
// $author = $post->post_author; /* Post author ID. */
// $name = get_the_author_meta( 'display_name', $author );
// $email = 'get_the_author_meta( 'user_email', $author );'
// $title = $post->post_title;
// $permalink = get_permalink( $post_id );
// $edit = get_edit_post_link( $post_id, '' );
// $to[] = sprintf( '%s <%s>', $name, $email );
// $subject = sprintf( 'Published: %s', $title );
// $message = sprintf ('Congratulations, %s! Your article "%s" has been published.' . "\n\n", $name, $title );
// $message .= sprintf( 'View: %s', $permalink );
// $headers[] = '';
// wp_mail( $to, $subject, $message, $headers );
// }
// add_action( 'publish_post', 'post_published_notification', 10, 2 );
// =================================================
// Basic Hooks
// =================================================

function cust_activate() {
	echo 'Sohams Plugin is ready to use successfully by admin  -soham patel';
}
register_activation_hook( __FILE__, 'cust_activate' );

function cust_deactivate() {
	echo 'Sohams Plugin is done deactivated successfully by admin -soham patel';
}
register_deactivation_hook( __FILE__, 'cust_deactivate' );





// See logs to understand
// add_action(
// 'all',
// function ( $hook ) {
// error_log( $hook );
// }
// );