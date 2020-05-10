<div class="site-header responsive">
	<div class="site-branding">
		<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri() . '/img/marca-responsive.png' ?>" alt="Felli Bienes raices"></a></h1>
	</div><!-- .site-branding -->

	<nav id="site-navigation" class="main-navigation fondo-blanco">
		<a class="menu-close" href="javescript:void(0)"><i class="fa fa-times"></i></i></a>
		<?php
			wp_nav_menu( array(
				'menu' => 'pagina',
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
		?>
	</nav><!-- #site-navigation -->
</div><!-- #masthead -->
