<?php
defined('BASEPATH') OR exit('No direct script access allowed');
foreach($release as $rel) {
	}
	function stripAttributes($html,$attrib) {
 $dom = new DOMDocument;                 // init new DOMDocument
$dom->loadHTML($html);                  // load HTML into it
$xpath = new DOMXPath($dom);            // create a new XPath
$nodes = $xpath->query('//*[@style]');  // Find elements with a style attribute
foreach ($nodes as $node) {              // Iterate over found elements
    $node->removeAttribute("$attrib");    // Remove style attribute
}
echo $dom->saveHTML();
}
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
				<div class="col-md-12 col-xs-12 text-center"><h1 style="text-align:center;"><?php echo $rel->titulo; ?></h1>

				</div></div>
			
					<div class="row">
						<div class="col-md-8 col-md-offset-2 col-xs-12 text-justify">
						<img src="<?=base_url();?>imagens/releases/<?php echo $rel->imagem;?>" class="img-responsive bordaRelease" alt="">
							<p><?php stripAttributes("$rel->conteudo","style"); ?></p>
						</div>
					</div>

				</div>
		
	</div>
</div>

<div class="container100h">
	<div class="span5 releases">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-xs-12"><h1>Outras Notícias</h1>
				</div></div></div>

				<div class="container">
					<div class="row">
						<?php foreach($releases as $release) { 
							$date=date_create("$release->data");
						$data=date_format($date,"d/m");
						echo '<div class="col-md-4 col-xs-12 text-venter">
						<div class="fader"><a href="'.base_url().'noticia/'.$release->id.'/'.$release->url.'">
						<div class="fdata"></div><div class="data">'.$data.'</div>
						<div class="tituloNoticia">'.$release->titulo.'</div>';
							if($release->imagem!=""&&$release->imagem!="0") { 		
							echo '<img class="blog" src="'.base_url().'imagens/releases/'.$release->imagem.'" alt="">'; } else {
							echo '<img class="blog" src="'.base_url().'imagens/releases/semimagem.jpg" alt="">';	
							}
						echo '</div></a>
					</div>';
				}
					?>
					</div>
				</div>
			</div>
		</div>