<header id="masthead" class="site-header fondo-blanco">
	<div class="site-branding">
		<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri() . '/img/marca-gris.png' ?>" alt="Felli Bienes raices"></a></h1>
	</div><!-- .site-branding -->

	<nav id="site-navigation" class="main-navigation fondo-blanco">
		<a class="menu-toggle" href="javescript:void(0)"><i class="fa fa-bars"></i></a>
		<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
		?>
	</nav><!-- #site-navigation -->
</header><!-- #masthead -->