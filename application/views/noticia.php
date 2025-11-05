<?php
defined('BASEPATH') OR exit('No direct script access allowed');

foreach($noticias as $noticia) {

}
?>
 <div class="tm-top-a-box tm-full-width tm-box-bg-1 ">
            <div class="uk-container uk-container-center">
                <section id="tm-top-a" class="tm-top-a uk-grid uk-grid-collapse" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
                    <div class="uk-width-1-1 uk-row-first">
                        <div class="uk-panel">
                            <div class="uk-cover-background uk-position-relative head-wrap" style="height: 290px; background-image: url('<?=base_url();?>images/head-bg.jpg');">
                                <img class="uk-invisible" src="images/head-bg.jpg" alt="" height="290" width="1920">
                                <div class="uk-position-cover uk-flex uk-flex-center head-title">
                                    <h1>
                                        Notícias
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>


        <div class="uk-container uk-container-center alt">
            <ul class="uk-breadcrumb">
                <li><a href="<?=base_url();?>">Home</a></li>
                <li class="uk-active"><span>Notícias</span></li>
            </ul>
        </div>


        <div class="tm-bottom-a-box  ">
            <div class="uk-container uk-container-center">
                <section id="tm-bottom-a" class="tm-bottom-a uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

                    <div class="uk-width-1-1 uk-row-first">
                        <div class="uk-panel">
                            <div class="about-team-page-top-wrap">
                                <div class="uk-grid">
                                    <div class="uk-width-large-10-10 uk-width-small-1-1 left-part">
                                        <div class="top-title">
                                            <h2><?php echo $noticia->titulo; ?></h2>
                                        </div>
                                        
                                        <p><img src="<?=base_url();?>imagens/<?php echo $noticia->imagem; ?>" class="img-polaroid" style="height:320px; width:40%; object-fit:cover; object-position:top center; float:left; margin-right:8px; margin-bottom:8px;" alt=""></p><p><?php echo $noticia->conteudo; ?></p>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

       
