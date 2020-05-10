<?php /* Template Name: Contacto */ ?>

	<div id="contacto" class="contenedor-pagina" >
			<?php get_header('blanco2'); ?>

			<div class="caja-formulario">
				<?php the_content(); ?>
			</div>

			<?php get_footer('blanco2'); ?>
	</div>
	<div class="mapa" id="map">
	</div>
	<script>
      function initMap() {

        var uluru = {lat: -34.9336651, lng: -57.9405315};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCdH3IR5g5FCgB1IcAvHkwqZX09VUx8yj0&callback=initMap">
    </script>
