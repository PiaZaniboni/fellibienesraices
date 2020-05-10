<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package felli
 */

get_header(); ?>
<?php get_header('responsive-pagina'); ?>
	<div id="propiedad" class="contenedor-pagina" >
			<?php get_header('celeste-pagina'); ?>
			<div class="caja-titulo">
				<?php echo do_shortcode( '[searchandfilter taxonomies="search,comercializacion,habitaciones,tipo,ubicacion" class="filtros pagina" types=",checkbox,select" order_by=",slug," hierarchical="1" headings=", ,Habitaciones,Tipo, Ubicacion" search_placeholder="¿Que estas buscando?..." submit_label="Buscar"]' ); ?>
			</div>
			<?php $direccion='';
			while ( have_posts() ) : the_post(); ?>

			<div class="contenedor-propiedad">
				<div class="contenedor-galeria">
					<div class="slider-for">
						<!-- Videos -->
						<?php $videos = CFS()->get( 'videos' );
							if ( !empty($videos) ){
								foreach ( $videos as $video ) { ?>
										<div> <?php echo $video['video']; ?> </div>
									<?php } ?>
							<?php } ?>
						<!-- Fotos -->
						<?php $fotoPortada = get_the_post_thumbnail_url();
							if ( $fotoPortada != ''  ){?>
								<div style="background-image:url('<?php echo $fotoPortada; ?>');"></div>
						<?php } ?>
						<?php $fields = CFS()->get( 'galeria' );
							if ( !empty($fields) ){
							foreach ( $fields as $field ) { ?>
									<div style="background-image:url('<?php echo $field['foto']; ?>');"></div>
								<?php } ?>
						<?php } ?>

					</div>
				</div>
				<div class="contenedor-informacion">
					<span class="categoria">
						<ul><?php echo get_the_term_list( $post->ID, 'comercializacion', '<li class="jobs_item">', ', ', '</li>' ) ?></ul>
					</span>

					<div class="show-desktop">
						<h2><?php $direccion= CFS()->get( 'direccion' ); echo $direccion; ?></h2>
						<h3>Caracter&iacute;sticas</h3>
						<ul>
							<?php $antiguedad = CFS()->get( 'antiguedad' );
								if ( $antiguedad !== '' ){ ?>
									<li>Antigüedad: <?php echo $antiguedad ?></li>
							<?php }?>
							<?php $total = CFS()->get( 'superficie_total' );
								if ( $total !== '' ){ ?>
									<li>Sup. total: <?php echo $total ?></li>
							<?php }?>
							<?php $cubierta = CFS()->get( 'superficie_cubierta' );
								if ( $cubierta !== '' ){ ?>
									<li>Sup. cubierta: <?php echo $cubierta ?></li>
							<?php }?>
						</ul>

						<ul>
							<?php $ambientes = CFS()->get( 'ambientes' );
								if ( $ambientes !== '' ){ ?>
									<li>Ambientes: <?php echo $ambientes ?></li>
							<?php }?>
							<?php $dormitorios = CFS()->get( 'dormitorios' );
								if ( $dormitorios !== '' ){ ?>
									<li>Dormitorios: <?php echo $dormitorios ?></li>
							<?php }?>
							<?php $banios = CFS()->get( 'banios' );
								if ( $banios !== '' ){ ?>
									<li>Ba&ntilde;os: <?php echo $banios ?></li>
							<?php }?>
							<?php $banioSuite = CFS()->get( 'bano_de_suite' );
								if ( $banioSuite !== 0 ){ ?>
									<li>Ba&ntilde;o en suite: Si</li>
							<?php }?>
						</ul>

						<ul>
							<?php $living = CFS()->get( 'living' );
								if ( $living !== '' ){ ?>
									<li>Living: <?php echo $living ?></li>
							<?php }?>
							<?php $cocina = CFS()->get( 'cocina' );
								if ( $cocina !== '' ){ ?>
									<li>Cocina: <?php echo $cocina ?></li>
							<?php }?>
							<?php $escritorio = CFS()->get( 'escritorio' );
								if ( $escritorio !== 0 ){ ?>
									<li>Escritorio: Si</li>
							<?php }?>
						</ul>

						<ul>
							<?php $cochera = CFS()->get( 'cochera' );
								if ( $cochera !== 0 ){ ?>
									<li>Cochera: Si</li>
							<?php }?>
							<?php $parque = CFS()->get( 'parque_libre' );
								if ( $parque !== 0 ){ ?>
									<li>Parque Libre: Si</li>
							<?php }?>
							<?php $patio = CFS()->get( 'patio' );
								if ( $patio !== 0 ){ ?>
									<li>Patio: Si</li>
							<?php }?>
						</ul>

						<?php $fields2 = CFS()->get( 'mas_informacion' );
								if ( !empty($fields2) ){ ?>
									<ul>
									<?php foreach ( $fields2 as $field2 ) { ?>
										<li><?php echo $field2['texto']; ?></li>
									<?php } ?>
									</ul>
								<?php } ?>

						<?php $observaciones = CFS()->get( 'observaciones' );
								if ( $observaciones !== '' ){ ?>
									<p>Observaciones: <?php echo $observaciones; ?></p>
						<?php }?>
					</div>
					<div class="slider-nav">
						<!-- Videos -->
						<?php $videos = CFS()->get( 'videos' );
							if ( !empty($videos) ){
								foreach ( $videos as $video ) { ?>
									<div class="nav" style="background-image:url('<?php echo $video['imagen']; ?>');"></div>
								<?php }
							}?>
						<?php
							if ( $fotoPortada != ''  ){?>
								<div style="background-image:url('<?php echo $fotoPortada; ?>');"></div>
						<?php } ?>
						<?php $fields = CFS()->get( 'galeria' );
							if ( !empty($fields) ){
								foreach ( $fields as $field ) { ?>
						    		<div class="nav" style="background-image:url('<?php echo $field['foto']; ?>');"></div>
								<?php }
							} ?>
					</div>
					<div class="hide-desktop">
						<h2><?php echo CFS()->get( 'direccion' ); ?></h2>
						<h3>Caracter&iacute;sticas</h3>
						<ul>
							<?php $antiguedad = CFS()->get( 'antiguedad' );
								if ( $antiguedad !== '' ){ ?>
									<li>Antigüedad: <?php echo $antiguedad ?></li>
							<?php }?>
							<?php $total = CFS()->get( 'superficie_total' );
								if ( $total !== '' ){ ?>
									<li>Sup. total: <?php echo $total ?></li>
							<?php }?>
							<?php $cubierta = CFS()->get( 'superficie_cubierta' );
								if ( $cubierta !== '' ){ ?>
									<li>Sup. cubierta: <?php echo $cubierta ?></li>
							<?php }?>
						</ul>

						<ul>
							<?php $ambientes = CFS()->get( 'ambientes' );
								if ( $ambientes !== '' ){ ?>
									<li>Ambientes: <?php echo $ambientes ?></li>
							<?php }?>
							<?php $dormitorios = CFS()->get( 'dormitorios' );
								if ( $dormitorios !== '' ){ ?>
									<li>Habitaciones: <?php echo $dormitorios ?></li>
							<?php }?>
							<?php $banios = CFS()->get( 'banios' );
								if ( $banios !== '' ){ ?>
									<li>Ba&ntilde;os: <?php echo $banios ?></li>
							<?php }?>
							<?php $banioSuite = CFS()->get( 'bano_de_suite' );
								if ( $banioSuite !== 0 ){ ?>
									<li>Ba&ntilde;o en suite: Si</li>
							<?php }?>
						</ul>

						<ul>
							<?php $living = CFS()->get( 'living' );
								if ( $living !== '' ){ ?>
									<li>Living: <?php echo $living ?></li>
							<?php }?>
							<?php $cocina = CFS()->get( 'cocina' );
								if ( $cocina !== '' ){ ?>
									<li>Cocina: <?php echo $cocina ?></li>
							<?php }?>
							<?php $escritorio = CFS()->get( 'escritorio' );
								if ( $escritorio !== 0 ){ ?>
									<li>Escritorio: Si</li>
							<?php }?>
						</ul>

						<ul>
							<?php $cochera = CFS()->get( 'cochera' );
								if ( $cochera !== 0 ){ ?>
									<li>Cochera: Si</li>
							<?php }?>
							<?php $parque = CFS()->get( 'parque_libre' );
								if ( $parque !== 0 ){ ?>
									<li>Parque Libre: Si</li>
							<?php }?>
							<?php $patio = CFS()->get( 'patio' );
								if ( $patio !== 0 ){ ?>
									<li>Patio: Si</li>
							<?php }?>
						</ul>

							<?php $fields2 = CFS()->get( 'mas_informacion' );
									if ( !empty($fields2) ){ ?>
										<ul>
										<?php foreach ( $fields2 as $field2 ) { ?>
							    			<li><?php echo $field2['texto']; ?></li>
										<?php } ?>
										</ul>
									<?php } ?>

						<?php $observaciones = CFS()->get( 'observaciones' );
								if ( $observaciones !== '' ){ ?>
									<p>Observaciones: <?php echo $observaciones; ?></p>
						<?php }?>
					</div>
				</div>
			</div>

					<?php //echo do_shortcode ('[mappress]');

					$output = do_shortcode('[mappress]');
					    if($output !== '') { ?>
							<div class="mapa-propiedad">
					    		<?php echo $output; ?>

							</div>
						<?php }?>


			<div class="formulario-propiedad">
				<div class="caja-formulario">
					<?php echo do_shortcode( '[contact-form-7 id="195" title="Contacto Propiedades"]' ); ?>
				</div>
			</div>
			<script>
				$(document).ready(function(){
					console.log("alo");
					$('input[name=propiedad]').val('<?php echo $direccion; ?>');
				});
			</script>
				<!--<?php the_title(); ?>

				<?php the_content(); ?>

				<?php the_post_navigation();

			endwhile; // End of the loop.
			?> -->


			<h4>Otras recomendaciones</h4>

	</div>

	<div class="cajas-propiedades">
		<?php

		$args3 = array(
			'post_type' => 'post'
		);

		// Custom query.
		$query3 = new WP_Query( $args3 );

		// Check that we have query results.
		if ( $query3->have_posts() ) {

		// Start looping over the query results.
		while ( $query3->have_posts() ) {

			$query3->the_post(); ?>

		<!-- ///// PROPIEDAD  //// -->
			<div class="caja-propiedad" >
				<a href="<?php the_permalink(); ?>" class="imagen-propiedad" style="background-image:url('<?php the_post_thumbnail_url( 'large' ); ?>');"> </a>
				<div class="caja-texto" >
					<a class="titulo-propiedad" href="<?php the_permalink(); ?>"><?php echo CFS()->get( 'direccion' ); ?></a>
					<p><?php the_content(); ?></p>
				</div>
			</div>
		<!-- ///////// -->
		<?php }
		}

		// Restore original post data.
		wp_reset_postdata();

		?>

	</div>

<?php
get_footer();
