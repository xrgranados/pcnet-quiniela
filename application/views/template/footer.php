<div class="modal fade" id="rulesModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="myModalLabel">
						<i class="fa fa-users"></i>   Reglas de participación
					</h4>
				</div>
				<div class="modal-body">
					<div class="col-md-8 col-md-offset-2">
						<ol>
							<li>para modificar los pronosticos de la quiniela, ponerse en contacto con el administrador</li>
						</ol>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="prizesModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="myModalLabel">
						<i class="fa fa-trophy"></i>
						Premios
					</h4>
				</div>
				<div class="modal-body">
					<div class="col-md-8 col-md-offset-2">
						<ul>
							<li>Por establecer</li>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				</div>
			</div>
		</div>
	</div>
	<div class="trama"></div>
	<?php 
	echo script_tag('assets/js/jquery-1.10.2.min.js');
	echo script_tag('assets/js/bootstrap.min.js');
	echo script_tag('assets/js/jquery.countdown.min.js');
	echo script_tag('assets/js/football.js');
	?>
	<script>
	$(document).ready( function() { 
		var api_base = "http://footballdb.herokuapp.com/api/v1"
		var world_cup_widget = footballdb_widget_new( '#world', api_base );
		world_cup_widget.update( 'world.2014', '2' );
	});
	$(document).ready(function() {
		$.getJSON('http://footballdb.herokuapp.com/api/v1/event/world.2014/teams?callback=?', function(json) {
			$.each(json.teams, function(index, country) {
				console.log(country)
				$('#list ul').after('li').text(country.key);
			});
		});
	});
	</script>
</body>
</html>