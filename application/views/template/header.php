<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Quiniela Pcnetmedia">
	<meta name="author" content="@xr.granados">
	<link rel="shortcut icon" href="http://pcnetmedia.com/assets/ico/favicon.ico">
	<?php
	echo link_tag('assets/css/style.css');
	?>
	<title>
		<?php
		echo _lang('qu_title_page');
		echo $ViewTitle;
		?>
	</title>
</head>
<body>
	<div class="container">
		<nav id="menu-options" class="btn-group col-md-offset-8">
			<button type="button" class="btn btn-info" data-toggle="modal" data-target="#rulesModal">Reglas</button>
			<button type="button" class="btn btn-info" data-toggle="modal" data-target="#prizesModal">Premios</button>
			<?php print anchor(base_url('index.php/partidos'), 'Partidos', 'class="btn btn-primary"'); ?>
			<?php print anchor(base_url('index.php/ranking'), 'Ranking', 'class="btn btn-primary"'); ?>
		</nav>