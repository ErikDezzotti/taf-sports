<?php
defined('BASEPATH') OR exit('No direct script access allowed');
foreach($config as $conf) { }
?>
<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<div class="banner_header" style="background-image: url('<?=base_url();?>assets/img/header.png'); background-size: cover; background-position: center center; height: 300px;">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<p>&nbsp;</p><p>&nbsp;</p>
							<h1 style="color: #FFF">CONTATO</h1>
							<p style="color: #FFF">Fale conosco e tire suas dúvidas.</p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
<div class="container100h">
	
<div class="span5 contato">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-xs-12">
					<div class="row">
						<div class="col-md-8 col-xs-12">
							<p><?php
					foreach($paginas as $pg) {
						echo $pg->conteudo;
					}
					?></p>
<form method="POST" action="<?=base_url();?>enviar.php">
  <div class="form-group">
    <label>Nome</label>
    <input type="text" class="form-control" name="nome" placeholder="Digite seu nome..." required="required">
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="email" placeholder="Digite seu email..." required="required">
  </div>
  <div class="form-group">
    <label>Telefone</label>
    <input type="text" class="form-control" name="telefone" placeholder="Telefone com ddd..." required="required">
  </div>
 <div class="form-group">
    <label>Mensagem</label><br>
   <textarea name="mensagem" id="" cols="30" name="mensagem" rows="10" class="form-control" placeholder="Sua mensagem..." required="required"></textarea>
  </div>

  <button type="submit" class="btn btn-lg btn-default">Enviar</button>
  <p>&nbsp;</p>
</form>
						</div>
						<div class="col-md-4 col-xs-12 text-center">

<h2>Telefone</h2>

<p><strong><?php echo $conf->telefone; ?></strong></p>

<h2>Email</h2>

<p><strong><?php echo $conf->email; ?></strong></p>

<h2>Endereço</h2>

Edifício Lozandes (Business Tower) - Av. Olinda, 960 - bloco I Sala 310 - Park Lozandes Goiânia - GO, 74884-120

						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</div>