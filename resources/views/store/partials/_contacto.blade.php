<div class="container-fluid">
	<div class="row">
  		<div class="page-header">
  			<h3> Mayor información: </h3>
		</div>
		<div class="panel text-justify">
			<div class="panel-body">
				<div class="container-fluid">
					<div class="col-md-4">
						<address>
							<strong><i class="fa fa-map-marker"></i> Dirección: </strong>
							<hr>
							<p>DOMINO'S 20 DE NOVIEMBRE, Avenida 20 de Noviembre, Cazones, Poza Rica, Veracruz</p>
						</address>
					</div>
					<div class="col-md-4">
						<address>
							<strong><i class="fa fa-phone-square"></i> Télefono: </strong>
							<hr>
							<p>Llama ahora: <br>01800DOMINOS</p>
						
						</address>
					</div>
					<div class="col-md-4">
						<address>
							<strong><i class="fa fa-envelope"></i> Correo electrónico: </strong>
							<hr>
							<p>Ventas: <a href="mailto:#" style="color: #000;">ventas@catalogo_jb.com.mx</a> <br> Pedidos: <a href="mailto:#" style="color: #000;">pedidos@catalogo_jb.com.mx</a></p>
						</address>
					</div>
				</div>
			</div>
	  	</div>
	</div>
	<div class="row">
	  	<div class="panel">
	  		<div class="panel-heading">
	  			<h3 class="panel-title">
	  				Ubicación
	  			</h3>
	  		</div>
	  		<div class="panel-body">
	  					<div id="map" class="span12"></div>
	  		</div>
		
		  	<script>
		  		function initMap() {
				  var myLatLng = {lat: 20.540209, lng: -97.447427};

				  // Create a map object and specify the DOM element for display.
				  var map = new google.maps.Map(document.getElementById('map'), {
				    center: myLatLng,
				    scrollwheel: false,
				    zoom: 16
				  });

				  // Create a marker and set its position.
				  var marker = new google.maps.Marker({
				    map: map,
				    position: myLatLng,
				    title: 'TU estas aqui'
				  });

				  var coordInfoWindow = new google.maps.InfoWindow();
				  coordInfoWindow.setContent(createInfoWindowContent(myLatLng, map.getZoom()));
				  coordInfoWindow.setPosition(myLatLng);
				  coordInfoWindow.open(map);
				  
				  function createInfoWindowContent(latLng, zoom) {
					  return [
					    'TU estas aqui'
					  ].join('<br>');
					}
				}
		  	</script>
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDMwC5jPmLMAl7gKNQykCXnaaS13iTVpA4&callback=initMap"></script>
		</div>
	</div>
</div>