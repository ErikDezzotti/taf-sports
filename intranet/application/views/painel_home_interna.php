<div class="espacoTopo">
<div class="container">
  <div class="row">
    <div class="col-md-12 text-center">
      <h3>Bem vindo, <?php echo $nome; ?>!</h3>
    </div>
  </div>
  <div class="row">
  	<div class="col-md-3 text-center" style="background-color:#222222;"><p>&nbsp;</p>
	<p><img src="http://www.futpress.com.br/imagens/usuarios/<?php echo $foto; ?>" class="img-circle" style="width:150px;" alt=""></p>
  	 <h3><?php echo $nome; ?></h3>
  	 <p style="color:orange;"><?php echo $funcao; ?></p>
  	 <p><a href="<?=base_url();?>trocar-senha" class="btn btn-danger">Trocar senha</a></p></div>
  	<div class="col-md-9">Informações diárias</div>
  </div>
</div>
</div>

<?php
$this->load->view("inc_rodape");
?>