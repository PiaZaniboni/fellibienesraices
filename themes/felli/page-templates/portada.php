<?php /* Template Name: Portada */ ?>
<?php get_header('responsive'); ?>
<div id="portada" class="contenedor-pagina" >
		<?php get_header('celeste2'); ?>
		<div class="caja-titulos">
			<h4><?php echo CFS()->get( 'titulo_principal' ); ?></h4>
			<h5><?php echo CFS()->get( 'titulo_secundario' ); ?></h5>
		</div>
		<div class="caja-filtros">
			<?php echo do_shortcode( '[searchandfilter taxonomies="search,comercializacion,habitaciones,tipo,ubicacion" class="filtros portada" types=",checkbox,select" order_by=",slug," hierarchical="1" headings=", ,Habitaciones,Tipo, Ubicacion" search_placeholder="¿Que estas buscando?..." submit_label="Buscar"]' ); ?>
			<!-- ////va a archive///// -->
		</div>
		<div class="multiple-items">
			<?php
			$args2 = array(
				'post_type' => 'post', 'category_name' => 'propiedad-destacada'
			);
			// Custom query.
			$query2 = new WP_Query( $args2 );
			// Check that we have query results.
			if ( $query2->have_posts() ) {
			// Start looping over the query results.
			while ( $query2->have_posts() ) {
				$query2->the_post(); ?>

			<!-- ///// PROPIEDAD PORTADA  //// -->
				<div class="propiedad-portada" style="background-image:url('<?php the_post_thumbnail_url( 'full' ); ?>');">
					<div class="caja-info" >
						<h2><?php echo CFS()->get( 'direccion' );?></h2>
						<p><?php the_content(); ?></p>
						<a href="<?php the_permalink(); ?>" alt="<?php the_title(); ?>">Ver m&aacute;s...</a>
					</div>
					<div class="transparencia"></div>
				</div>
			<!-- ///////// -->
			<?php }
			}

			// Restore original post data.
			wp_reset_postdata();

			?>
		</div>

		<?php get_footer('blanco'); ?>
</div>
