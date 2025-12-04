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
	<div class="taf-about-banner__image" style="background-image: url('<?=base_url();?>assets/img/Serra_Dourada_Lotado%20header.webp');">
		<div class="taf-about-banner__overlay">
			<div class="taf-about-banner__content">
				<h1 class="taf-about-banner__title">
					<span class="iconify taf-about-banner__icon" data-icon="mdi:office-building" aria-hidden="true"></span>
					CONHEÇA A TAF SPORTS
				</h1>
				<p class="taf-about-banner__subtitle">
					Gestão, credibilidade e estratégia em cada carreira.
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
				A TAF Sports é liderada pelo <strong>Agente FIFA Thiago Sampaio</strong>, profissional com 19 anos de atuação no futebol, construindo uma das redes de relacionamento mais sólidas e respeitadas do mercado.<br><br>
				Sua experiência acumulada passa por clubes, executivos, treinadores, atletas e dirigentes de todos os níveis, do futebol de base às principais competições nacionais e internacionais.
			</p>
			<p class="taf-about__intro-text">
				Existimos para elevar o padrão da gestão de carreira no Brasil.<br><br>
				Nosso propósito é oferecer aos atletas e treinadores <strong>estrutura, direcionamento e estratégia real</strong>, indo muito além da simples intermediação de contratos. Cada carreira é tratada com profundidade, inteligência de mercado e presença absoluta, com acompanhamento diário, planejamento de longo prazo e suporte completo dentro e fora de campo.
			</p>
			<p class="taf-about__intro-text">
				A TAF Sports nasceu para ser diferente: <strong>profissional, técnica, transparente e próxima</strong>.<br><br>
				É isso que garante que cada cliente seja acompanhado por alguém que não apenas conhece o futebol, mas vive o futebol há quase duas décadas e construiu credibilidade onde ela mais importa: no vestiário, no campo e na mesa da negociação.
			</p>
		</div>
	</div>

	<!-- Section: Missão -->
	<div class="taf-about__section" id="missao">
		<div class="taf-about__section-header">
			<div class="taf-about__section-icon">
				<span class="iconify" data-icon="ion:football" aria-hidden="true"></span>
			</div>
			<h2 class="taf-about__section-title">MISSÃO</h2>
		</div>
		<div class="taf-about__section-divider"></div>
		<div class="taf-about__section-content">
			<div class="taf-about__section-text">
				<p>
					Profissionalizar, proteger e potencializar <strong>carreiras no futebol</strong>.
				</p>
				<p>
					Nossa missão é conduzir atletas e treinadores com <strong>estratégia</strong>, <strong>visão</strong> e <strong>presença real</strong>, oferecendo suporte total nas áreas esportiva, financeira, contratual, de imagem e de mercado.
				</p>
				<p>
					Transformamos talento em ativo, oportunidade em carreira e carreira em legado, sempre com <strong>ética</strong>, <strong>transparência</strong> e <strong>gestão de alto nível</strong>.
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
					Realizamos <strong>gestão de carreira 360°</strong>, unindo planejamento, inteligência de mercado e acompanhamento diário.
				</p>
				<p>
					Atuamos com análises de performance, scouting nacional e internacional, uso de plataformas globais como o TransferRoom, intermediação de contratos, assessoria jurídica, financeira e de imagem.
				</p>
				<p>
					Entregamos direção, segurança e estratégia em todas as fases da trajetória, da base ao profissional.
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
					Nosso diferencial é a união de <strong>experiência, credibilidade e presença</strong>.
				</p>
				<p>
					Temos network global com clubes, agentes FIFA e executivos, utilizamos ferramentas de análise e scouting de padrão internacional e operamos com metodologia corporativa séria e transparente.
				</p>
				<p>
					Cada cliente recebe atenção individualizada, decisões estratégicas e suporte contínuo, dentro e fora de campo, porque resultados consistentes são fruto de gestão real, não de promessas.
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
