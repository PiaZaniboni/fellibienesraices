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
			if ( have_posts() ) : ?>
				<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post(); ?>

					<div class="caja-propiedad" >
						<a href="<?php the_permalink(); ?>" class="imagen-propiedad" style="background-image:url('<?php the_post_thumbnail_url( 'large' ); ?>');"> </a>
						<div class="caja-texto" >
							<a class="titulo-propiedad" href="<?php the_permalink(); ?>"><?php echo CFS()->get( 'direccion' ); ?></a>
							<p><?php the_content(); ?></p>
						</div>
					</div>

				<?php endwhile;

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>
		</div><!-- #caja-propiedades -->

		<?php get_footer('gris'); ?>
</div>
