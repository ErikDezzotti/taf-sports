<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// ✅ REFATORAÇÃO COMPLETA v2.0 - Design System TAF
// Following: Jobs, Ive, Natsume, Wroblewski principles
$conf = !empty($config) ? $config[0] : new stdClass();
?>

<!-- ============================================
     TAF CONTACT SECTION - ELITE DESIGN
     Inspiration: Nike, Adidas, Under Armour
     ============================================ -->

<!-- Banner Header com Imagem (pedido do cliente) -->
<div class="taf-contact-banner">
	<div class="taf-contact-banner__image" style="background-image: url('<?=base_url();?>assets/img/header.png');">
		<div class="taf-contact-banner__overlay">
			<div class="taf-contact-banner__content">
				<h1 id="contact-heading" class="taf-contact-banner__title">
					<span class="iconify taf-contact-banner__icon" data-icon="mdi:email-outline" aria-hidden="true"></span>
					CONTATO
				</h1>
				<p class="taf-contact-banner__subtitle">
					Fale conosco e tire suas dúvidas.
				</p>
			</div>
		</div>
	</div>
</div>

<section class="taf-contact" aria-labelledby="contact-heading">

	<!-- Intro Section (Título + Texto) - Russell Brunson Style -->
	<div class="taf-contact__intro">
		<h2 class="taf-contact__intro-title">
			Pronto para Transformar Sua Carreira?
		</h2>
		<p class="taf-contact__intro-text">
			Estamos aqui para <strong>ouvir você</strong>. Se você é um atleta ou treinador em busca de <strong>gestão profissional</strong>,
			um clube procurando talentos, ou simplesmente quer saber como a TAF Sports pode ajudar na sua trajetória,
			<strong>entre em contato conosco</strong>. Responderemos em até 24 horas com toda a atenção que você merece.
		</p>
	</div>

	<!-- Grid Layout: Form (Left) + Info (Right) -->
	<div class="taf-contact__grid">

		<!-- ==================== LEFT SIDE: FORM ==================== -->
		<div class="taf-contact__form-side">

			<!-- Success Alert -->
			<?php if ($this->session->flashdata('success')): ?>
			<div class="taf-alert taf-alert--success" role="alert">
				<span class="iconify taf-alert__icon" data-icon="mdi:check-circle" aria-hidden="true"></span>
				<div class="taf-alert__content">
					<strong class="taf-alert__title">Sucesso!</strong>
					<p class="taf-alert__message"><?= html_escape($this->session->flashdata('success')) ?></p>
				</div>
			</div>
			<?php endif; ?>

			<!-- Error Alert -->
			<?php if ($this->session->flashdata('error')): ?>
			<div class="taf-alert taf-alert--error" role="alert">
				<span class="iconify taf-alert__icon" data-icon="mdi:alert-circle" aria-hidden="true"></span>
				<div class="taf-alert__content">
					<strong class="taf-alert__title">Erro!</strong>
					<p class="taf-alert__message"><?= html_escape($this->session->flashdata('error')) ?></p>
				</div>
			</div>
			<?php endif; ?>

			<!-- Contact Form -->
			<form method="POST" action="<?=base_url();?>contato/enviar" class="taf-form" novalidate>

				<!-- Field Group: Nome -->
				<div class="taf-form__group">
					<label for="nome" class="taf-form__label">
						<span class="iconify taf-form__label-icon" data-icon="mdi:account" aria-hidden="true"></span>
						Nome Completo *
					</label>
					<input
						type="text"
						id="nome"
						name="nome"
						class="taf-form__input"
						placeholder="Digite seu nome completo"
						value="<?= html_escape(set_value('nome')) ?>"
						required
						maxlength="100"
						aria-required="true"
						aria-describedby="nome-helper"
					>
					<span id="nome-helper" class="taf-form__helper">
						Como devemos te chamar?
					</span>
					<span class="iconify taf-form__validation-icon" data-icon="mdi:check-circle" aria-hidden="true"></span>
				</div>

				<!-- Field Group: Email -->
				<div class="taf-form__group">
					<label for="email" class="taf-form__label">
						<span class="iconify taf-form__label-icon" data-icon="mdi:email" aria-hidden="true"></span>
						Email *
					</label>
					<input
						type="email"
						id="email"
						name="email"
						class="taf-form__input"
						placeholder="seuemail@exemplo.com"
						value="<?= html_escape(set_value('email')) ?>"
						required
						maxlength="100"
						aria-required="true"
						aria-describedby="email-helper"
					>
					<span id="email-helper" class="taf-form__helper">
						Seu melhor email para contato
					</span>
					<span class="iconify taf-form__validation-icon" data-icon="mdi:check-circle" aria-hidden="true"></span>
				</div>

				<!-- Field Group: Telefone -->
				<div class="taf-form__group">
					<label for="telefone" class="taf-form__label">
						<span class="iconify taf-form__label-icon" data-icon="mdi:phone" aria-hidden="true"></span>
						Telefone *
					</label>
					<input
						type="tel"
						id="telefone"
						name="telefone"
						class="taf-form__input"
						placeholder="(62) 99999-9999"
						value="<?= html_escape(set_value('telefone')) ?>"
						required
						maxlength="20"
						aria-required="true"
						aria-describedby="telefone-helper"
					>
					<span id="telefone-helper" class="taf-form__helper">
						Telefone com DDD
					</span>
					<span class="iconify taf-form__validation-icon" data-icon="mdi:check-circle" aria-hidden="true"></span>
				</div>

				<!-- Field Group: Assunto -->
				<div class="taf-form__group">
					<label for="assunto" class="taf-form__label">
						<span class="iconify taf-form__label-icon" data-icon="mdi:tag" aria-hidden="true"></span>
						Assunto *
					</label>
					<input
						type="text"
						id="assunto"
						name="assunto"
						class="taf-form__input"
						placeholder="Sobre o que você quer falar?"
						value="<?= html_escape(set_value('assunto')) ?>"
						required
						maxlength="200"
						aria-required="true"
						aria-describedby="assunto-helper"
					>
					<span id="assunto-helper" class="taf-form__helper">
						Resumo do tema da sua mensagem
					</span>
					<span class="iconify taf-form__validation-icon" data-icon="mdi:check-circle" aria-hidden="true"></span>
				</div>

				<!-- Field Group: Mensagem -->
				<div class="taf-form__group">
					<label for="mensagem" class="taf-form__label">
						<span class="iconify taf-form__label-icon" data-icon="mdi:message-text" aria-hidden="true"></span>
						Mensagem *
					</label>
					<textarea
						id="mensagem"
						name="mensagem"
						class="taf-form__textarea"
						placeholder="Escreva sua mensagem aqui..."
						required
						maxlength="2000"
						rows="6"
						aria-required="true"
						aria-describedby="mensagem-helper"
					><?= html_escape(set_value('mensagem')) ?></textarea>
					<span id="mensagem-helper" class="taf-form__helper">
						Conte-nos mais sobre sua solicitação (máx. 2000 caracteres)
					</span>
					<span class="iconify taf-form__validation-icon" data-icon="mdi:check-circle" aria-hidden="true"></span>
				</div>

				<!-- Submit Button -->
				<button type="submit" class="taf-btn-primary taf-btn-submit">
					<span class="iconify taf-btn-submit__icon" data-icon="mdi:send" aria-hidden="true"></span>
					Enviar Mensagem
				</button>

				<p class="taf-form__footer-text">
					<span class="iconify" data-icon="mdi:shield-check" aria-hidden="true"></span>
					Seus dados estão seguros conosco. Responderemos em até 24 horas.
				</p>

			</form>

		</div>

		<!-- ==================== RIGHT SIDE: INFO ==================== -->
		<div class="taf-contact__info-side">

			<h2 class="taf-contact__info-title">Informações de Contato</h2>

			<!-- Contact Card: Telefone -->
			<div class="taf-contact-card">
				<div class="taf-contact-card__icon-wrapper">
					<span class="iconify taf-contact-card__icon" data-icon="mdi:phone" aria-hidden="true"></span>
				</div>
				<div class="taf-contact-card__content">
					<h3 class="taf-contact-card__title">Telefone</h3>
					<p class="taf-contact-card__text">
						<a href="tel:<?= preg_replace('/[^0-9]/', '', $conf->telefone) ?>" class="taf-contact-card__link">
							<?= html_escape($conf->telefone) ?>
						</a>
					</p>
					<span class="taf-contact-card__helper">Atendemos de segunda a sexta, 9h às 18h</span>
				</div>
			</div>

			<!-- Contact Card: Email -->
			<div class="taf-contact-card">
				<div class="taf-contact-card__icon-wrapper">
					<span class="iconify taf-contact-card__icon" data-icon="mdi:email" aria-hidden="true"></span>
				</div>
				<div class="taf-contact-card__content">
					<h3 class="taf-contact-card__title">Email</h3>
					<p class="taf-contact-card__text">
						<a href="mailto:<?= html_escape($conf->email) ?>" class="taf-contact-card__link">
							<?= html_escape($conf->email) ?>
						</a>
					</p>
					<span class="taf-contact-card__helper">Resposta em até 24 horas úteis</span>
				</div>
			</div>

			<!-- Contact Card: Endereço -->
			<div class="taf-contact-card">
				<div class="taf-contact-card__icon-wrapper">
					<span class="iconify taf-contact-card__icon" data-icon="mdi:map-marker" aria-hidden="true"></span>
				</div>
				<div class="taf-contact-card__content">
					<h3 class="taf-contact-card__title">Endereço</h3>
					<p class="taf-contact-card__text">
						Edifício Lozandes (Business Tower)<br>
						Av. Olinda, 960 - Bloco I, Sala 310<br>
						Park Lozandes<br>
						Goiânia - GO, 74884-120
					</p>
					<a
						href="https://www.google.com/maps/search/?api=1&query=Av.+Olinda+960+Goiania+GO"
						target="_blank"
						rel="noopener noreferrer"
						class="taf-contact-card__link taf-contact-card__link--map"
					>
						<span class="iconify" data-icon="mdi:google-maps" aria-hidden="true"></span>
						Ver no mapa
					</a>
				</div>
			</div>

			<!-- Social Proof Box -->
			<div class="taf-contact-social">
				<h3 class="taf-contact-social__title">Siga-nos nas redes sociais</h3>
				<div class="taf-contact-social__links">
					<a href="https://www.instagram.com/tafsportsbr/" target="_blank" rel="noopener noreferrer" class="taf-contact-social__link" aria-label="Instagram TAF Sports">
						<span class="iconify" data-icon="mdi:instagram" aria-hidden="true"></span>
					</a>
					<a href="https://www.facebook.com/tafsportsbr/" target="_blank" rel="noopener noreferrer" class="taf-contact-social__link" aria-label="Facebook TAF Sports">
						<span class="iconify" data-icon="mdi:facebook" aria-hidden="true"></span>
					</a>
					<a href="https://wa.me/5562999999999" target="_blank" rel="noopener noreferrer" class="taf-contact-social__link" aria-label="WhatsApp TAF Sports">
						<span class="iconify" data-icon="mdi:whatsapp" aria-hidden="true"></span>
					</a>
				</div>
			</div>

		</div>

	</div>

</section>

<!-- Form Validation & Microinteractions Script -->
<script>
(function() {
	'use strict';

	const form = document.querySelector('.taf-form');
	if (!form) return;

	const inputs = form.querySelectorAll('.taf-form__input, .taf-form__textarea');

	// Real-time validation feedback
	inputs.forEach(input => {
		// Validate on blur (when user leaves field)
		input.addEventListener('blur', function() {
			validateField(this);
		});

		// Validate on input (real-time for better UX)
		input.addEventListener('input', function() {
			if (this.value.length > 0) {
				validateField(this);
			}
		});
	});

	function validateField(field) {
		const group = field.closest('.taf-form__group');
		if (!group) return;

		// Check if field is valid
		if (field.validity.valid && field.value.trim() !== '') {
			group.classList.add('valid');
			group.classList.remove('error');
		} else if (!field.validity.valid && field.value.trim() !== '') {
			group.classList.add('error');
			group.classList.remove('valid');
		} else {
			group.classList.remove('valid', 'error');
		}
	}

	// Smooth scroll to first error on submit
	form.addEventListener('submit', function(e) {
		const firstInvalid = this.querySelector(':invalid');
		if (firstInvalid) {
			e.preventDefault();
			firstInvalid.scrollIntoView({
				behavior: 'smooth',
				block: 'center'
			});
			firstInvalid.focus();

			// Add shake animation to error field
			const errorGroup = firstInvalid.closest('.taf-form__group');
			if (errorGroup) {
				errorGroup.classList.add('shake');
				setTimeout(() => errorGroup.classList.remove('shake'), 500);
			}
		}
	});

	// Character counter for textarea
	const textarea = form.querySelector('#mensagem');
	if (textarea) {
		const helper = document.querySelector('#mensagem-helper');
		const maxLength = textarea.getAttribute('maxlength');

		textarea.addEventListener('input', function() {
			const remaining = maxLength - this.value.length;
			helper.textContent = `${remaining} caracteres restantes`;
		});
	}

})();
</script>