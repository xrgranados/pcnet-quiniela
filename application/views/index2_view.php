<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Quiniela</title>
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<header id="head">
		<div class="container">
			<?php echo anchor(base_url(), _lang('qu_title'), 'class="logo"'); ?>
		</div>
	</header>
	<div class="container">
		<div class="row">
			<section id="input" class="col-md-12">
				<?php echo heading( 'Ingresa tu Quiniela', 1, 'class="page-header"'); ?>
				<p class="lead">
					En la siguiente sección podras ingresar tu Quiniela.
				</p>
				<?php echo anchor('#', 'Agregar Quiniela <i class=" fa fa-plus"></i>', 'id="add-score" class="btn btn-primary"'); ?>
			</section>
			<section id="users" class="no-display col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<strong>Selecciona tu usuario</strong>
						<button class="btn btn-success pull-right" data-toggle="modal" data-target="#userModal">
							Agregar usuario <i class="fa fa-plus"></i>
						</button>
						<span class="clearfix"></span>
					</div>
					<div class="panel-body">
						<table id="users" class="table table-striped table-hover">
							<thead>
								<tr>
									<th>Nombre</th>
									<th>Apellido</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<?php echo anchor('#', 'Rafael', 'class="btn btn-link btn-block text-left"'); ?>
									</td>
									<td>
										<?php echo anchor('#', 'Granados', 'class="btn btn-link btn-block text-left" '); ?>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</section>
			<!-- Modal -->
			<div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title" id="myModalLabel">
								<i class="fa fa-user"></i> Crea tu usuario
							</h4>
						</div>
						<?php echo form_open(base_url('index/save'), 'id="user-in" role="form"'); ?>
						<div class="modal-body">
							<div class="col-md-8 col-md-offset-2">
								<div class="form-group">
									<label for="first_name">Nombre</label>
									<input type="text" class="form-control" id="first_name" name="first_name" placeholder="Ingresa tu nombre">
								</div>
								<div class="form-group">
									<label for="last_name">Apellido</label>
									<input type="text" class="form-control" id="last_name" name="last_name" placeholder="Ingresa tu apellido">
								</div>
								<div class="form-group">
									<label for="email">Correo</label>
									<input type="email" class="form-control" id="email" name="email" placeholder="Ingresa tu correo">
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
							<!-- <button id="save-user" type="button" class="btn btn-primary">Guardar</button> -->
							<input type="submit" value="Guardar" class="btn btn-primary">
						</div>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<?php echo script_tag('assets/js/jquery-1.10.2.min.js'); ?>
<?php echo script_tag('assets/js/bootstrap.min.js'); ?>
<?php echo script_tag('assets/js/jquery/1.6.1/jquery.min.js'); ?>
<?php echo script_tag('assets/js/form-validation/jquery.validate.min.js'); ?>
<script>
$(document).ready(function() {
	$.getJSON('http://footballdb.herokuapp.com/api/v1/event/world.2014/teams', function(json) {
	    console.log(json);
	});
});
$('#add-score').click(function() {
	$('#users').slideDown();
});
// validate signup form on keyup and submit
$('#user-in').validate({
	rules: {
		first_name: {
			required: true,
			minlength: 2
		},
		last_name: {
			required: true,
			minlength: 2
		},
		email: {
			required: false,
			minlength: 10
		},
	},
	messages: {
		first_name: "Por favor ingresa tu Nombre",
		last_name: "Por favor ingresa tu Apellido",
		email: "Ingresa un correo electrónico valido",
	},
});
</script>
</html>