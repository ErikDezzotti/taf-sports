<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// ✅ GAMBIARRA REMOVIDA: Loop vazio substituído por acesso direto
$conf = !empty($config) ? $config[0] : new stdClass();
?>

<!-- Inicio Banners -->

<div class="container100h">

    <div class="span5 home1">

        <div class="container fill" style="padding-left:0px; padding-right:0px;">

            <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel" data-wrap="true" data-interval="5000">

                <?php
                // ✅ REFATORAÇÃO: Banners já vêm filtrados do model (sem file_exists na view)
                // Antes: Lógica de negócio (file_exists) estava aqui
                // Agora: Model retorna apenas banners válidos
                ?>

                <ol class="carousel-indicators">
                    <?php
                    $x = 0;
                    foreach ($banners as $banner):
                        $active = ($x == 0) ? 'class="active"' : '';
                    ?>
                        <li data-target="#myCarousel" data-slide-to="<?= $x ?>" <?= $active ?>></li>
                    <?php
                        $x++;
                    endforeach;
                    ?>
                </ol>

                <div class="carousel-inner" role="listbox">
                    <?php
                    $x = 0;
                    foreach ($banners as $banner):
                        $active_class = ($x == 0) ? 'active ' : '';
                        $link_safe = html_escape($banner->link);
                        $img_safe = html_escape($banner->imagem);
                    ?>
                    <div class="<?= $active_class ?>item">
                        <a href="<?= $link_safe ?>">
                            <div class="fill" style="background-image:url(<?= base_url() ?>imagens/banners/<?= $img_safe ?>);"></div>
                        </a>
                    </div>
                    <?php
                        $x++;
                    endforeach;
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

            <div class="carousel-inner" role="listbox">
                <?php
                $x = 0;
                foreach ($banners as $banner):
                    $active_class = ($x == 0) ? 'active ' : '';
                    $img_mob_safe = html_escape($banner->imagemMob ?? $banner->imagem);
                ?>
                <div class="<?= $active_class ?>item">
                    <img src="<?= base_url() ?>imagens/banners/<?= $img_mob_safe ?>" class="img-responsive" alt="">
                </div>
                <?php
                    $x++;
                endforeach;
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
				// ✅ OTIMIZAÇÃO: Loop N+1 eliminado usando clubes indexados
				// Antes: Para cada atleta, loop em TODOS os clubes O(n²)
				// Agora: Acesso direto ao clube por ID O(1)
				foreach ($clientesP as $cliente):
					$cliente_id_safe = html_escape($cliente->id);
					$cliente_url_safe = html_escape($cliente->url);
					$cliente_imagem_safe = html_escape($cliente->imagem);
					$cliente_apelido_safe = html_escape($cliente->apelido);
					$cliente_posicao_safe = html_escape($cliente->posicao);

					// ✅ OTIMIZAÇÃO: Acesso direto O(1) em vez de loop O(n)
					$clube = isset($clubes[$cliente->clube_atual]) ? $clubes[$cliente->clube_atual] : null;
				?>

				<div class="col-md-3 col-xs-12 text-center">
					<div class="boxJogador">
						<div class="borda">
							<a href="<?= base_url() ?>atleta/<?= $cliente_id_safe ?>/<?= $cliente_url_safe ?>">
								<img src="<?= base_url() ?>imagens/atletas/<?= $cliente_imagem_safe ?>"
								     class="imgCliente"
								     alt="<?= $cliente_apelido_safe ?> - <?= $cliente_posicao_safe ?>"
								     loading="lazy">
							</a>

							<div class="posicao"><?= $cliente_posicao_safe ?></div>
							<div class="nome" style="font-size:14px"><?= $cliente_apelido_safe ?></div>
							<div class="escudo">
								<?php if ($clube): ?>
									<img src="<?= base_url() ?>imagens/clubes/<?= html_escape($clube->escudo) ?>"
									     alt="Escudo <?= html_escape($clube->nome) ?>"
									     loading="lazy">
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>

				<?php endforeach; ?>

            </div>
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <a href="<?=base_url();?>clientes" class="taf-btn-primary">
                            <span class="iconify" data-icon="ion:football" aria-hidden="true"></span>
                            Ver todos os jogadores
                        </a>
                        <a href="<?=base_url();?>contato" class="taf-btn-primary">
                            <span class="iconify" data-icon="mdi:email-outline" aria-hidden="true"></span>
                            Fale conosco
                        </a>
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
                    Se você é jogador ou treinador e busca uma agência que alia <strong>experiência, seriedade e visão estratégica</strong>, a TAF Sports é a <strong>parceira certa</strong> para conduzir sua carreira com excelência. Nosso compromisso é oferecer <strong>suporte completo e gestão profissional</strong>, garantindo segurança e direcionamento em cada etapa da sua jornada dentro e fora de campo.
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
