<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// ✅ GAMBIARRA REMOVIDA: Loop vazio substituído por acesso direto
$conf = !empty($config) ? $config[0] : new stdClass();

// ✅ SEO HELPER: Carrega helper centralizado de SEO
$this->load->helper('seo');
$seo_config = taf_seo_config();
$seo_keywords = isset($seo_config['keywords'][$pagina]) ? $seo_config['keywords'][$pagina] : $seo_config['keywords']['home'];
$seo_description = taf_seo_description($pagina, isset($descricao) ? $descricao : '');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title><?= html_escape($titulo) ?> | TAF Sports - Assessoria Esportiva</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0" />

  <!-- ========== SEO META TAGS ESSENCIAIS ========== -->
  <meta name="description" content="<?= html_escape($seo_description) ?>" />
  <meta name="keywords" content="<?= html_escape($seo_keywords) ?>" />
  <meta name="author" content="TAF Sports - Assessoria Esportiva" />
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />
  <meta name="googlebot" content="index, follow" />
  <meta name="bingbot" content="index, follow" />
  <link rel="canonical" href="https://www.tafsportsbr.com/<?= html_escape($this->uri->uri_string()) ?>" />

  <!-- ========== GEO/LOCAL SEO ========== -->
  <meta name="geo.region" content="BR-GO" />
  <meta name="geo.placename" content="Goiânia" />
  <meta name="geo.position" content="-16.6869;-49.2648" />
  <meta name="ICBM" content="-16.6869, -49.2648" />

  <!-- ========== FAVICONS & APP ICONS ========== -->
  <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url(); ?>assets/img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url(); ?>assets/img/favicon-16x16.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url(); ?>assets/img/apple-touch-icon.png">
  <link rel="manifest" href="<?= base_url(); ?>site.webmanifest">
  <link rel="mask-icon" href="<?= base_url(); ?>assets/img/taf.png" color="#f18322">
  <meta name="msapplication-TileColor" content="#f18322">
  <meta name="msapplication-config" content="<?= base_url(); ?>browserconfig.xml">
  <meta name="theme-color" content="#f18322">

  <!-- ========== OPEN GRAPH (FACEBOOK/LINKEDIN) ========== -->
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://www.tafsportsbr.com/<?= html_escape($this->uri->uri_string()) ?>">
  <meta property="og:title" content="<?= html_escape($titulo) ?> | TAF Sports - Assessoria Esportiva">
  <meta property="og:description" content="<?= html_escape($seo_description) ?>">
  <meta property="og:site_name" content="TAF Sports - Assessoria Esportiva Profissional">
  <meta property="og:locale" content="pt_BR" />
  <meta property="og:image" content="<?= isset($imagem) ? html_escape($imagem) : base_url() . 'assets/img/taf.png' ?>">
  <meta property="og:image:width" content="1200" />
  <meta property="og:image:height" content="630" />
  <meta property="og:image:alt" content="TAF Sports - Assessoria Esportiva para Atletas e Treinadores de Futebol" />

  <!-- ========== TWITTER CARDS ========== -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:site" content="@tafsportsbr" />
  <meta name="twitter:creator" content="@tafsportsbr" />
  <meta name="twitter:title" content="<?= html_escape($titulo) ?> | TAF Sports" />
  <meta name="twitter:description" content="<?= html_escape($seo_description) ?>" />
  <meta name="twitter:image" content="<?= isset($imagem) ? html_escape($imagem) : base_url() . 'assets/img/taf.png' ?>" />
  <meta name="twitter:image:alt" content="TAF Sports - Assessoria Esportiva" />

  <!-- ========== SCHEMA.ORG JSON-LD STRUCTURED DATA ========== -->

  <!-- Schema: Organization (sempre presente) -->
  <?= taf_schema_organization() ?>

  <!-- Schema: BreadcrumbList (sempre presente) -->
  <?= taf_schema_breadcrumb($pagina, isset($titulo) ? $titulo : '') ?>

  <!-- Schema: WebSite com SearchAction (apenas na home) -->
  <?php if ($pagina == "home"): ?>
    <?= taf_schema_website() ?>
    <?= taf_schema_faq() ?>
  <?php endif; ?>

  <!-- Schema: Serviços (apenas na página de serviços) -->
  <?php if ($pagina == "servicos"): ?>
    <?= taf_schema_services() ?>
  <?php endif; ?>

  <!-- Schema: AboutPage (apenas na página empresa) -->
  <?php if ($pagina == "empresa"): ?>
    <?= taf_schema_about_page() ?>
    <?= taf_schema_person() ?>
  <?php endif; ?>

  <!-- Schema: ContactPage (apenas na página contato) -->
  <?php if ($pagina == "contato"): ?>
    <?= taf_schema_contact_page() ?>
  <?php endif; ?>

  <!-- Schema: Atleta individual (apenas na página cliente) -->
  <?php if ($pagina == "cliente" && isset($clientes) && !empty($clientes)): ?>
    <?php
    $cli = $clientes[0];
    $clube = isset($clubes[$cli->clube_atual]) ? $clubes[$cli->clube_atual] : null;
    echo taf_schema_athlete($cli, $clube);
    ?>
  <?php endif; ?>
  <link href="https://fonts.googleapis.com/css?family=Economica" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Coda" rel="stylesheet">
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css"
    href="<?= base_url(); ?>assets/stylesheets/base.css?v=<?= filemtime(FCPATH . 'assets/stylesheets/base.css') ?>">
  <link rel="stylesheet" type="text/css"
    href="<?= base_url(); ?>assets/stylesheets/taf-design-system.css?v=<?= filemtime(FCPATH . 'assets/stylesheets/taf-design-system.css') ?>">
  <link rel="stylesheet" type="text/css"
    href="<?= base_url(); ?>assets/stylesheets/lightbox.min.css?v=<?= filemtime(FCPATH . 'assets/stylesheets/lightbox.min.css') ?>">
  <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>

  <?php
  if ($pagina == "home") {
    echo '<link rel="stylesheet" type="text/css" href="' . base_url() . 'assets/stylesheets/home.css?v=' . filemtime(FCPATH . 'assets/stylesheets/home.css') . '">';
  }
  if ($pagina == "empresa") {
    echo '<link rel="stylesheet" type="text/css" href="' . base_url() . 'assets/stylesheets/empresa.css?v=' . filemtime(FCPATH . 'assets/stylesheets/empresa.css') . '">
    <link rel="stylesheet" href="' . base_url() . 'assets/unitegallery/css/unite-gallery.css?v=' . filemtime(FCPATH . 'assets/unitegallery/css/unite-gallery.css') . '" type="text/css" />';
  }

  if ($pagina == "clientes" || $pagina == "home") {
    echo '<link rel="stylesheet" type="text/css" href="' . base_url() . 'assets/stylesheets/clientes.css?v=' . filemtime(FCPATH . 'assets/stylesheets/clientes.css') . '">';
  }

  if ($pagina == "cliente") {
    echo '<link rel="stylesheet" type="text/css" href="' . base_url() . 'assets/stylesheets/cliente.css?v=' . filemtime(FCPATH . 'assets/stylesheets/cliente.css') . '">';
  }
  if ($pagina == "contato") {
    echo '<link rel="stylesheet" type="text/css" href="' . base_url() . 'assets/stylesheets/contato.css?v=' . filemtime(FCPATH . 'assets/stylesheets/contato.css') . '">';
  }
  if ($pagina == "servicos") {
    echo '<link rel="stylesheet" type="text/css" href="' . base_url() . 'assets/stylesheets/servicos.css?v=' . filemtime(FCPATH . 'assets/stylesheets/servicos.css') . '">';
  }
  if ($pagina == "erro404") {
    echo '<link rel="stylesheet" type="text/css" href="' . base_url() . 'assets/stylesheets/erro404.css?v=' . filemtime(FCPATH . 'assets/stylesheets/erro404.css') . '">';
  }
  ?>

  <style>
    .buscaRelease,
    .fader {
      background-color: #4baabf !important;
    }

    .fdata {
      border-color: #006491 transparent transparent transparent !important;
    }

    .itemEquipe .conteudo .funcao {
      color: #f18322 !important;
    }

    .navbar-nav {
      float: right;
    }
  </style>
  <?php if ($tipo == "Feminino") { ?>
    <style>
      .boxJogador .borda {
        background: #D06666;
        background: -webkit-linear-gradient(top, #D06666 0%, #B20000 100%);
        background: -moz-linear-gradient(top, #D06666 0%, #B20000 100%);
        background: linear-gradient(to bottom, #D06666 0%, #B20000 100%)
      }
    </style>
  <?php } else { ?>
    <style>
      .boxJogador .borda {
        background: #f18322;
        background: -webkit-linear-gradient(top, #f0ab6e 0%, #f18322 100%);
        background: -moz-linear-gradient(top, #f0ab6e 0%, #f18322 100%);
        background: linear-gradient(to bottom, #f0ab6e 0%, #f18322 100%)
      }



      .footer {
        text-align: center;
        color: #fff;
        position: relative;
        padding: 50px 0;
        margin-top: 100px;
      }

      .footer:before {
        content: "";
        position: absolute;
        inset: 0;
        transform: skewy(-3deg);
        transform-origin: 50% 0;
        outline: 1px solid transparent;
        backface-visibility: hidden;
      }

      .footer.bg-one:before {
        background-color: black;
      }

      .footer .content {
        margin: 0 auto;
        padding: 1.5em;
        position: relative;
        text-align: right;
      }

      .footer .content-last {
        background-color: black;
        width: 100%;
        height: 100px;
        position: absolute;
        bottom: -50px;
      }

      .footer__nav {
        margin-top: 48px;
      }

      .footer__nav a {
        color: #fff;
        text-decoration: none;
        margin: 0 .5rem;
        font-weight: 700;
        text-transform: uppercase;
        padding-left: 10px;
      }

      .text-white {
        --bs-text-opacity: 1;
        color: white !important;
      }

      .footer__rights {
        padding-top: 48px;
        font-size: 12px;
      }
    </style>
  <?php } ?>

</head>

<body>
  <!-- TAF Sports Header - Modern Design -->
  <header class="taf-header" role="banner">
    <div class="taf-header__container">
      <!-- Logo -->
      <a href="<?= base_url(); ?>" class="taf-header__logo" aria-label="TAF Sports - Página Inicial">
        <img src="<?= base_url(); ?>assets/img/taf.png" alt="TAF Sports Logo" />
      </a>

      <!-- Desktop Navigation -->
      <nav class="taf-nav" role="navigation" aria-label="Navegação Principal">
        <ul class="taf-nav__list">
          <li class="taf-nav__item">
            <a href="<?= base_url(); ?>" class="taf-nav__link <?php if ($pagina == "home") {
              echo 'active';
            } ?>"
              aria-current="<?php if ($pagina == "home") {
                echo 'page';
              } ?>">
              Home
            </a>
          </li>
          <li class="taf-nav__item">
            <a href="<?= base_url(); ?>empresa" class="taf-nav__link <?php if ($pagina == "empresa") {
              echo 'active';
            } ?>"
              aria-current="<?php if ($pagina == "empresa") {
                echo 'page';
              } ?>">
              Sobre Nós
            </a>
          </li>
          <li class="taf-nav__item">
            <a href="<?= base_url(); ?>servicos"
              class="taf-nav__link <?php if ($pagina == "servicos") {
                echo 'active';
              } ?>"
              aria-current="<?php if ($pagina == "servicos") {
                echo 'page';
              } ?>">
              Serviços
            </a>
          </li>
          <li class="taf-nav__item">
            <a href="<?= base_url(); ?>clientes"
              class="taf-nav__link <?php if ($pagina == "clientes") {
                echo 'active';
              } ?>"
              aria-current="<?php if ($pagina == "clientes") {
                echo 'page';
              } ?>">
              Clientes
            </a>
          </li>
          <li class="taf-nav__item">
            <a href="<?= base_url(); ?>contato" class="taf-nav__link <?php if ($pagina == "contato") {
              echo 'active';
            } ?>"
              aria-current="<?php if ($pagina == "contato") {
                echo 'page';
              } ?>">
              Contato
            </a>
          </li>
          <li class="taf-nav__item">
            <a href="<?= base_url(); ?>contato" class="taf-nav__link taf-nav__cta">
              Fale Conosco
            </a>
          </li>
        </ul>
      </nav>

      <!-- Social Media Icons -->
      <div class="taf-social" aria-label="Redes Sociais">
        <a href="#" class="taf-social__link" aria-label="Facebook" target="_blank" rel="noopener">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
            <path
              d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
          </svg>
        </a>
        <a href="#" class="taf-social__link" aria-label="X (Twitter)" target="_blank" rel="noopener">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
            <path
              d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
          </svg>
        </a>
        <a href="#" class="taf-social__link" aria-label="YouTube" target="_blank" rel="noopener">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
            <path
              d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z" />
          </svg>
        </a>
        <a href="#" class="taf-social__link" aria-label="Instagram" target="_blank" rel="noopener">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
            <path
              d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
          </svg>
        </a>
        <a href="#" class="taf-social__link" aria-label="TikTok" target="_blank" rel="noopener">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
            <path
              d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 5 20.1a6.34 6.34 0 0 0 10.86-4.43v-7a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-1-.1z" />
          </svg>
        </a>
      </div>

      <!-- Mobile Header Actions: CTA + Bola + Hamburger -->
      <div class="taf-mobile-header-actions">
        <!-- CTA Fale Conosco -->
        <a href="<?= base_url(); ?>contato" class="taf-mobile-header-cta">
          Fale Conosco
        </a>

        <!-- Separador -->
        <div class="taf-mobile-separator" aria-hidden="true"></div>

        <!-- Bola de Futebol Animada -->
        <div class="taf-mobile-football" aria-hidden="true">
          <span class="iconify" data-icon="ion:football"></span>
        </div>

        <!-- Separador -->
        <div class="taf-mobile-separator" aria-hidden="true"></div>

        <!-- Mobile Menu Toggle -->
        <button class="taf-mobile-toggle" id="tafMobileToggle" aria-label="Abrir menu de navegação"
          aria-expanded="false" aria-controls="tafMobileMenu">
          <div class="taf-hamburger">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </button>
      </div>
    </div>
  </header>

  <!-- Mobile Menu Fullscreen Overlay -->
  <div class="taf-mobile-menu" id="tafMobileMenu" role="dialog" aria-modal="true" aria-label="Menu de Navegação">
    <!-- Close Button -->
    <button class="taf-mobile-close" id="tafMobileClose" aria-label="Fechar menu">
      <svg class="taf-mobile-close__icon" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <line x1="18" y1="6" x2="6" y2="18"></line>
        <line x1="6" y1="6" x2="18" y2="18"></line>
      </svg>
    </button>

    <!-- Logo no Menu Mobile (Maior e mais impactante) -->
    <div class="taf-mobile-logo">
      <img src="<?= base_url(); ?>assets/img/taf.png" alt="TAF Sports Logo" />
    </div>

    <!-- Navegação Principal -->
    <nav class="taf-mobile-nav" role="navigation" aria-label="Navegação Mobile">
      <ul class="taf-mobile-nav__list">
        <li class="taf-mobile-nav__item">
          <a href="<?= base_url(); ?>" class="taf-mobile-nav__link <?php if ($pagina == "home") {
            echo 'active';
          } ?>"
            aria-current="<?php if ($pagina == "home") {
              echo 'page';
            } ?>">
            Home
            <span class="taf-mobile-nav__arrow" aria-hidden="true">→</span>
          </a>
        </li>
        <li class="taf-mobile-nav__item">
          <a href="<?= base_url(); ?>empresa"
            class="taf-mobile-nav__link <?php if ($pagina == "empresa") {
              echo 'active';
            } ?>"
            aria-current="<?php if ($pagina == "empresa") {
              echo 'page';
            } ?>">
            Sobre Nós
            <span class="taf-mobile-nav__arrow" aria-hidden="true">→</span>
          </a>
        </li>
        <li class="taf-mobile-nav__item">
          <a href="<?= base_url(); ?>servicos"
            class="taf-mobile-nav__link <?php if ($pagina == "servicos") {
              echo 'active';
            } ?>"
            aria-current="<?php if ($pagina == "servicos") {
              echo 'page';
            } ?>">
            Serviços
            <span class="taf-mobile-nav__arrow" aria-hidden="true">→</span>
          </a>
        </li>
        <li class="taf-mobile-nav__item">
          <a href="<?= base_url(); ?>clientes"
            class="taf-mobile-nav__link <?php if ($pagina == "clientes") {
              echo 'active';
            } ?>"
            aria-current="<?php if ($pagina == "clientes") {
              echo 'page';
            } ?>">
            Clientes
            <span class="taf-mobile-nav__arrow" aria-hidden="true">→</span>
          </a>
        </li>
        <li class="taf-mobile-nav__item">
          <a href="<?= base_url(); ?>contato"
            class="taf-mobile-nav__link <?php if ($pagina == "contato") {
              echo 'active';
            } ?>"
            aria-current="<?php if ($pagina == "contato") {
              echo 'page';
            } ?>">
            Contato
            <span class="taf-mobile-nav__arrow" aria-hidden="true">→</span>
          </a>
        </li>
      </ul>
    </nav>

    <!-- CTA Button - Fale Conosco -->
    <div class="taf-mobile-cta">
      <a href="<?= base_url(); ?>contato" class="taf-mobile-cta__button">
        <span class="iconify" data-icon="mdi:email-outline" aria-hidden="true"></span>
        Fale Conosco
      </a>
    </div>

    <!-- Instagram CTA -->
    <div class="taf-mobile-instagram">
      <a href="https://www.instagram.com/tafsportsbr/" target="_blank" rel="noopener noreferrer"
        class="taf-mobile-instagram__link">
        <span class="iconify taf-mobile-instagram__icon" data-icon="mdi:instagram" aria-hidden="true"></span>
        Siga-nos em @tafsportsbr
      </a>
    </div>

    <!-- Redes Sociais -->
    <div class="taf-mobile-social">
      <a href="https://www.facebook.com/tafsportsbr/" target="_blank" rel="noopener noreferrer"
        class="taf-mobile-social__link" aria-label="Facebook">
        <span class="iconify" data-icon="mdi:facebook" aria-hidden="true"></span>
      </a>
      <a href="https://www.instagram.com/tafsportsbr/" target="_blank" rel="noopener noreferrer"
        class="taf-mobile-social__link" aria-label="Instagram">
        <span class="iconify" data-icon="mdi:instagram" aria-hidden="true"></span>
      </a>
      <a href="#" target="_blank" rel="noopener noreferrer" class="taf-mobile-social__link" aria-label="YouTube">
        <span class="iconify" data-icon="mdi:youtube" aria-hidden="true"></span>
      </a>
      <a href="#" target="_blank" rel="noopener noreferrer" class="taf-mobile-social__link" aria-label="X (Twitter)">
        <span class="iconify" data-icon="mdi:twitter" aria-hidden="true"></span>
      </a>
    </div>

    <!-- Footer -->
    <div class="taf-mobile-footer">
      <p class="taf-mobile-footer__text">TAF Sports - Gestão de Carreiras</p>
    </div>
  </div>