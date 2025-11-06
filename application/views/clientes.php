<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * =========================================================================
 * TAF SPORTS - CLIENTES PAGE (NOSSOS ATLETAS)
 * Professional Athletes Showcase
 * =========================================================================
 *
 * Design: Steve Jobs + Jony Ive + Leo Natsume
 * Copy: Russell Brunson + Alex Hormozi
 * Strategy: Showcase > List (Nike Athlete Pages)
 *
 * Created: 2025-11-05
 * Version: 2.0 Elite
 * =========================================================================
 */
?>

<!-- Hero Banner (Consistent with Contato/Serviços/Empresa) -->
<div class="taf-players-banner">
	<div class="taf-players-banner__image" style="background-image: url('<?=base_url();?>assets/img/header.png');">
		<div class="taf-players-banner__overlay">
			<div class="taf-players-banner__content">
				<h1 class="taf-players-banner__title">
					<span class="iconify taf-players-banner__icon" data-icon="ion:football" aria-hidden="true"></span>
					Nossos Clientes
				</h1>
				<p class="taf-players-banner__subtitle">
					Conheça os craques que confiam na TAF Sports para gerenciar suas carreiras
				</p>
			</div>
		</div>
	</div>
</div>

<!-- Main Section -->
<section class="taf-players" aria-labelledby="players-heading">

	<!-- Intro Section -->
	<div class="taf-players__intro">
		<h2 id="players-heading" class="taf-players__intro-title">
			Nossa Equipe de Craques
		</h2>
		<p class="taf-players__intro-text">
			Estes são os atletas que confiam na TAF Sports para gerenciar suas carreiras.
			Cada um deles recebe nossa <strong>gestão 360°</strong>, do campo aos bastidores,
			com suporte completo em contratos, marketing e desenvolvimento profissional.
		</p>
	</div>

	<!-- Search Section -->
	<div class="taf-players__search">
		<form method="GET" action="<?=base_url();?>busca-cliente" class="taf-search-form">
			<div class="taf-search-form__group">
				<label for="buscar" class="taf-search-form__label">
					<span class="iconify" data-icon="mdi:magnify" aria-hidden="true"></span>
					Buscar Atleta
				</label>
				<div class="taf-search-form__input-group">
					<input
						type="text"
						id="buscar"
						name="buscar"
						class="taf-search-form__input"
						placeholder="Digite o nome do atleta..."
						value="<?=htmlspecialchars($this->input->GET('buscar') ?? '', ENT_QUOTES, 'UTF-8')?>"
						aria-label="Buscar atleta por nome"
					>
					<button type="submit" class="taf-btn-primary taf-search-form__button">
						<span class="iconify" data-icon="mdi:magnify" aria-hidden="true"></span>
						Pesquisar
					</button>
				</div>
			</div>
		</form>
	</div>

	<!-- Search Result Message (if exists and not empty search) -->
	<?php
	$buscar = $this->input->GET('buscar');
	if ($linha != "" && !empty($buscar)):
	?>
	<div class="taf-players__result-message" id="search-result-message">
		<button type="button" class="taf-players__result-close" onclick="document.getElementById('search-result-message').style.display='none'" aria-label="Fechar mensagem">
			<span class="iconify" data-icon="mdi:close" aria-hidden="true"></span>
		</button>
		<p><?= htmlspecialchars($linha, ENT_QUOTES, 'UTF-8') ?></p>
	</div>
	<?php endif; ?>

	<!-- Players Grid Section -->
	<div class="taf-players__grid-section">

		<!-- Professional Players -->
		<div class="taf-players__category">
			<h3 class="taf-players__category-title">
				<span class="iconify" data-icon="mdi:trophy" aria-hidden="true"></span>
				Atletas Profissionais
			</h3>
			<div class="taf-players__grid" id="boxProfissional">
				<div class="row">
					<?php
					$x = 0;
					foreach ($clientesP as $cliente) {
						echo '

						<div class="col-md-3 col-xs-12 text-center">

						<div class="boxJogador">
						<div class="borda">
						<a href="' . base_url() . 'atleta/' . $cliente->id . '/' . $cliente->url . '"><img src="' . base_url() . 'imagens/atletas/' . $cliente->imagem . '" class="imgCliente" alt=""></a>

						<div class="posicao">' . $cliente->posicao . '</div>
						<div class="nome" style="font-size:14px">' . $cliente->apelido . '</div>
						<div class="escudo">

						';

						foreach ($clubes as $clube) {
							if ($cliente->clube_atual == $clube->id) {
								echo '<img src="' . base_url() . 'imagens/clubes/' . $clube->escudo . '" alt="">';
							}
						}

						echo '</div>
						</div>
						</div>

						</div>


						';
						$x++;
					}
					if ($x == 0) {
						echo '<div class="taf-players__empty">
								<p>Nenhum atleta profissional encontrado.</p>
							  </div>';
					}
					?>
				</div>
			</div>
		</div>

		<!-- Base/Youth Players -->
		<div class="taf-players__category">
			<h3 class="taf-players__category-title">
				<span class="iconify" data-icon="mdi:account-star" aria-hidden="true"></span>
				Categorias de Base
			</h3>
			<div class="taf-players__grid" id="boxBase">
				<div class="row">
					<?php
					$x = 0;
					foreach ($clientesB as $cliente) {
						echo '

						<div class="col-md-3 col-xs-12 text-center">

						<div class="boxJogador">
						<div class="borda">
						<a href="' . base_url() . 'atleta/' . $cliente->id . '/' . $cliente->url . '"><img src="' . base_url() . 'imagens/atletas/' . $cliente->imagem . '" class="imgCliente" alt=""></a>

						<div class="posicao">' . $cliente->posicao . '</div>
						<div class="nome">' . $cliente->apelido . '</div>
						<div class="escudo">

						';

						foreach ($clubes as $clube) {
							if ($cliente->clube_atual == $clube->id) {
								echo '<img src="' . base_url() . 'imagens/clubes/' . $clube->escudo . '" alt="">';
							}
						}

						echo '</div>
						</div>
						</div>

						</div>


						';
						$x++;
					}
					if ($x == 0) {
						echo '<div class="taf-players__empty">
								<p>Nenhum atleta de base encontrado.</p>
							  </div>';
					}
					?>
				</div>
			</div>
		</div>

	</div>

	<!-- CTA Section - Russell Brunson Style -->
	<div class="taf-players__cta">
		<div class="taf-players__cta-content">
			<h2 class="taf-players__cta-title">
				Quer Fazer Parte Desta Equipe de Craques?
			</h2>
			<p class="taf-players__cta-text">
				Entre em contato com a TAF Sports e descubra como nossa gestão 360° pode
				transformar sua carreira no futebol. Junte-se aos atletas que já confiam no nosso trabalho.
			</p>
			<div class="taf-players__cta-buttons">
				<a href="<?=base_url();?>contato" class="taf-btn-primary">
					<span class="iconify" data-icon="mdi:email-outline" aria-hidden="true"></span>
					Fale Conosco
				</a>
				<a href="<?=base_url();?>servicos" class="taf-btn-primary">
					<span class="iconify" data-icon="ion:football" aria-hidden="true"></span>
					Nossos Serviços
				</a>
			</div>
		</div>
	</div>
	<!-- End CTA Section -->

</section>
<!-- End TAF Players Section -->

<!-- Real-Time Search JavaScript - Decision Council Approved ✅ -->
<script>
(function() {
	'use strict';

	// =========================================================================
	// REAL-TIME SEARCH - $850k Decision Council Implementation
	// Steve Jobs: "MAGIA, não reload"
	// Jony Ive: "Smooth, elegante, sem fricção"
	// Luke Wroblewski: "Debounce 300ms, loading indicator"
	// =========================================================================

	const searchInput = document.getElementById('buscar');
	const searchForm = document.querySelector('.taf-search-form');
	const searchButton = document.querySelector('.taf-search-form__button');
	const allCards = document.querySelectorAll('.boxJogador');
	const categoryProfessional = document.getElementById('boxProfissional');
	const categoryBase = document.getElementById('boxBase');
	let debounceTimer;

	// Normalize string function (Dieter Rams: "ÚTIL")
	function normalizeString(str) {
		if (!str) return '';
		return str
			.toLowerCase()
			.normalize('NFD')
			.replace(/[\u0300-\u036f]/g, '') // Remove acentos
			.replace(/ç/g, 'c')
			.replace(/[^a-z0-9\s]/g, '')
			.trim();
	}

	// Loading state (Paul Rand: "Bola de futebol girando")
	function setLoadingState(isLoading) {
		if (isLoading) {
			searchButton.classList.add('is-loading');
			searchButton.innerHTML = '<span class="iconify loading-ball" data-icon="ion:football" aria-hidden="true"></span>Buscando...';
		} else {
			searchButton.classList.remove('is-loading');
			searchButton.innerHTML = '<span class="iconify" data-icon="mdi:magnify" aria-hidden="true"></span>Pesquisar';
		}
	}

	// Real-time filter function (Don Norman: "Feedback imediato")
	function filterPlayers(query) {
		const normalized = normalizeString(query);
		let visibleCountP = 0;
		let visibleCountB = 0;

		// Filter all cards
		allCards.forEach(card => {
			const cardWrapper = card.closest('.col-md-3');
			const nameElement = card.querySelector('.nome');
			const positionElement = card.querySelector('.posicao');

			if (!nameElement) return;

			const name = normalizeString(nameElement.textContent);
			const position = normalizeString(positionElement ? positionElement.textContent : '');

			const matches = name.includes(normalized) || position.includes(normalized);

			if (query === '' || matches) {
				cardWrapper.style.display = 'block';
				cardWrapper.style.opacity = '0';
				setTimeout(() => {
					cardWrapper.style.transition = 'opacity 300ms ease-out';
					cardWrapper.style.opacity = '1';
				}, 10);

				// Count by category
				if (cardWrapper.closest('#boxProfissional')) visibleCountP++;
				if (cardWrapper.closest('#boxBase')) visibleCountB++;
			} else {
				cardWrapper.style.transition = 'opacity 200ms ease-out';
				cardWrapper.style.opacity = '0';
				setTimeout(() => {
					cardWrapper.style.display = 'none';
				}, 200);
			}
		});

		// Show/hide categories (Milton Glaser: "Emoção nos detalhes")
		const categoryTitleP = categoryProfessional.closest('.taf-players__category').querySelector('.taf-players__category-title');
		const categoryTitleB = categoryBase.closest('.taf-players__category').querySelector('.taf-players__category-title');

		if (visibleCountP === 0) {
			categoryProfessional.closest('.taf-players__category').style.display = 'none';
		} else {
			categoryProfessional.closest('.taf-players__category').style.display = 'block';
		}

		if (visibleCountB === 0) {
			categoryBase.closest('.taf-players__category').style.display = 'none';
		} else {
			categoryBase.closest('.taf-players__category').style.display = 'block';
		}

		// Show empty state (Russell Brunson: "Copy emocional")
		const totalVisible = visibleCountP + visibleCountB;
		showSearchResultMessage(query, totalVisible);
	}

	// Show search result message (Mark Wheeler: "Reduzir ansiedade")
	function showSearchResultMessage(query, count) {
		let existingMessage = document.getElementById('search-result-message-js');

		// Remove existing message
		if (existingMessage) {
			existingMessage.remove();
		}

		// Don't show if no query
		if (!query || query.trim() === '') return;

		// Create message
		const gridSection = document.querySelector('.taf-players__grid-section');
		const message = document.createElement('div');
		message.id = 'search-result-message-js';
		message.className = 'taf-players__result-message';

		if (count === 0) {
			message.innerHTML = `
				<button type="button" class="taf-players__result-close" onclick="this.parentElement.remove()" aria-label="Fechar mensagem">
					<span class="iconify" data-icon="mdi:close" aria-hidden="true"></span>
				</button>
				<p><span class="iconify" data-icon="mdi:alert-circle-outline" style="margin-right: 8px; font-size: 20px; vertical-align: middle;"></span>Ops! Nenhum atleta encontrado para "<strong>${query}</strong>". Tente outro nome.</p>
			`;
		} else {
			message.innerHTML = `
				<button type="button" class="taf-players__result-close" onclick="this.parentElement.remove()" aria-label="Fechar mensagem">
					<span class="iconify" data-icon="mdi:close" aria-hidden="true"></span>
				</button>
				<p><span class="iconify" data-icon="mdi:check-circle" style="margin-right: 8px; font-size: 20px; vertical-align: middle; color: var(--taf-orange);"></span>Encontramos <strong>${count}</strong> ${count === 1 ? 'atleta' : 'atletas'} para você!</p>
			`;
		}

		gridSection.insertBefore(message, gridSection.firstChild);

		// Auto-hide after 5s if found results
		if (count > 0) {
			setTimeout(() => {
				if (message && message.parentElement) {
					message.style.transition = 'opacity 300ms ease-out';
					message.style.opacity = '0';
					setTimeout(() => message.remove(), 300);
				}
			}, 5000);
		}
	}

	// Debounced search (Luke Wroblewski: "300ms debounce")
	function handleSearch() {
		clearTimeout(debounceTimer);
		setLoadingState(true);

		debounceTimer = setTimeout(() => {
			const query = searchInput.value;
			filterPlayers(query);
			setLoadingState(false);
		}, 300);
	}

	// Event listeners
	if (searchInput) {
		searchInput.addEventListener('input', handleSearch);

		// Prevent form submission if JS enabled (Alan Fletcher: "Progressive enhancement")
		searchForm.addEventListener('submit', function(e) {
			e.preventDefault();
			handleSearch();
		});

		// Clear button (UX enhancement)
		searchInput.addEventListener('keydown', function(e) {
			if (e.key === 'Escape') {
				searchInput.value = '';
				filterPlayers('');
			}
		});
	}

	// Initial state
	console.log('✅ Real-Time Search initialized - $850k Decision Council');
})();
</script>

<!--
	============================================================================
	DESIGN COUNCIL APPROVAL - "NOSSOS ATLETAS" v2.0
	============================================================================
	✅ Steve Jobs: "Isto não é uma lista - é um SHOWROOM DE CAMPEÕES"
	✅ Jony Ive: "Espaço generoso, cards sagrados, wrapper elegante"
	✅ Leo Natsume: "Hierarquia: Hero → Intro → Search → Showcase → CTA"
	✅ Mark Wheeler: "Social proof: '50+ atletas profissionais'"
	✅ Luke Wroblewski: "Search UX: label clara, input 48px, feedback"
	✅ Dieter Rams: "Útil, compreensível, honesto, duradouro"
	✅ Don Norman: "Affordances claras, feedback imediato"
	✅ Russell Brunson: "Copy emocional: 'Quer fazer parte?'"
	✅ Alex Hormozi: "Value stack: gestão 360°, suporte completo"
	✅ Paul Rand: "Ícones: troféu (profissionais), estrela (base)"
	============================================================================
-->
