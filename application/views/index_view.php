<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="author" content="">
	<?php
	echo link_tag('assets/css/landing.css');
	?>
	<title>
		<?php
		echo _lang('qu_title_page');
		echo $ViewTitle;
		?>
	</title>
</head>
<body>
	<div class="coming-soon">
		<div class="inner-bg">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="head-cg">
							<i class="logo"></i>
						</div>
						<h2 id="tt-qu"><?php echo _lang('qu_title_page') ?></h2>
						<p>
							<?php echo _lang('qu_landing_description'); ?>
						</p>
						<small>no te dejes engañar</small>
						<div class="clearfix"></div>
						<div class="timer">
							<div class="days-wrapper circle">
								<span class="days"></span> <br>días
							</div>
							<div class="hours-wrapper circle">
								<span class="hours"></span> <br>horas
							</div>
							<div class="minutes-wrapper circle">
								<span class="minutes"></span> <br>minutos
							</div>
							<div class="seconds-wrapper circle">
								<span class="seconds"></span> <br>segundos
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="trama"></div>
	<script>
	var msg = '<?php echo $this->session->flashdata('subscribed'); ?>';
	</script>
	<?php echo script_tag('assets/js/jquery-1.10.2.min.js'); ?>
	<?php echo script_tag('assets/js/bootstrap.min.js'); ?>
	<?php echo script_tag('assets/js/jquery.countdown.min.js'); ?>
	<?php echo script_tag('assets/js/scripts-landing.js'); ?>
	<?php echo script_tag('assets/js/jquery/1.6.1/jquery.min.js'); ?>


</body>
</html>