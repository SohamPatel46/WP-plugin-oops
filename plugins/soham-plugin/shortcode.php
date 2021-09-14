<?php

function wptuts_first_shortcode( $atts, $content = null ) {

	$a = shortcode_atts(
		array(
			'tax_term' => '', // by default if parameter not passed .
		),
		$atts
	);

	ob_start();

	echo 'Term entered : ' . esc_html( $a['tax_term'] );

	$args = array(
		'post_type' => 'sp-movie',          // name of post type.
		'tax_query' => array(
			'relation' => 'AND',
			array(
				'taxonomy' => 'sp_movie_taxonomy',   // taxonomy name .
				'field'    => 'slug',           // term_id, slug or name .
				'terms'    => $a['tax_term'],                  // term id, term slug or term name .
			),
			array(
				'taxonomy' => 'sp_movie_taxonomy',   // taxonomy name .
				'field'    => 'slug',           // term_id, slug or name .
				'terms'    => $a['tax_term'],                  // term id, term slug or term name .
			),
		),
	);

	$query_r = new WP_Query( $args );

	// var_dump( $query_r );
	// echo 'yes';

	if ( $query_r->have_posts() ) {
		while ( $query_r->have_posts() ) {
			$query_r->the_post();

			echo 'yes';
			echo esc_attr( get_the_title() );

			?>
			<p> <?php echo esc_attr( get_the_title() ); ?> </p>
			<?php

		}
	} else {
		echo 'No post fetched';
	}
		return ob_get_clean();
}

add_shortcode( 'twitter', 'wptuts_first_shortcode' );


