<?php
/**
 * This file creates UI element for Movie Dashboard Widget
 *
 * @package movie-plugin
 */

?>

<div style="display: grid; grid-template-columns: 1fr 1fr;">

	<!-- Most Recent Movies -->
	<div>
		<h3> <b> <?php esc_html_e( ' Most Recent', 'movie-plugin' ); ?> </b> </h3> 

		<ol>

			<?php

			if ( is_array( $most_recent_ids ) && ! empty( $most_recent_ids ) ) {
				foreach ( $most_recent_ids as $movie_post ) {
					?>
							<li><?php echo esc_html( get_the_title( $movie_post ) ); ?></li>
						<?php
				}
			}

			?>

		</ol> 
	</div>

</div>
