<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<div class="banner_header" style="background-image: url('<?=base_url();?>assets/img/header.png'); background-size: cover; background-position: center center; height: 300px;">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<p>&nbsp;</p><p>&nbsp;</p>
							<h1 style="color: #FFF">CLIENTES</h1>
							<p style="color: #FFF">Nossos clientes e parceiros.</p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>

<div class="container100h">

	<div class="black">

	</div>

	<div class="span5 clientes">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-xs-12">
				</div>
			</div>
		</div>

		<form method="GET" action="<?= base_url(); ?>busca-cliente">

			<div class="buscaCliente" <?php
										if ($tipo == "Feminino") {
											echo '
		style="background-color: #B20000; color: white;"';
										} else {
											echo '
		style="background-color:#f18322; color: white;"';
										}
										?>>
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-xs-12">
							<p class="titulo">Encontre um atleta:</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-7 col-xs-12 text-center"><input type="text" class="form-control" placeholder="Digite o nome para buscar..." value="<?php echo $this->input->GET("buscar"); ?>" name="buscar"></div>


						<div class="col-md-2 col-xs-12 text-center"><button class="btn btn-default" type="submit">Pesquisar</button></div>
					</div>
				</div>
			</div>
		</form>

		<?php
		if ($linha != "") {
			echo '
<div class="container">
<div class="row">
<div class="col-md-12">
<h3>' . $linha . '</h3>
</div>
</div>
</div> 
';
		}
		?>

		<div class="container">


			<div id="boxProfissional">
				<div class="row">

					<?php
					$x = 0;
					foreach ($clientesP as $cliente) {
						echo '
						
						<div class="col-md-3 col-xs-12 text-center">

						<div class="boxJogador">
						<div class="borda">
						<a href="' . base_url() . 'atleta/' . $cliente->id . '/' . $cliente->url . '"><img src="' . base_url() . 'imagens/atletas/' . $cliente->imagem . '" class="imgCliente" alt=""></a>

						<div class="posicao">' . $cliente->posicao . '</div>
						<div class="nome" style="font-size:14px">' . $cliente->apelido . '</div>
						<div class="escudo">

						';

						foreach ($clubes as $clube) {
							if ($cliente->clube_atual == $clube->id) {
								echo '<img src="' . base_url() . 'imagens/clubes/' . $clube->escudo . '" alt="">';
							}
						}

						echo '</div>
						</div>
						</div>

						</div>


						';
						$x++;
					}
					if ($x == 0) {
						echo "<p align='center'>Nenhum resultado encontrado.</p>";
					}
					?>

				</div>
			</div>

			<div id="boxBase">
				<div class="row">

					<?php
					$x = 0;
					foreach ($clientesB as $cliente) {
						echo '
						
						<div class="col-md-3 col-xs-12 text-center">

						<div class="boxJogador">
						<div class="borda">
						<a href="' . base_url() . 'atleta/' . $cliente->id . '/' . $cliente->url . '"><img src="' . base_url() . 'imagens/atletas/' . $cliente->imagem . '" class="imgCliente" alt=""></a>

						<div class="posicao">' . $cliente->posicao . '</div>
						<div class="nome">' . $cliente->apelido . '</div>
						<div class="escudo">

						';

						foreach ($clubes as $clube) {
							if ($cliente->clube_atual == $clube->id) {
								echo '<img src="' . base_url() . 'imagens/clubes/' . $clube->escudo . '" alt="">';
							}
						}

						echo '</div>
						</div>
						</div>

						</div>


						';
						$x++;
					}
					if ($x == 0) {
						echo "<p align='center'>Nenhum resultado encontrado.</p>";
					}
					?>

				</div>
			</div>


		</div>

	</div>
</div>

