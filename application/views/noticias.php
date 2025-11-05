<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
        <div class="tm-top-a-box tm-full-width tm-box-bg-1 ">
            <div class="uk-container uk-container-center">
                <section id="tm-top-a" class="tm-top-a uk-grid uk-grid-collapse" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
                    <div class="uk-width-1-1 uk-row-first">
                        <div class="uk-panel">
                            <div class="uk-cover-background uk-position-relative head-wrap" style="height: 290px; background-image: url('images/head-bg.jpg');">
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
            <div id="tm-middle" class="tm-middle uk-grid" data-uk-grid-match="" data-uk-grid-margin="">
                <div class="tm-main uk-width-medium-4-4">
                   
                    <div class="contentpaneopen">
                       <main id="tm-content" class="tm-content">
                            <div class="uk-grid" data-uk-grid-match="">

                            <?php 
                            foreach($noticias as $not) {
                                            $descricao=strip_tags($not->conteudo);
                                            $descricao=substr("$descricao",0,120);
                                            $data=date("d/m/Y", strtotime($not->data));

                            echo '<div class="uk-width-large-1-3 uk-width-medium-2-4 uk-width-small-2-4 list-article uk-flex uk-flex-column">
                                    <div class="wrapper">
                                        <div class="img-wrap uk-flex-wrap-top">
                                            <a href="'.base_url().'noticia/'.$not->id.'/'.$not->url.'">
                                            <img src="'.base_url().'imagens/'.$not->imagem.'" class="img-polaroid" style="height:250px; width:100%; object-fit:cover; object-position:top center; " alt="">
                                            </a>        
                                        </div>
                                        <div class="info uk-flex-wrap-middle">
                                            <div class="date">
                                                '.$data.'           
                                            </div>
                                            <div class="name">
                                                <h4>
                                                    <a href="'.base_url().'noticia/'.$not->id.'/'.$not->url.'">
                                                    '.$not->titulo.'</a>        
                                                </h4>
                                            </div>
                                            <div class="text">
                                                <p>'.$descricao.'</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="article-actions uk-flex-wrap-bottom">
                                        <div class="count">&nbsp;</div>
                                        <div class="read-more"><a href="'.base_url().'noticia/'.$not->id.'/'.$not->url.'">Leia mais</a></div>
                                    </div>
                                </div>';
                            }

                                ?>


                             
                            </div>
                         
                        </main>
                    </div>
   

                </div>
                
            </div>
        </div></div>