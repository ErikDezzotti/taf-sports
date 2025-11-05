<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// ✅ GAMBIARRA REMOVIDA: Loop vazio substituído por acesso direto
$conf = !empty($config) ? $config[0] : new stdClass();
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
							<?php if (!empty($paginas)): ?>
							<p><?php
								foreach($paginas as $pg) {
									echo html_escape($pg->conteudo);
								}
							?></p>
							<?php endif; ?>

							<?php if ($this->session->flashdata('success')): ?>
							<div class="alert alert-success" role="alert">
								<strong>Sucesso!</strong> <?= html_escape($this->session->flashdata('success')) ?>
							</div>
							<?php endif; ?>

							<?php if ($this->session->flashdata('error')): ?>
							<div class="alert alert-danger" role="alert">
								<strong>Erro!</strong> <?= $this->session->flashdata('error') ?>
							</div>
							<?php endif; ?>

<form method="POST" action="<?=base_url();?>contato/enviar">
  <div class="form-group">
    <label for="nome">Nome *</label>
    <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome..." value="<?= html_escape(set_value('nome')) ?>" required="required" maxlength="100">
  </div>
  <div class="form-group">
    <label for="email">Email *</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu email..." value="<?= html_escape(set_value('email')) ?>" required="required" maxlength="100">
  </div>
  <div class="form-group">
    <label for="telefone">Telefone</label>
    <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone com ddd..." value="<?= html_escape(set_value('telefone')) ?>" maxlength="20">
  </div>
  <div class="form-group">
    <label for="assunto">Assunto *</label>
    <input type="text" class="form-control" id="assunto" name="assunto" placeholder="Assunto da mensagem..." value="<?= html_escape(set_value('assunto')) ?>" required="required" maxlength="200">
  </div>
  <div class="form-group">
    <label for="mensagem">Mensagem *</label>
    <textarea name="mensagem" id="mensagem" cols="30" rows="10" class="form-control" placeholder="Sua mensagem..." required="required" maxlength="2000"><?= html_escape(set_value('mensagem')) ?></textarea>
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