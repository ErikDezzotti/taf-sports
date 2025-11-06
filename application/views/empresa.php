<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * =========================================================================
 * TAF SPORTS - ABOUT US PAGE ("SOBRE NÓS")
 * =========================================================================
 *
 * Design: Steve Jobs + Jony Ive + Leo Natsume
 * Copy: Russell Brunson + Alex Hormozi
 * Strategy: Storytelling > Listing (Simon Sinek Golden Circle)
 *
 * Created: 2025-11-05
 * Version: 2.1 Elite (copy rewrite + visual hierarchy fix)
 * =========================================================================
 */
?>

<!-- Hero Banner (Consistent with Contact/Services) -->
<div class="taf-about-banner">
	<div class="taf-about-banner__image" style="background-image: url('<?=base_url();?>assets/img/header.png');">
		<div class="taf-about-banner__overlay">
			<div class="taf-about-banner__content">
				<h1 class="taf-about-banner__title">
					<span class="iconify taf-about-banner__icon" data-icon="mdi:office-building" aria-hidden="true"></span>
					SOBRE A TAF SPORTS
				</h1>
				<p class="taf-about-banner__subtitle">
					Gestão de carreiras esportivas com experiência, credibilidade e proximidade
				</p>
			</div>
		</div>
	</div>
</div>

<!-- Main Section -->
<section class="taf-about" aria-labelledby="about-heading">

	<!-- Photo Gallery (Office Photos) - MOVIDO PARA O INÍCIO -->
	<div class="taf-about__photos">
		<h2 class="taf-about__photos-title">Conheça Nossa Estrutura</h2>
		<p class="taf-about__photos-subtitle">
			A TAF Sports é uma agência especializada em <strong>gestão de carreiras esportivas</strong>, com <strong>assessoria completa</strong> para jogadores, treinadores e auxiliares técnicos. Nossa estrutura foi pensada para cuidar de cada detalhe da sua trajetória, do <strong>primeiro contrato ao auge da carreira</strong>.
		</p>
		<div class="taf-about__photo-grid">
			<div class="taf-about__photo-wrapper">
				<img src="<?=base_url();?>assets/img/empresa1.jpeg" alt="Escritório TAF Sports - Recepção" class="taf-about__photo">
			</div>
			<div class="taf-about__photo-wrapper">
				<img src="<?=base_url();?>assets/img/empresa2.jpeg" alt="Escritório TAF Sports - Sala de reuniões" class="taf-about__photo">
			</div>
			<div class="taf-about__photo-wrapper">
				<img src="<?=base_url();?>assets/img/empresa3.jpeg" alt="Escritório TAF Sports - Corredor" class="taf-about__photo">
			</div>
		</div>
	</div>

	<!-- Intro Section (Título + Separador + Texto) -->
	<div class="taf-about__intro">
		<h2 id="about-heading" class="taf-about__intro-title">
			Quem Somos e Por Que Existimos
		</h2>
		<div class="taf-about__intro-divider"></div>
		<div class="taf-about__intro-content">
			<p class="taf-about__intro-text">
				Com <strong>anos de experiência</strong> no mercado esportivo, cuidamos de <strong>cada detalhe</strong> da sua trajetória profissional, do primeiro contrato até a transição pós-carreira, para que você se concentre no que realmente importa: <strong>jogar e evoluir</strong>.
			</p>
		</div>
	</div>

	<!-- Section: Missão -->
	<div class="taf-about__section" id="missao">
		<div class="taf-about__section-header">
			<div class="taf-about__section-icon">
				<span class="iconify" data-icon="ion:football" aria-hidden="true"></span>
			</div>
			<h2 class="taf-about__section-title">Missão</h2>
		</div>
		<div class="taf-about__section-divider"></div>
		<div class="taf-about__section-content">
			<div class="taf-about__section-text">
				<p>
					Cuidar da carreira de quem vive o esporte, com <strong>seriedade, dedicação e visão estratégica</strong>,
					proporcionando suporte em todas as fases da trajetória profissional, do primeiro contrato até a
					transição pós-carreira.
				</p>
				<p>
					Acreditamos que cada atleta ou treinador merece uma gestão <strong>profissional, transparente e humanizada</strong>,
					onde decisões estratégicas são tomadas com base em dados, experiência e, acima de tudo, <strong>cuidado genuíno</strong>
					com o futuro de quem confiou em nós.
				</p>
			</div>
		</div>
	</div>

	<!-- Section: O Que Fazemos -->
	<div class="taf-about__section" id="fazemos">
		<div class="taf-about__section-header">
			<div class="taf-about__section-icon">
				<span class="iconify" data-icon="mdi:account-group" aria-hidden="true"></span>
			</div>
			<h2 class="taf-about__section-title">O Que Fazemos</h2>
		</div>
		<div class="taf-about__section-divider"></div>
		<div class="taf-about__section-content">
			<div class="taf-about__section-text">
				<p>
					<strong>Gestão de Carreira:</strong> planejamento estratégico e acompanhamento individualizado.
				</p>
				<p>
					<strong>Assessoria Esportiva:</strong> suporte administrativo, jurídico e de imagem.
				</p>
				<p>
					<strong>Apoio Integral:</strong> presença ativa em todas as etapas, garantindo segurança e
					tranquilidade dentro e fora de campo.
				</p>
				<p>
					Não somos apenas uma agência, somos <strong>parceiros estratégicos</strong> que entendem o universo
					do futebol e trabalham incansavelmente para que cada atleta ou treinador alcance seu <strong>máximo potencial</strong>.
				</p>
			</div>
		</div>
	</div>

	<!-- Section: Diferencial -->
	<div class="taf-about__section" id="diferencial">
		<div class="taf-about__section-header">
			<div class="taf-about__section-icon">
				<span class="iconify" data-icon="mdi:trophy" aria-hidden="true"></span>
			</div>
			<h2 class="taf-about__section-title">Diferencial</h2>
		</div>
		<div class="taf-about__section-divider"></div>
		<div class="taf-about__section-content">
			<div class="taf-about__section-text">
				<p>
					Acreditamos que o talento precisa ser <strong>bem direcionado</strong>. Por isso, unimos
					<strong>experiência, credibilidade e proximidade</strong> para que cada profissional tenha
					condições de alcançar todo o seu potencial.
				</p>
				<p>
					Nossa estrutura física, equipe especializada e network consolidado no mercado esportivo nos
					permitem oferecer uma <strong>gestão 360° de verdade</strong>, não apenas palavras, mas
					<strong>resultados concretos</strong> que transformam carreiras.
				</p>
				<p>
					<strong>Você não é só mais um atleta ou treinador.</strong> Aqui, cada cliente é tratado com a atenção e o
					cuidado que merece, porque entendemos que por trás de cada contrato existe uma <strong>história,
					um sonho e uma família</strong> que confia no nosso trabalho.
				</p>
			</div>
		</div>
	</div>

	<!-- CTA Section - Russell Brunson Style -->
	<div class="taf-about__cta">
		<div class="taf-about__cta-content">
			<h2 class="taf-about__cta-title">
				Pronto para Ter uma Gestão Profissional?
			</h2>
			<p class="taf-about__cta-text">
				Descubra como podemos transformar sua carreira esportiva com nossa gestão 360°.
				Junte-se aos <strong>craques</strong> que já confiam no nosso trabalho.
			</p>
			<div class="taf-about__cta-buttons">
				<a href="<?=base_url();?>servicos" class="taf-btn-primary">
					<span class="iconify" data-icon="ion:football" aria-hidden="true"></span>
					Nossos Serviços
				</a>
				<a href="<?=base_url();?>contato" class="taf-btn-primary">
					<span class="iconify" data-icon="mdi:email-outline" aria-hidden="true"></span>
					Fale Conosco
				</a>
			</div>
		</div>
	</div>
	<!-- End CTA Section -->

</section>
<!-- End TAF About Section -->

<!--
	============================================================================
	DESIGN COUNCIL APPROVAL - "SOBRE NÓS" v2.1
	============================================================================
	✅ Steve Jobs: "Conta a história do PORQUÊ (Golden Circle)"
	✅ Jony Ive: "Espaço branco generoso, hierarquia visual clara"
	✅ Leo Natsume: "Títulos > Subtítulos > Texto - escaneável"
	✅ Mark Wheeler: "Trust signals: fotos reais da estrutura"
	✅ Russell Brunson: "Copy emocional, storytelling, não apenas fatos"
	✅ Alex Hormozi: "Value stack: experiência + credibilidade + proximidade"
	✅ Paul Rand: "Ícones corretos: bola (missão), troféu (diferencial)"
	✅ Dieter Rams: "Útil, compreensível, honesto, duradouro"
	✅ Don Norman: "Affordances claras, feedback visual imediato"
	✅ Milton Glaser: "Emoção: cuidado, confiança, proximidade"
	============================================================================
-->
