<?php
foreach ($config as $conf) {
}
?>

<!-- Inicio Banners -->

<div class="container100h">

    <div class="span5 home1">

        <div class="container fill" style="padding-left:0px; padding-right:0px;">

            <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel" data-wrap="true" data-interval="5000">

                <?php
                // Filtrar apenas banners que TÊM arquivo de imagem
                $banners_validos = array();
                foreach ($banners as $banner) {
                    $caminho_imagem = 'imagens/banners/' . $banner->imagem;
                    if (file_exists($caminho_imagem)) {
                        $banners_validos[] = $banner;
                    }
                }
                ?>

                <ol class="carousel-indicators">
                    <?php
                    $x = 0;
                    foreach ($banners_validos as $banner) {
                        if ($x == 0) {
                            echo '<li data-target="#myCarousel" data-slide-to="0" class="active"></li>';
                        } else {
                            echo '<li data-target="#myCarousel" data-slide-to="' . $x . '"></li>';
                        }
                        $x++;
                    }
                    ?>
                </ol>

                <div class="carousel-inner" role="listbox">
                    <?php
                    $x = 0;
                    foreach ($banners_validos as $banner) {
                        if ($x == 0) {
                            echo '<div class="active item">
                    <a href="' . $banner->link . '"><div class="fill" style="background-image:url(' . base_url() . 'imagens/banners/' . $banner->imagem . ');">
                    </div></a></div>';
                        } else {
                            echo '<div class="item">
                <a href="' . $banner->link . '"><div class="fill" style="background-image:url(' . base_url() . 'imagens/banners/' . $banner->imagem . ');">
                </div></a>
            </div>';
                        }
                        $x++;
                    }
                    ?>

                </div>

                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">

                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>

                    <span class="sr-only">Previous</span>

                </a>

                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">

                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>

                    <span class="sr-only">Next</span>

                </a>

            </div>

        </div>

    </div>

    <!--Fim Banner-->

    <!--BANNER MOB-->

    <div class="bannerMob">

        <div id="myCarouselMob" class="carousel slide carousel-fade" data-ride="carousel" data-wrap="true" data-interval="5000">

            <?php
            // Filtrar apenas banners mobile que TÊM arquivo de imagem
            $banners_mob_validos = array();
            foreach ($banners as $banner) {
                $caminho_imagem_mob = 'imagens/banners/' . $banner->imagemMob;
                if (file_exists($caminho_imagem_mob)) {
                    $banners_mob_validos[] = $banner;
                }
            }
            ?>

            <div class="carousel-inner" role="listbox">
                <?php
                $x = 0;
                foreach ($banners_mob_validos as $banner) {
                    if ($x == 0) {
                        echo '<div class="active item">
            <img src="' . base_url() . 'imagens/banners/' . $banner->imagemMob . '" class="img-responsive" alt="">
        </div>';
                    } else {
                        echo '<div class="item">
        <img src="' . base_url() . 'imagens/banners/' . $banner->imagemMob . '" class="img-responsive" alt="">
    </div>';
                    }
                    $x++;
                }
                ?>

            </div>

            <a class="left carousel-control" href="#myCarouselMob" role="button" data-slide="prev">

                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>

                <span class="sr-only">Previous</span>

            </a>

            <a class="right carousel-control" href="#myCarouselMob" role="button" data-slide="next">

                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>

                <span class="sr-only">Next</span>

            </a>

        </div>

    </div>

    <!--Inicio sobre-->
    <section class="taf-about" aria-labelledby="about-heading">
        <div class="taf-about__grid">
            <!-- Brand Side - Logo + Label -->
            <div class="taf-about__brand">
                <div class="taf-about__brand-logo">
                    <img src="<?=base_url();?>assets/img/taf.png" alt="TAF Sports - Gestão de Carreiras no Futebol" />
                </div>
                <p class="taf-about__brand-label">SOBRE NÓS</p>
            </div>

            <!-- Content Side - Título + Copy -->
            <div class="taf-about__content">
                <h2 class="taf-about__content-title" id="about-heading">
                    <span class="iconify taf-about__content-title-icon" data-icon="ion:football"></span>
                    Conheça a <span>TAF Sports</span>
                </h2>
                <?php
                foreach($paginas as $pg) {
                    // Parse o conteúdo em parágrafos
                    $conteudo = strip_tags($pg->conteudo, '<p><br>');
                    $conteudo = preg_replace('/<p[^>]*>/', '', $conteudo);
                    $conteudo = str_replace('</p>', "\n\n", $conteudo);
                    $conteudo = preg_replace('/\n{3,}/', "\n\n", $conteudo);
                    $paragraphs = array_filter(array_map('trim', explode("\n\n", $conteudo)));
                    $paragraphs = array_values($paragraphs);

                    // Separar último parágrafo (missão) dos demais
                    $mission_paragraph = array_pop($paragraphs); // Remove último

                    // Imprimir parágrafos normais
                    foreach ($paragraphs as $paragraph) {
                        echo '<p class="taf-about__content-body">' . $paragraph . '</p>';
                    }

                    // Imprimir bloco de missão exclusivo
                    if (!empty($mission_paragraph)) {
                        echo '<div class="taf-about__mission-box">';
                        echo '  <div class="taf-about__mission-header">';
                        echo '    <span class="iconify taf-about__mission-icon" data-icon="mdi:trophy"></span>';
                        echo '    <h3 class="taf-about__mission-title">Nossa Missão</h3>';
                        echo '  </div>';
                        echo '  <p class="taf-about__mission-text">' . $mission_paragraph . '</p>';
                        echo '</div>';
                    }
                }
                ?>
            </div>
        </div>
    </section>
    <!-- Fim sobre -->

    <!-- Hero Section - Craques -->
    <section class="taf-players-hero" aria-labelledby="players-heading">
        <div class="taf-players-hero__container">
            <h2 class="taf-players-hero__title" id="players-heading">Conheça nossos craques</h2>
            <p class="taf-players-hero__subtitle">
                De jovens talentos a estrelas consagradas, gerenciamos carreiras de atletas que brilham dentro e fora de campo com excelência e dedicação.
            </p>
        </div>

        <!-- Grid de Atletas DENTRO da seção laranja -->
        <div class="container">
            <div class="row">

                <?php
						$x = 0;
						foreach ($clientesP as $cliente) {
							echo '

							<div class="col-md-3 col-xs-12 text-center">

							<div class="boxJogador">
							<div class="borda">
							<a href="' . base_url() . 'atleta/' . $cliente->id . '/' . $cliente->url . '"><img src="' . base_url() . 'imagens/atletas/' . $cliente->imagem . '" class="imgCliente" alt="' . $cliente->apelido . ' - ' . $cliente->posicao . '" loading="lazy"></a>

							<div class="posicao">' . $cliente->posicao . '</div>
							<div class="nome" style="font-size:14px">' . $cliente->apelido . '</div>
							<div class="escudo">

							';

							foreach ($clubes as $clube) {
								if ($cliente->clube_atual == $clube->id) {
									echo '<img src="' . base_url() . 'imagens/clubes/' . $clube->escudo . '" alt="Escudo ' . $clube->nome . '" loading="lazy">';
								}
							}

							echo '</div>
							</div>
							</div>

							</div>


							';
							$x++;
						}
						?>

            </div>
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <a href="<?=base_url();?>clientes" class="taf-btn-primary">Ver todos os jogadores</a>
                        <a href="<?=base_url();?>contato" class="taf-btn-primary">Fale conosco</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fim Hero Section -->

    <!-- CTA + Instagram Section - Unified -->
    <section class="taf-cta-instagram" aria-labelledby="cta-instagram-heading">
        <div class="taf-cta-instagram__grid">

            <!-- Left Side: CTA -->
            <div class="taf-cta-instagram__cta-side">
                <h2 class="taf-cta-instagram__cta-title" id="cta-instagram-heading">
                    Pronto para decolar sua carreira?
                </h2>
                <p class="taf-cta-instagram__cta-text">
                    Se você é jogador ou treinador e busca uma agência que alia experiência, seriedade e visão estratégica, a TAF Sports é a parceira certa para conduzir sua carreira com excelência. Nosso compromisso é oferecer suporte completo e gestão profissional, garantindo segurança e direcionamento em cada etapa da sua jornada dentro e fora de campo.
                </p>
            </div>

            <!-- Right Side: Instagram Social Proof -->
            <div class="taf-cta-instagram__social-side">
                <h3 class="taf-cta-instagram__social-title">
                    <a href="https://www.instagram.com/tafsportsbr/" target="_blank" rel="noopener noreferrer" class="taf-cta-instagram__social-link">
                        <span class="iconify taf-cta-instagram__social-icon" data-icon="mdi:instagram" aria-hidden="true"></span>
                        Siga-nos em @tafsportsbr
                    </a>
                </h3>

                <div class="taf-cta-instagram__image-wrapper">
                    <a href="https://www.instagram.com/tafsportsbr/" target="_blank" rel="noopener noreferrer">
                        <img src="<?=base_url();?>assets/img/insta.png"
                             alt="Feed do Instagram da TAF Sports mostrando nossos atletas em ação"
                             class="taf-cta-instagram__image"
                             loading="lazy" />
                    </a>
                </div>

                <p class="taf-cta-instagram__social-text">
                    Acompanhe os bastidores da TAF Sports e veja de perto a trajetória dos nossos atletas. No Instagram, você confere momentos exclusivos, conquistas, treinos e tudo que acontece na vida de quem é gerenciado por uma das agências mais sérias do futebol brasileiro. Se você respira futebol, vem com a gente!
                </p>
            </div>

        </div>
    </section>
    <!-- Fim CTA + Instagram -->
