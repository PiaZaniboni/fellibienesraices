<?php /* Template Name: Quienes somos */ ?>

	<div id="quienes-somos" class="contenedor-pagina" >
			<?php get_header('celeste'); ?>

			<div class="todas-quienes">
				<div class="caja-quienes logo">
					<img src="<?php echo CFS()->get( 'logo' );?>">
					<span><strong>Tel&eacute;fono.</strong></br ><?php echo CFS()->get( 'telefono-inmobiliaria' );?></span>
					<span><strong>Direcci&oacute;n.</strong></br ><?php echo CFS()->get( 'direccion-inmobiliaria' );?></span>
				</div>
				<div class="caja-quienes imagen-oficina" style="background-image:url('<?php the_post_thumbnail_url( 'full' ); ?>');">
				</div>
				<div class="caja-quienes info">
					<span class="titulo" ><?php the_title(); ?></span>
					<?php the_content(); ?>
				</div>
			</div>


	</div>
