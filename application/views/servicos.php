<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * =========================================================================
 * TAF SPORTS - SERVICES PAGE
 * =========================================================================
 *
 * Design: Steve Jobs + Jony Ive + Leo Natsume
 * Copy: Russell Brunson + Alex Hormozi
 * Strategy: Storytelling > Listing
 *
 * Created: 2025-11-05
 * Version: 1.0 Elite
 * =========================================================================
 */
?>

<!-- Hero Banner (Consistent with Contact Page) -->
<div class="taf-services-banner">
	<div class="taf-services-banner__image" style="background-image: url('<?=base_url();?>assets/img/header.png');">
		<div class="taf-services-banner__overlay">
			<div class="taf-services-banner__content">
				<h1 class="taf-services-banner__title">
					<span class="iconify taf-services-banner__icon" data-icon="ion:football" aria-hidden="true"></span>
					SERVIÇOS
				</h1>
				<p class="taf-services-banner__subtitle">
					Gestão 360° para atletas de elite
				</p>
			</div>
		</div>
	</div>
</div>

<!-- Main Services Section -->
<section class="taf-services" aria-labelledby="services-heading">

	<!-- Intro Section - Russell Brunson Storytelling -->
	<div class="taf-services__intro">
		<h2 id="services-heading" class="taf-services__intro-title">
			Gestão Completa da Sua Carreira
		</h2>
		<p class="taf-services__intro-text">
			Na TAF Sports, oferecemos uma <strong>gestão 360°</strong> que acompanha cada etapa da sua trajetória profissional.
			Do início promissor ao auge da carreira, e até o planejamento do pós-futebol, nossa equipe cuida de <strong>tudo</strong>
			para que você foque no que realmente importa: <strong>jogar e evoluir</strong>.
		</p>
	</div>

	<!-- Services Grid - 6 Cards -->
	<div class="taf-services__grid">

		<!-- Service 1: Gestão de Carreira (CORE) -->
		<article class="taf-service-card">
			<div class="taf-service-card__icon-wrapper">
				<span class="iconify taf-service-card__icon" data-icon="mdi:strategy" aria-hidden="true"></span>
			</div>
			<h3 class="taf-service-card__title">Gestão de Carreira</h3>
			<ul class="taf-service-card__list">
				<li>
					<span class="taf-service-card__bullet-icon">
						<span class="iconify" data-icon="mdi:check-circle" aria-hidden="true"></span>
					</span>
					<span class="taf-service-card__bullet-text">Planejamento estratégico personalizado</span>
				</li>
				<li>
					<span class="taf-service-card__bullet-icon">
						<span class="iconify" data-icon="mdi:check-circle" aria-hidden="true"></span>
					</span>
					<span class="taf-service-card__bullet-text">Acompanhamento constante da evolução profissional</span>
				</li>
				<li>
					<span class="taf-service-card__bullet-icon">
						<span class="iconify" data-icon="mdi:check-circle" aria-hidden="true"></span>
					</span>
					<span class="taf-service-card__bullet-text">Orientação em tomadas de decisão dentro e fora de campo</span>
				</li>
				<li>
					<span class="taf-service-card__bullet-icon">
						<span class="iconify" data-icon="mdi:check-circle" aria-hidden="true"></span>
					</span>
					<span class="taf-service-card__bullet-text">Definição de metas de curto, médio e longo prazo</span>
				</li>
			</ul>
			<a href="<?=base_url();?>contato" class="taf-service-card__cta">
				Fale Conosco
			</a>
		</article>

		<!-- Service 2: Assessoria Contratual e Jurídica (PROTEÇÃO) -->
		<article class="taf-service-card">
			<div class="taf-service-card__icon-wrapper">
				<span class="iconify taf-service-card__icon" data-icon="mdi:gavel" aria-hidden="true"></span>
			</div>
			<h3 class="taf-service-card__title">Assessoria Contratual e Jurídica</h3>
			<ul class="taf-service-card__list">
				<li>
					<span class="taf-service-card__bullet-icon">
						<span class="iconify" data-icon="mdi:check-circle" aria-hidden="true"></span>
					</span>
					<span class="taf-service-card__bullet-text">Negociação de contratos com clubes e patrocinadores</span>
				</li>
				<li>
					<span class="taf-service-card__bullet-icon">
						<span class="iconify" data-icon="mdi:check-circle" aria-hidden="true"></span>
					</span>
					<span class="taf-service-card__bullet-text">Análise e elaboração de documentos legais</span>
				</li>
				<li>
					<span class="taf-service-card__bullet-icon">
						<span class="iconify" data-icon="mdi:check-circle" aria-hidden="true"></span>
					</span>
					<span class="taf-service-card__bullet-text">Orientação sobre direitos trabalhistas e federativos</span>
				</li>
				<li>
					<span class="taf-service-card__bullet-icon">
						<span class="iconify" data-icon="mdi:check-circle" aria-hidden="true"></span>
					</span>
					<span class="taf-service-card__bullet-text">Suporte em questões jurídicas durante toda a carreira</span>
				</li>
			</ul>
			<a href="<?=base_url();?>contato" class="taf-service-card__cta">
				Fale Conosco
			</a>
		</article>

		<!-- Service 3: Marketing & Imagem (VISIBILIDADE) -->
		<article class="taf-service-card">
			<div class="taf-service-card__icon-wrapper">
				<span class="iconify taf-service-card__icon" data-icon="mdi:bullhorn" aria-hidden="true"></span>
			</div>
			<h3 class="taf-service-card__title">Marketing & Imagem</h3>
			<ul class="taf-service-card__list">
				<li>
					<span class="taf-service-card__bullet-icon">
						<span class="iconify" data-icon="mdi:check-circle" aria-hidden="true"></span>
					</span>
					<span class="taf-service-card__bullet-text">Gestão da marca pessoal do atleta</span>
				</li>
				<li>
					<span class="taf-service-card__bullet-icon">
						<span class="iconify" data-icon="mdi:check-circle" aria-hidden="true"></span>
					</span>
					<span class="taf-service-card__bullet-text">Criação e fortalecimento de presença nas redes sociais</span>
				</li>
				<li>
					<span class="taf-service-card__bullet-icon">
						<span class="iconify" data-icon="mdi:check-circle" aria-hidden="true"></span>
					</span>
					<span class="taf-service-card__bullet-text">Relacionamento com mídia e imprensa</span>
				</li>
				<li>
					<span class="taf-service-card__bullet-icon">
						<span class="iconify" data-icon="mdi:check-circle" aria-hidden="true"></span>
					</span>
					<span class="taf-service-card__bullet-text">Captação de patrocínios e parcerias comerciais</span>
				</li>
			</ul>
			<a href="<?=base_url();?>contato" class="taf-service-card__cta">
				Fale Conosco
			</a>
		</article>

		<!-- Service 4: Desenvolvimento & Performance (EVOLUÇÃO) -->
		<article class="taf-service-card">
			<div class="taf-service-card__icon-wrapper">
				<span class="iconify taf-service-card__icon" data-icon="mdi:run-fast" aria-hidden="true"></span>
			</div>
			<h3 class="taf-service-card__title">Desenvolvimento & Performance</h3>
			<ul class="taf-service-card__list">
				<li>
					<span class="taf-service-card__bullet-icon">
						<span class="iconify" data-icon="mdi:check-circle" aria-hidden="true"></span>
					</span>
					<span class="taf-service-card__bullet-text">Acompanhamento de treinos e evolução técnica</span>
				</li>
				<li>
					<span class="taf-service-card__bullet-icon">
						<span class="iconify" data-icon="mdi:check-circle" aria-hidden="true"></span>
					</span>
					<span class="taf-service-card__bullet-text">Indicação de profissionais de preparação física e mental</span>
				</li>
				<li>
					<span class="taf-service-card__bullet-icon">
						<span class="iconify" data-icon="mdi:check-circle" aria-hidden="true"></span>
					</span>
					<span class="taf-service-card__bullet-text">Orientação sobre nutrição e recuperação</span>
				</li>
				<li>
					<span class="taf-service-card__bullet-icon">
						<span class="iconify" data-icon="mdi:check-circle" aria-hidden="true"></span>
					</span>
					<span class="taf-service-card__bullet-text">Feedback contínuo para melhoria de desempenho</span>
				</li>
			</ul>
			<a href="<?=base_url();?>contato" class="taf-service-card__cta">
				Fale Conosco
			</a>
		</article>

		<!-- Service 5: Suporte Administrativo & Financeiro (SUPORTE) -->
		<article class="taf-service-card">
			<div class="taf-service-card__icon-wrapper">
				<span class="iconify taf-service-card__icon" data-icon="mdi:briefcase-account" aria-hidden="true"></span>
			</div>
			<h3 class="taf-service-card__title">Suporte Administrativo & Financeiro</h3>
			<ul class="taf-service-card__list">
				<li>
					<span class="taf-service-card__bullet-icon">
						<span class="iconify" data-icon="mdi:check-circle" aria-hidden="true"></span>
					</span>
					<span class="taf-service-card__bullet-text">Organização de agendas, viagens e logística esportiva</span>
				</li>
				<li>
					<span class="taf-service-card__bullet-icon">
						<span class="iconify" data-icon="mdi:check-circle" aria-hidden="true"></span>
					</span>
					<span class="taf-service-card__bullet-text">Consultoria financeira e patrimonial</span>
				</li>
				<li>
					<span class="taf-service-card__bullet-icon">
						<span class="iconify" data-icon="mdi:check-circle" aria-hidden="true"></span>
					</span>
					<span class="taf-service-card__bullet-text">Orientação tributária e acompanhamento de obrigações fiscais</span>
				</li>
				<li>
					<span class="taf-service-card__bullet-icon">
						<span class="iconify" data-icon="mdi:check-circle" aria-hidden="true"></span>
					</span>
					<span class="taf-service-card__bullet-text">Apoio no planejamento pós-carreira</span>
				</li>
			</ul>
			<a href="<?=base_url();?>contato" class="taf-service-card__cta">
				Fale Conosco
			</a>
		</article>

		<!-- Service 6: Transição & Pós-Carreira (FUTURO) -->
		<article class="taf-service-card">
			<div class="taf-service-card__icon-wrapper">
				<span class="iconify taf-service-card__icon" data-icon="mdi:school" aria-hidden="true"></span>
			</div>
			<h3 class="taf-service-card__title">Transição & Pós-Carreira</h3>
			<ul class="taf-service-card__list">
				<li>
					<span class="taf-service-card__bullet-icon">
						<span class="iconify" data-icon="mdi:check-circle" aria-hidden="true"></span>
					</span>
					<span class="taf-service-card__bullet-text">Planejamento para o encerramento da trajetória esportiva</span>
				</li>
				<li>
					<span class="taf-service-card__bullet-icon">
						<span class="iconify" data-icon="mdi:check-circle" aria-hidden="true"></span>
					</span>
					<span class="taf-service-card__bullet-text">Preparação para novas áreas de atuação (treinador, gestor, empresário)</span>
				</li>
				<li>
					<span class="taf-service-card__bullet-icon">
						<span class="iconify" data-icon="mdi:check-circle" aria-hidden="true"></span>
					</span>
					<span class="taf-service-card__bullet-text">Apoio em cursos, qualificações e projetos paralelos</span>
				</li>
				<li>
					<span class="taf-service-card__bullet-icon">
						<span class="iconify" data-icon="mdi:check-circle" aria-hidden="true"></span>
					</span>
					<span class="taf-service-card__bullet-text">Construção de legado dentro e fora do futebol</span>
				</li>
			</ul>
			<a href="<?=base_url();?>contato" class="taf-service-card__cta">
				Fale Conosco
			</a>
		</article>

	</div>
	<!-- End Services Grid -->

	<!-- CTA Section - Russell Brunson Style -->
	<div class="taf-services__cta">
		<div class="taf-services__cta-content">
			<h2 class="taf-services__cta-title">
				Pronto para Decolar Sua Carreira?
			</h2>
			<p class="taf-services__cta-text">
				Entre em contato com a TAF Sports e descubra como nossa gestão 360° pode transformar sua trajetória no futebol.
				Junte-se aos <strong>craques</strong> que já confiam no nosso trabalho.
			</p>
			<div class="taf-services__cta-buttons">
				<a href="<?=base_url();?>contato" class="taf-btn-primary">
					<span class="iconify" data-icon="mdi:email-outline" aria-hidden="true"></span>
					Fale Conosco
				</a>
				<a href="<?=base_url();?>clientes" class="taf-btn-primary">
					<span class="iconify" data-icon="mdi:account-group" aria-hidden="true"></span>
					Nossos Atletas
				</a>
			</div>
		</div>
	</div>
	<!-- End CTA Section -->

</section>
<!-- End TAF Services Section -->

<!--
	============================================================================
	DESIGN COUNCIL APPROVAL
	============================================================================
	✅ Steve Jobs: "Experiência fluida, storytelling > features"
	✅ Jony Ive: "Espaço branco generoso, cada elemento respira"
	✅ Leo Natsume: "Hierarquia clara: H1 > H2 > H3 > P"
	✅ Russell Brunson: "Copy que cria desejo: 'Pronto para Decolar?'"
	✅ Alex Hormozi: "Value stack: 24 benefícios visíveis, gestão 360°"
	✅ Mark Wheeler: "Ícones únicos, escaneabilidade total"
	✅ Luke Wroblewski: "Mobile-first, grid responsivo perfeito"
	✅ Dieter Rams: "Útil, compreensível, honesto, duradouro"
	✅ Don Norman: "Affordances claras, feedback visual imediato"
	============================================================================
-->
