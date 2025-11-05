<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<div class="banner_header"
				style="background-image: url('<?=base_url();?>assets/img/header.png'); background-size: cover; background-position: center center; height: 300px;">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<p>&nbsp;</p>
							<p>&nbsp;</p>
							<h1 style="color: #FFF">EMPRESA</h1>
							<p style="color: #FFF">Conheça a nossa história, missão, visão e valores.</p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>

<!--Inicio clientes-->
<div class="container100h"  style="padding: 50px;">
	<div class="span5 empresa">

		<div class="bg">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-xs-12 text-justify">
						<?php 
					foreach($empresas as $empresa) { echo $empresa->conteudo; }
						?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-xs-12 text-justify">
						<img src="<?=base_url();?>assets/img/empresa1.jpeg" alt="Empresa 1" style="width: 100%; height: 400px; object-fit: cover; object-position: center left; margin: 20px;" class="img-fluid">
					</div>
					<div class="col-md-4 col-xs-12 text-justify">
						<img src="<?=base_url();?>assets/img/empresa2.jpeg" alt="Empresa 2" style="width: 100%; height: 400px; object-fit: cover; object-position: center center; margin: 20px;" class="img-fluid">
					</div>
					<div class="col-md-4 col-xs-12 text-justify">
						<img src="<?=base_url();?>assets/img/empresa3.jpeg" alt="Empresa 3" style="width: 100%; height: 400px; object-fit: cover; object-position: center center; margin: 20px;" class="img-fluid">
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
<!-- Fim clientes -->


<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<div class="banner_header"
				style="background-color: #f18322; padding: 10px;">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<h1 style="color: #FFF">MISSÃO</h1>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>


<!--Inicio clientes-->
<div class="" style="padding: 50px;">
	<div class="span5 empresa">

		<div class="bg">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-xs-12 text-justify">
						<?php 
					foreach($missao as $missao) { echo $missao->conteudo; }
					?>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
<!-- Fim clientes -->

<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<div class="banner_header"
				style="background-color: #f18322; padding: 10px;">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<h1 style="color: #FFF">O QUE FAZEMOS</h1>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>


<!--Inicio clientes-->
<div class=""  style="padding: 50px;">
	<div class="span5 empresa">

		<div class="bg">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-xs-12 text-justify">
						<?php 
					foreach($fazemos as $fazemos) { echo $fazemos->conteudo; }
					?>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
<!-- Fim clientes -->

<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<div class="banner_header"
				style="background-color: #f18322; padding: 10px;">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<h1 style="color: #FFF">DIFERENCIAL</h1>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>


<!--Inicio clientes-->
<div class=""  style="padding: 50px;">
	<div class="span5 empresa">

		<div class="bg">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-xs-12 text-justify">
						<?php 
					foreach($diferencial as $diferencial) { echo $diferencial->conteudo; }
					?>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
<!-- Fim clientes -->

</div>
</div>