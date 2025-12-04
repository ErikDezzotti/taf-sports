<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<footer class="taf-footer" role="contentinfo" aria-label="Rodapé do site">
  <div class="taf-footer__container">

    <!-- Grid 4 Colunas: Logo | Navegação | Redes Sociais | Contato -->
    <div class="taf-footer__grid">

      <!-- Coluna 1: Logo & Tagline -->
      <div class="taf-footer__brand">
        <a href="<?=base_url();?>" class="taf-footer__logo-link" aria-label="Voltar para home">
          <img src="<?=base_url();?>assets/img/taf.png" alt="TAF Sports Logo" class="taf-footer__logo" />
        </a>
        <p class="taf-footer__tagline">Gestão de Carreiras no Futebol</p>
      </div>

      <!-- Coluna 2: Navegação -->
      <nav class="taf-footer__nav" aria-label="Navegação principal do rodapé">
        <h3 class="taf-footer__nav-title">Navegação</h3>
        <ul class="taf-footer__nav-list">
          <li class="taf-footer__nav-item">
            <a href="<?=base_url();?>" class="taf-footer__nav-link">
              <span class="iconify" data-icon="mdi:home" aria-hidden="true"></span>
              Home
            </a>
          </li>
          <li class="taf-footer__nav-item">
            <a href="<?=base_url();?>empresa" class="taf-footer__nav-link">
              <span class="iconify" data-icon="mdi:briefcase" aria-hidden="true"></span>
              Empresa
            </a>
          </li>
          <li class="taf-footer__nav-item">
            <a href="<?=base_url();?>servicos" class="taf-footer__nav-link">
              <span class="iconify" data-icon="mdi:trophy" aria-hidden="true"></span>
              Serviços
            </a>
          </li>
          <li class="taf-footer__nav-item">
            <a href="<?=base_url();?>clientes" class="taf-footer__nav-link">
              <span class="iconify" data-icon="mdi:account-group" aria-hidden="true"></span>
              Clientes
            </a>
          </li>
          <li class="taf-footer__nav-item">
            <a href="<?=base_url();?>contato" class="taf-footer__nav-link">
              <span class="iconify" data-icon="mdi:email" aria-hidden="true"></span>
              Contato
            </a>
          </li>
        </ul>
      </nav>

      <!-- Coluna 3: Redes Sociais (VERTICAL com ícone + texto) -->
      <div class="taf-footer__social" aria-label="Redes sociais">
        <h3 class="taf-footer__social-title">Redes Sociais</h3>
        <div class="taf-footer__social-list">
          <a href="https://www.instagram.com/tafsportsbr/"
             target="_blank"
             rel="noopener noreferrer"
             class="taf-footer__social-link"
             aria-label="Siga-nos no Instagram">
            <span class="iconify" data-icon="mdi:instagram" aria-hidden="true"></span>
            <span class="taf-footer__social-label">Instagram</span>
          </a>
          <a href="#"
             target="_blank"
             rel="noopener noreferrer"
             class="taf-footer__social-link"
             aria-label="Siga-nos no Facebook">
            <span class="iconify" data-icon="mdi:facebook" aria-hidden="true"></span>
            <span class="taf-footer__social-label">Facebook</span>
          </a>
          <a href="#"
             target="_blank"
             rel="noopener noreferrer"
             class="taf-footer__social-link"
             aria-label="Siga-nos no X (Twitter)">
            <span class="iconify" data-icon="mdi:twitter" aria-hidden="true"></span>
            <span class="taf-footer__social-label">X (Twitter)</span>
          </a>
          <a href="#"
             target="_blank"
             rel="noopener noreferrer"
             class="taf-footer__social-link"
             aria-label="Siga-nos no YouTube">
            <span class="iconify" data-icon="mdi:youtube" aria-hidden="true"></span>
            <span class="taf-footer__social-label">YouTube</span>
          </a>
        </div>
      </div>

      <!-- Coluna 4: Contato -->
      <div class="taf-footer__info">
        <h3 class="taf-footer__info-title">Contato</h3>
        <p class="taf-footer__info-text">
          <span class="iconify" data-icon="mdi:email-outline" aria-hidden="true"></span>
          contato@tafsportsbr.com
        </p>
        <p class="taf-footer__info-text">
          <span class="iconify" data-icon="mdi:phone-outline" aria-hidden="true"></span>
          +55 (62) 3300-1229
        </p>
        <p class="taf-footer__info-text">
          <span class="iconify" data-icon="mdi:map-marker-outline" aria-hidden="true"></span>
          Edifício Lozandes - Av. Olinda, 960 - Business Tower, Sala 310<br>
          Alphaville Araguaia, Goiânia - GO, 74884-120
        </p>
      </div>

    </div>

    <!-- Copyright -->
    <div class="taf-footer__bottom">
      <div class="taf-footer__divider" aria-hidden="true"></div>
      <div class="taf-footer__copyright">
        <p class="taf-footer__copyright-line">
          &copy; <?= html_escape(date('Y')) ?> TAF Sports. Todos os direitos reservados.
        </p>
        <div class="taf-footer__copyright-separator" aria-hidden="true"></div>
        <p class="taf-footer__copyright-line">
          Desenvolvido pela <a href="http://brandpage.com.br/" target="_blank" rel="noopener noreferrer" class="taf-footer__brand-link">Brandpage</a> para atletas de elite
        </p>
      </div>
    </div>

  </div>
</footer>
</app-footer>

<script src="https://use.fontawesome.com/7c48248256.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/javascripts/bootstrap.min.js"></script>

<!-- TAF Mobile Menu Script -->
<script>
(function() {
  'use strict';

  const mobileToggle = document.getElementById('tafMobileToggle');
  const mobileMenu = document.getElementById('tafMobileMenu');
  const mobileClose = document.getElementById('tafMobileClose');
  const body = document.body;
  let isOpen = false;

  if (!mobileToggle || !mobileMenu) return;

  // Toggle Menu
  function toggleMenu() {
    isOpen = !isOpen;

    // Update classes
    mobileToggle.classList.toggle('active', isOpen);
    mobileMenu.classList.toggle('active', isOpen);
    body.classList.toggle('taf-no-scroll', isOpen);

    // Update ARIA attributes
    mobileToggle.setAttribute('aria-expanded', isOpen);
    mobileToggle.setAttribute('aria-label', isOpen ? 'Fechar menu de navegação' : 'Abrir menu de navegação');

    // Focus management
    if (isOpen) {
      // Trap focus in menu
      const firstLink = mobileMenu.querySelector('.taf-mobile-nav__link');
      if (firstLink) {
        setTimeout(() => firstLink.focus(), 100);
      }
    }
  }

  // Click handler
  mobileToggle.addEventListener('click', toggleMenu);

  // Close button handler
  if (mobileClose) {
    mobileClose.addEventListener('click', toggleMenu);
  }

  // Close menu when clicking on links
  const mobileLinks = mobileMenu.querySelectorAll('.taf-mobile-nav__link');
  mobileLinks.forEach(link => {
    link.addEventListener('click', () => {
      // Small delay for visual feedback
      setTimeout(toggleMenu, 200);
    });
  });

  // Close menu with ESC key
  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape' && isOpen) {
      toggleMenu();
      mobileToggle.focus();
    }
  });

  // Close menu when clicking outside
  mobileMenu.addEventListener('click', function(e) {
    if (e.target === mobileMenu) {
      toggleMenu();
    }
  });

  // Sticky header on scroll
  let lastScrollTop = 0;
  const header = document.querySelector('.taf-header');

  window.addEventListener('scroll', function() {
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    if (scrollTop > 50) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }

    lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
  }, false);

})();
</script>
<script type="text/javascript" src="<?=base_url();?>assets/javascripts/lightbox.min.js"></script>
<script src="<?=base_url()?>assets/javascripts/jquery.mb.YTPlayer.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/unitegallery/js/unitegallery.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/unitegallery/themes/tiles/ug-theme-tiles.js"></script>
<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/javascripts/instafeed.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js">
</script>
<script type='text/javascript'>
  var myPlayer;
  jQuery(function() {
    var isIframe = function() {
      var a = !1;
      try {
        self.location.href != top.location.href && (a = !0)
      } catch (b) {
        a = !0
      }
      return a
    };
    if (!isIframe()) {
      var logo = $(
        "<a href='//pupunzi.com/#mb.components/components.html' style='position:absolute;top:0;z-index:1000'><img id='logo' border='0' src='//pupunzi.com/images/logo.png' alt='mb.ideas.repository'></a>"
        );
      $("#wrapper").prepend(logo), $("#logo").fadeIn()
    }
    myPlayer = jQuery(".player").YTPlayer();
  });
  $(".carousel").swipe({
    swipe: function(event, direction, distance, duration, fingerCount, fingerData) {
      if (direction == 'left') $(this).carousel('next');
      if (direction == 'right') $(this).carousel('prev');
    },
    allowPageScroll: "vertical"
  });
  $('.carousel').carousel({
    interval: 7000
  });
  $('#myCarousel3').carousel({
    interval: 3000
  });
</script>

<?php if ($tipo == "Feminino") { ?>

<script type='text/javascript'>
  $(document).ready(function() {
    $("#boxBase").hide();
    $("#catProfissional").removeClass("btn-danger").addClass("btn-default");
    $("#catProfissional").click(function() {
      $("#boxProfissional").show();
      $("#boxBase").hide();
      $("#catProfissional").removeClass("btn-danger").addClass("btn-default");
      $("#catBase").removeClass("btn-default").addClass("btn-danger");
    });
    $("#catBase").click(function() {
      $("#boxProfissional").hide();
      $("#boxBase").show();
      $("#catBase").removeClass("btn-danger").addClass("btn-default");
      $("#catProfissional").removeClass("btn-default").addClass("btn-danger");
    });
  });
</script>

<?php 
} else {
?>

<script type='text/javascript'>
  $(document).ready(function() {
    $("#boxBase").hide();
    $("#catProfissional").removeClass("btn-primary").addClass("btn-default");
    $("#catProfissional").click(function() {
      $("#boxProfissional").show();
      $("#boxBase").hide();
      $("#catProfissional").removeClass("btn-primary").addClass("btn-default");
      $("#catBase").removeClass("btn-default").addClass("btn-primary");
    });
    $("#catBase").click(function() {
      $("#boxProfissional").hide();
      $("#boxBase").show();
      $("#catBase").removeClass("btn-primary").addClass("btn-default");
      $("#catProfissional").removeClass("btn-default").addClass("btn-primary");
    });
  });
</script>

<?php	
}
?>

</body>

</html>
