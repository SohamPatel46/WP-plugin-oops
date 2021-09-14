<?php

function sp_custom_box() {
	// $screens = [ 'post', 'wporg_cpt' ];
	// foreach ( $screens as $screen ) {
		add_meta_box(
			'sp_box_id',                 // Unique ID
			'Basic',      // Box title
			'basic_ui',  // Content callback, must be of type callable
			// $screen                            // Post type.
			'sp-movie'
		);
	// }
}
add_action( 'add_meta_boxes', 'sp_custom_box' );

function basic_ui( $post ) {
	$value  = get_post_meta( $post->ID, 'sp_rating', true );
	$value1 = get_post_meta( $post->ID, 'sp_runtime', true );

	?>

	<div>
		<label for="rating_field">Movie Rating (On a scale of 5):</label>
		<select name="rating_field" id="rating_field" class="postbox">
			<option value="">Select rating...</option>
			<option value="1" <?php selected( $value, '1' ); ?>>1</option>
			<option value="2" <?php selected( $value, '2' ); ?>>2</option>
			<option value="3" <?php selected( $value, '3' ); ?>>3</option>
			<option value="4" <?php selected( $value, '4' ); ?>>4</option>
			<option value="5" <?php selected( $value, '5' ); ?>>5</option>
		</select>
	</div>

	<div>
		<label for="runtime_field">Run time</label>
		<input type="text" name="runtime_field" id="runtime_field" value="<?php echo $value1; ?>">
	</div>

	<?php
}

function save_postdata( $post_id ) {
	if ( array_key_exists( 'rating_field', $_POST ) ) {
		update_post_meta(
			$post_id,
			'sp_rating',
			$_POST['rating_field']
		);
	}

	if ( array_key_exists( 'runtime_field', $_POST ) ) {
		update_post_meta(
			$post_id,
			'sp_runtime',
			$_POST['runtime_field']
		);
	}
}
add_action( 'save_post', 'save_postdata' );
