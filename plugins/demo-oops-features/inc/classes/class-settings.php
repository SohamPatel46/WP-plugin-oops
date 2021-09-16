<?php
/**
 * Class for custom setting page.
 *
 * @package demo-oops-features
 */

namespace Demo_oops\Features\Inc;

use Demo_oops\Features\Inc\Traits\Singleton;

/**
 * Class Settings
 */
class Settings {

	use Singleton;

	/**
	 * Construct method.
	 */
	protected function __construct() {

		$this->setup_hooks();

	}

	/**
	 * To setup action/filter.
	 *
	 * @return void
	 */
	protected function setup_hooks() {

		add_action( 'admin_menu', array( $this, 'mlib_movie_settings_page' ) );
		add_action( 'admin_init', array( $this, 'mlib_movie_settings_field' ) );

	}

	/**
	 * To create the movie setting Submenu .
	 *
	 * @return void
	 */
	public function mlib_movie_settings_page() {

		add_options_page(
			__( 'Plugin Setting', 'demo-oops-features' ),  // page title .
			__( 'Movie', 'demo-oops-features' ), // menu name ..
			'manage_options',   // capabilities .
			'movie_settings',     // slug .
			array( $this, 'mlib_movie_settings_html' )  // callback .
		);
	}

	/**
	 * To create the UI for movie setting page.
	 *
	 * @return void
	 */
	public function mlib_movie_settings_html() {

		if ( ! current_user_can( 'manage_options' ) ) {
			return;
		}
		?>

		<div class="wrap">

			<h1><?php echo esc_html( get_admin_page_title() ); ?></h1>

			<form action="options.php" method="post">
				<?php

					// output security fields for the registered setting "movie_setting" .
					settings_fields( 'movie_setting' );

					// output setting sections and their fields .
					// (sections are registered for "wporg", each field is registered to a specific section) .
					do_settings_sections( 'movie_setting' );

					// output save settings button .
					submit_button( __( 'Save Settings', 'demo-oops-features' ) );
				?>
			</form>

		</div>
		<?php

	}

	/**
	 * To register new settings section and field.
	 *
	 * @return void
	 */
	public function mlib_movie_settings_field() {

		// To register movie setting .
		// Setting, Setting name .
		register_setting( 'movie_setting', 'movie_setting_name' );

		// To add a section in movie setting .
		// String id, title, callback function for ui, page .
		add_settings_section(
			'movie_settings_section',
			'',
			'',
			'movie_setting'
		);

		// To add a field in movie setting .
		// String id, title, callback, page, section .
		add_settings_field(
			'movie_settings_field',
			__( 'Erase Data', 'demo-oops-features' ),
			array( $this, 'mlib_movie_field_html' ),
			'movie_setting',
			'movie_settings_section'
		);
	}

	/**
	 * To display UI of Movie setting page.
	 *
	 * @param array $args - arguement of the settings section.
	 * @return void
	 */
	public function mlib_movie_field_html( $args ) {

		$options = get_option( 'movie_setting_name' );
		?>

	<input type="checkbox" name="movie_setting_name" value="delete_data"
		<?php checked( 'delete_data', $options ); ?> /> 

		<?php
		esc_html_e( 'This would delete all posts and metadata of movies and persons post types.', 'demo-oops-features' );
	}


}
