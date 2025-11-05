<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container100h">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center"><h1>NOTÍCIAS</h1></div>
			</div>
		
	</div>
	<div class="span5 releases">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-xs-12">
				</div></div></div>
				<form method="GET" action="<?=base_url();?>busca-release">
<div class="buscaRelease">
	<div class="container">
	<div class="row">
		<div class="col-md-12 col-xs-12"><p class="titulo">Busque nossas noticias publicadas:</p></div>
	</div>
		<div class="row">
			<div class="col-md-7 col-xs-12 text-center"><input type="text" class="form-control" placeholder="Digite para buscar..." value="<?php echo $this->input->GET('buscar'); ?>" name="buscar"></div>
			<div class="col-md-3 col-xs-12 text-center">
				<select name="cliente" id="" class="form-control">
					<option value="" selected> Todos os clientes</option>
					<?php
						foreach($clientes as $cliente) {
							echo '<option value="'.$cliente->id.'">'.$cliente->apelido.'</option>';
						}
					?>
				</select>
			</div>
			<div class="col-md-2 col-xs-12 text-center"><button class="btn btn-default" type="submit">Pesquisar</button></div>
		</div>
	</div>
</div>
</form>
<?php
if($linha!="") { 
echo '
<div class="container">
<div class="row">
<div class="col-md-12">
<h3>'.$linha.'</h3>
</div>
</div>
</div>
';
}
?>
				<div class="container">
					<div class="row">
						<?php 
						$x=0;
						foreach($releases as $release) { 
							$date=date_create("$release->data");
						$data=date_format($date,"d/m");
						echo '<div class="col-md-4 col-xs-12">
						<div class="fader"><a href="'.base_url().'noticia/'.$release->id.'/'.$release->url.'">
						<div class="fdata"></div><div class="data">'.$data.'</div>
						<div class="tituloNoticia">'.$release->titulo.'</div>
								
								';
						
						if($release->imagem!=""&&$release->imagem!="0") { 		
							echo '<img class="blog" src="'.base_url().'imagens/releases/'.$release->imagem.'" alt="">'; } else {
							echo '<img class="blog" src="'.base_url().'imagens/releases/semimagem.jpg" alt="">';	
							}
						echo '</div></a>
					</div>';
					$x++;
				}
				if($x==0) {
					echo "<p>Nenhum resultado encontrado.</p>";
				}
					?>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</div>