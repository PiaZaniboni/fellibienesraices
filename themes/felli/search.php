<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package felli
 */

get_header(); ?>
<?php get_header('responsive-pagina'); ?>
<div id="propiedades" class="contenedor-pagina" >
	<?php get_header('celeste-pagina'); ?>

		<div class="caja-titulo">
		<?php echo do_shortcode( '[searchandfilter taxonomies="search,comercializacion,habitaciones,tipo,ubicacion" class="filtros pagina" types=",checkbox,select" order_by=",slug," hierarchical="1" headings=", ,Habitaciones,Tipo, Ubicacion" search_placeholder="¿Que estas buscando?..." submit_label="Buscar"]' ); ?>
		</div>

		<div class="cajas-propiedades">
			<?php

			$args = array(
				'post_type' => 'post',
				'posts_per_page' =>-1
			);

			// Custom query.
			$query = new WP_Query( $args );

			// Check that we have query results.
			if ( $query->have_posts() ) {

			// Start looping over the query results.
			while ( $query->have_posts() ) {

				$query->the_post(); ?>

					<div class="caja-propiedad" >
						<a href="<?php the_permalink(); ?>" class="imagen-propiedad" style="background-image:url('<?php the_post_thumbnail_url( 'large' ); ?>');"> </a>
						<div class="caja-texto" >
							<a class="titulo-propiedad" href="<?php the_permalink(); ?>"><?php echo CFS()->get( 'direccion' ); ?></a>
							<p><?php the_content(); ?></p>
						</div>
					</div>

				<?php }
				}

				// Restore original post data.
				wp_reset_postdata();

				?>
		</div><!-- #caja-propiedades -->

		<?php get_footer('gris'); ?>
</div>
