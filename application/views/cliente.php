<?php
defined('BASEPATH') OR exit('No direct script access allowed');
foreach($clientes as $cliente) { }
?>
<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<div class="banner_header" style="background-image: url('<?=base_url();?>assets/img/header.png'); background-size: cover; background-position: center center; height: 300px;">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<p>&nbsp;</p><p>&nbsp;</p>
							<h1 style="color: #FFF">ATLETAS</h1>
							<p style="color: #FFF">Conheça nossos atletas e parceiros.</p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
<div class="container100h">
<div class="span5 cliente">
		<div class="container">
		<div class="tituloMob">
		<div class="row">
			<div class="col-md-6 nome"><h3><?php echo $cliente->apelido; ?></h3></div>
					<div class="col-md-6 clube">

<?php
foreach($clubes as $clube) { if($cliente->clube_atual==$clube->id) { echo '<strong>'.$clube->nome.'</strong> <img src="'.base_url().'imagens/clubes/'.$clube->escudo.'" class="imgClube" alt="">'; } } 
?>
					</div>
		</div>
</div>

			<div class="row">
				<div class="col-md-4 col-xs-12">
				
					<?php
						if($cliente->imagemInterna!="") {
							echo "<img src='".base_url()."imagens/atletas/".$cliente->imagemInterna."' class='img-responsive' />";
						} else {
							echo '<div class="boxJogador">
						<div class="borda">
						<a href="'.base_url().'cliente/'.$cliente->id.'/'.$cliente->url.'"><img src="'.base_url().'imagens/atletas/'.$cliente->imagem.'" class="imgCliente" alt=""></a>
						</div>
						</div>';
						}
					?>
				</div>
				<div class="col-md-8">

					<div class="tituloDesk"><div class="col-md-6 nome"><h3><?php echo $cliente->apelido; ?></h3></div>
					<div class="col-md-6 clube">

<?php
foreach($clubes as $clube) { if($cliente->clube_atual==$clube->id) { echo '<p>&nbsp;</p><strong>'.$clube->nome.'</strong> <img src="'.base_url().'imagens/clubes/'.$clube->escudo.'" class="imgClube" alt="">'; } } 
?>
					</div></div>

					<div class="col-md-12 col-xs-12">

<div class="col-md-7">
						<div class="boxBranco">
							<p><strong>Informações Técnicas</strong></p>

	<table class="table table-striped">
    <tbody>
      <tr>
        <td><strong>Nome completo:</strong></td>
        <td><?php echo $cliente->nome; ?></td>
      
      </tr>
      <tr>
        <td><strong>Nascimento:</strong></td>
        <td><?php echo $cliente->nascimento; ?></td>
      
      </tr>
      <tr>
        <td><strong>Altura:</strong></td>
        <td><?php echo $cliente->altura; ?></td>
        
      </tr>
      <tr>
      	<td><strong>Peso:</strong></td>
        <td><?php echo $cliente->peso; ?></td>
      </tr>
      <tr>
      	<td><strong>Posição:</strong></td>
      	<td><?php echo $cliente->posicao; ?></td>
      
      </tr>
      <tr>
      		<td><strong>Categoria:</strong></td>
        <td><?php echo $cliente->categoria; ?></td>
      </tr>
    
    </tbody>
  </table>
</div></div>
<div class="col-md-5">
	<?php
if($cliente->linkFace!=""||$cliente->linkTwitter!=""||$cliente->linkInsta!="") {
?>
<br>
					<div class="boxRedes">
						<p>Redes Oficiais</p>
						<?php if($cliente->linkFace!="") { echo '<a href="'.$cliente->linkFace.'" target="_blank"><img src="'.base_url().'assets/img/fb.png"></a>'; } ?>
						<?php if($cliente->linkTwitter!="") { echo '<a href="'.$cliente->linkTwitter.'" target="_blank"><img src="'.base_url().'assets/img/tw.png"></a>'; } ?>
						<?php if($cliente->linkInsta!="") { echo '<a href="'.$cliente->linkInsta.'" target="_blank"><img src="'.base_url().'assets/img/insta.png"></a>'; } ?>
					</div>

<?php
}
?>



</div>


<div class="col-md-12">
	
	
					<?php if($cliente->texto!="") { ?> <div style="background-color:white; padding:6px;"><div><div class="boxBranco" style="margin-top:0px;"><?php echo $cliente->texto; ?></div></div></div> <?php } ?>

</div>

					</div>
				</div>
			</div>
		</div>
</div>
</div>
