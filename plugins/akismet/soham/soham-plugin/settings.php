<?php
function movie_options_page_html() {
	if ( ! current_user_can( 'manage_options' ) ) {
		return;
	}
	?>

	<div class="wrap">
	<h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
	  <form action="options.php" method="post">
		<?php
		// output security fields for the registered setting "wporg_options" .
		settings_fields( 'movie_setting' );
		// output setting sections and their fields
		// (sections are registered for "wporg", each field is registered to a specific section) .
		do_settings_sections( 'movie_setting' );
		// output save settings button .
		submit_button( __( 'Save Settings', 'textdomain' ) );
		?>
		<!-- <h2> Soham </h2> -->
	  </form>
	</div>
	<?php
}

add_action( 'admin_menu', 'movie_options_page' );

function movie_options_page() {
	add_submenu_page(
		'options-general.php', // parent slug page .
		'Movie Setting',  // Page name .
		'Movie',  // menu name .
		'manage_options',   // capability  .
		'movie-setting',      // slug   .
		'movie_options_page_html',      // callback   .
		plugin_dir_url( __FILE__ ) . 'images/icon_wporg.png',
		20     // position
	);
}

function wporg_settings_init() {

	// register a new setting for "movie_setting" page
	// (option group, option name)
	register_setting( 'movie_setting', 'wporg_setting_name' );

	// register a new section in the "movie_setting" page
	// ( section_id(string), title, callback, page )
	add_settings_section(
		'wporg_settings_section',
		'',
		'',
		'movie_setting'
	);

	// register a new field in the "wporg_settings_section" section, inside the "movie_setting" page
	// ( id, title, callback, page, section_id)
	add_settings_field(
		'wporg_settings_field',
		'Delete plugin',
		'wporg_settings_field_callback',
		'movie_setting',
		'wporg_settings_section'
	);
}

/**
 * register wporg_settings_init to the admin_init action hook
 */
add_action( 'admin_init', 'wporg_settings_init' );


// callback for field UI
function wporg_settings_field_callback() {

	// get the value of the setting we've registered with register_setting() .
	$setting = get_option( 'wporg_setting_name' );
	// print_r($setting);
	// output the field .
	?>

	<input type="checkbox" name="wporg_setting_name" 
	<?php
	if ( 'delete_data' === $setting ) {
		echo 'checked';}
	?>
	 value="delete_data">

	<span> Checking this will delete all posts and metadata of movies and persons post types </span>
	<?php
}

?>
