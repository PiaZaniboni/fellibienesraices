<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package felli
 */

get_header(); ?>

		<?php  $count = 0;
		// The Query
		$the_query = new WP_Query( array( 'post_type' => 'page', 'order' => 'ASC' )  );
		// The Loop
		if ( $the_query->have_posts() ) {
					while ( $the_query->have_posts() ) {
						$the_query->the_post(); $count++;
			if ($count == 1){ //SI ES LA PRIMERA PAGINA DEL LOOP
				include(TEMPLATEPATH .'/page-templates/portada.php'); //LLAMO TEMPLATE
			 } else if ($count == 2) { //SI ES LA SEGUNDA PAGINA DEL LOOP
				include(TEMPLATEPATH .'/page-templates/quienes-somos.php'); //LLAMO TEMPLATE
			 } else if ($count == 3) { //SI ES LA TECERA PAGINA DEL LOOP
				include(TEMPLATEPATH .'/page-templates/contacto.php'); //LLAMO TEMPLATE
			 }
					}
					wp_reset_postdata();
				} else {
					// no posts found
				} ?>


<?php

get_footer();
