<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package felli
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info color-blanco">
			<span class="telefono-inmobiliaria pull-left"><?php echo CFS()->get( 'telefono-inmobiliaria' );?></span>
			<span class="mail-inmobiliaria pull-center"><?php echo CFS()->get( 'mail-inmobiliaria' );?></span>
			<span class="direccion-inmobiliaria pull-right"><?php echo CFS()->get( 'direccion-inmobiliaria' );?></span>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->


<?php wp_footer(); ?>

</body>
</html>
