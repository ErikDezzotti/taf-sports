# ESTRATÉGIA DE REDESIGN - PÁGINA SOBRE NÓS (ANTIGA "EMPRESA")
## Strategic UX/UI Redesign Document

**Data**: 2025-11-05
**Projeto**: TAF Sports - About Us Page Redesign
**Objetivo**: Transformar página amadora "Empresa" em experiência profissional "Sobre Nós"

---

## 🎯 FASE 1: ANÁLISE ESTRATÉGICA

### ICP (Ideal Customer Profile)
**Quem visita a página "Sobre Nós" e POR QUÊ?**

1. **Atletas Profissionais** (22-35 anos)
   - **Objetivo**: Avaliar SE a TAF é confiável (track record, tempo de mercado)
   - **Pain Point**: Já lidou com agências amadoras que não entregam
   - **Expectativa**: Ver PROVA de seriedade (escritório físico, equipe real, anos de mercado)
   - **Decisão**: "Esta agência é legítima ou é um cara no sofá de casa?"
   - **Emoção**: Busca **credibilidade, profissionalismo, segurança**

2. **Atletas Base / Jovens Talentos** (16-22 anos) + **Pais/Responsáveis**
   - **Objetivo**: Conhecer QUEM está por trás da TAF
   - **Pain Point**: Medo de entregar o filho para desconhecidos
   - **Expectativa**: Ver fotos do escritório, entender a missão, sentir CONFIANÇA
   - **Decisão**: Pais avaliam: "Posso confiar meu filho a essas pessoas?"
   - **Emoção**: Precisam sentir **segurança, transparência, cuidado**

3. **Técnicos/Treinadores/Olheiros** (30-55 anos)
   - **Objetivo**: Avaliar parceria (indicar atletas para a TAF)
   - **Pain Point**: Querem agências sérias, não atravessadores
   - **Expectativa**: Ver profissionalismo, escritório real, missão clara
   - **Decisão**: Rápida - "Essa agência é séria ou amadora?"
   - **Emoção**: Valorizam **credibilidade, transparência, profissionalismo**

4. **Clubes/Dirigentes** (35-60 anos)
   - **Objetivo**: Avaliar a TAF como parceira de negócio
   - **Pain Point**: Já lidaram com agências pequenas e desorganizadas
   - **Expectativa**: Ver estrutura, experiência, diferenciais claros
   - **Decisão**: "Esta agência tem capacidade de gerenciar negociações complexas?"
   - **Emoção**: Buscam **confiança, credibilidade, profissionalismo**

### Proposta de Valor da PÁGINA "SOBRE NÓS"
**O que esta página deve transmitir?**

A página "Sobre Nós" NÃO é apenas uma biografia institucional. É uma **PROVA DE CONFIANÇA** que demonstra:

1. **Credibilidade**: TAF tem estrutura física (escritório), equipe real, anos de mercado
2. **Missão Clara**: Cuidar da carreira do atleta 360° (não apenas contratos)
3. **Diferenciação**: O que nos torna únicos (experiência + proximidade + credibilidade)
4. **Transparência**: Mostramos QUEM SOMOS (fotos reais, não stock photos)
5. **Humanização**: Somos pessoas reais cuidando de pessoas reais

### Estrutura Atual vs Ideal

❌ **ANTES** (Problemas críticos - empresa.php):
- **Visual 2004**: Inline styles (#444), barras laranja separando seções
- **Título genérico**: "EMPRESA" (frio, corporativo, sem emoção)
- **Estrutura fragmentada**: 4 seções separadas (Empresa / Missão / Fazemos / Diferencial)
- **Barras laranja horríveis**: Background #f18322 com padding 10px (amador)
- **Zero iconografia**: Sem ícones, sem identidade visual
- **Fotos sem estratégia**: 3 fotos do escritório jogadas no meio
- **Sem storytelling**: Conteúdo do DB jogado em `<div class="bg">`
- **Sem hierarquia**: Tudo parece igual (H1 nas barras laranja)
- **Sem microinterações**: Página estática, sem vida
- **Inconsistente**: Não segue design system da Home/Contato/Serviços

✅ **DEPOIS** (Objetivos estratégicos):
- **Elegante & Sexy**: Design moderno com microinterações refinadas
- **Título Emocional**: "SOBRE A TAF SPORTS" ou "SOBRE NÓS" (conexão)
- **Estrutura Integrada**: Storytelling contínuo (não seções separadas)
- **Hero Banner Consistente**: Mesmo padrão de Contato/Serviços
- **Iconografia Estratégica**: Ícones únicos para cada seção
- **Fotos Integradas**: Grid de fotos do escritório (elegante, profissional)
- **Storytelling**: Conteúdo dinâmico (DB) apresentado com hierarquia visual
- **Hierarquia Clara**: H1 (Hero) > H2 (Seções) > P (Conteúdo)
- **Microinterações**: Hover effects, transitions, feedback visual
- **Consistência Total**: 100% design system TAF

---

## 👔 FASE 2: DESIGN COUNCIL - OS 17 MESTRES DECIDEM

### Steve Jobs (Product Vision)
> "People don't buy WHAT you do, they buy WHY you do it."

**Decisão para "Sobre Nós"**:
- A página não deve listar FATOS sobre a empresa - deve contar a **HISTÓRIA DO PORQUÊ**
- **WHY**: Por que a TAF existe? → "Cuidar de quem vive o esporte"
- **HOW**: Como fazemos isso? → "Gestão 360°, experiência, proximidade"
- **WHAT**: O que fazemos? → "Gerenciamos carreiras esportivas"
- **Ordem**: WHY → HOW → WHAT (Golden Circle de Simon Sinek)
- **Emoção**: Página deve fazer usuário SENTIR confiança, não apenas LER sobre a empresa

### Jony Ive (Simplicity & Craft)
> "Simplicity is the ultimate sophistication."

**Decisão para "Sobre Nós"**:
- **Remover**: Barras laranja horríveis, inline styles, fragmentação visual
- **Adicionar**: Espaço branco generoso, ícones significativos, fotos integradas
- **Detalhes**: Border-radius 8px, sombras sutis, transições 300ms
- **Craft**: Grid de fotos do escritório (não jogadas ao acaso)
- **Alinhamento**: Conteúdo centralizado, max-width 900px (leitura confortável)

### Mark Wheeler (User Psychology)
**Decisão para "Sobre Nós"**:
- **Reduzir ansiedade**: Fotos REAIS do escritório = "essa empresa existe de verdade"
- **Prova Social**: Escritório físico, estrutura profissional
- **Escaneabilidade**: Ícones grandes, títulos bold, seções curtas
- **Trust Signals**: Fotos autênticas (não stock photos), missão clara
- **Affordance**: Seções devem convidar à leitura (hierarquia visual)

### Leo Natsume (Visual Hierarchy)
**Decisão para "Sobre Nós"**:
Hierarquia em 5 níveis:

1. **Hero Banner** (H1): "SOBRE A TAF SPORTS" - 48px desktop, Coda, bold
2. **Seção Introdutória** (P): Quem somos em 2-3 linhas - 18px, regular
3. **Títulos de Seções** (H2): Missão / O Que Fazemos / Diferencial - 32px, semibold
4. **Conteúdo** (P): Texto dinâmico do DB - 17px, regular, line-height 1.8
5. **CTAs** (Button): "Fale Conosco" - 17px, bold, uppercase

**Layout Visual**:
- Hero Banner (imagem + overlay + título)
- Intro Section (texto centralizado, max-width 900px)
- Content Sections (alternância Texto Left / Right + Ícone)
- Photo Gallery (grid 3 colunas das fotos do escritório)
- CTA Final ("Conheça Nossos Serviços" / "Fale Conosco")

### Luke Wroblewski (UX Best Practices)
**Decisão para "Sobre Nós"**:
- **F-Pattern**: Usuário escaneia esquerda → direita, top → bottom
- **Progressive Disclosure**: Seções curtas (não textões)
- **Chunking**: Máximo 3-4 parágrafos por seção
- **Scannability**: Ícones à esquerda, texto à direita
- **Mobile Touch**: Padding generoso (48px mínimo)

### Dieter Rams (Good Design Principles)
**Decisão para "Sobre Nós"**:
- **Useful**: Cada seção responde uma pergunta do usuário
- **Aesthetic**: Design bonito, mas conteúdo é protagonista
- **Understandable**: Linguagem clara, sem jargão corporativo
- **Honest**: Fotos reais, não stock photos
- **Long-lasting**: Design que envelhece bem

### Don Norman (Usability)
**Decisão para "Sobre Nós"**:
- **Affordances**: Seções com borda sutil = "você pode ler isso"
- **Feedback**: Fotos com hover effect (scale, shadow)
- **Mapping**: Ícones mapeiam conceitos (🎯 = Missão, 💼 = Fazemos, ⭐ = Diferencial)
- **Constraints**: Layout guia o olho verticalmente

### Paul Rand (Branding & Identity)
**Decisão para "Sobre Nós"**:
- **Identidade**: Ícones únicos (não genéricos)
- **Cor da marca**: Orange (#F18322) em ícones, títulos, CTAs
- **Consistência**: Mesma tipografia (Coda) em todos os títulos
- **Memorable**: Usuário deve lembrar "TAF = confiável" após visitar

### Massimo Vignelli (Grids & Systems)
**Decisão para "Sobre Nós"**:
- **Grid System**: 1 coluna mobile, 2 colunas desktop (texto + ícone)
- **Alinhamento**: Tudo alinhado ao grid central
- **Ritmo**: Espaçamento vertical consistente (80px entre seções)
- **Proporção**: Fotos com aspect ratio 4:3

### Josef Müller-Brockmann (Swiss Design)
**Decisão para "Sobre Nós"**:
- **Tipografia**: Hierarquia clara, tamanhos proporcionais
- **Espaço Branco**: Generoso ao redor de cada seção
- **Grid Modular**: Fotos alinhadas em grid 3 colunas
- **Objetividade**: Comunicação direta

### Saul Bass (Iconography)
**Decisão para "Sobre Nós"**:
Ícones únicos para cada seção:
1. **Sobre a TAF**: `mdi:office-building` (prédio/escritório)
2. **Missão**: `mdi:target` (alvo/objetivo)
3. **O Que Fazemos**: `mdi:account-group` (equipe/gestão)
4. **Diferencial**: `mdi:star-box` (estrela/diferenciação)

### Alan Fletcher (Visual Communication)
**Decisão para "Sobre Nós"**:
- **Clareza**: Cada seção deve ser entendida em 5 segundos
- **Contraste**: Título bold vs conteúdo regular
- **Alinhamento**: Centralizad o (não justified)
- **Redundância**: Ícone + Título + Texto

### Milton Glaser (Emotional Design)
**Decisão para "Sobre Nós"**:
- **Emoção**: Página deve transmitir "cuidado, confiança, proximidade"
- **Cor**: Orange = "paixão pelo futebol, energia"
- **Forma**: Bordas arredondadas = "acolhedor, humano"
- **Fotos Reais**: Escritório real = "autenticidade"

### Jessica Hische (Typography)
**Decisão para "Sobre Nós"**:
- **Fonte de Display**: 'Coda' para títulos (identidade TAF)
- **Fonte de Corpo**: System fonts (legibilidade)
- **Line Height**: 1.8 para conteúdo (conforto)
- **Letter Spacing**: Títulos com tracking 0.5px

### Aaron Draplin (Bold Simplicity)
**Decisão para "Sobre Nós"**:
- **Ousadia**: Seções com presença forte
- **Simplicidade**: Sem gradientes, sem efeitos 3D
- **Contraste**: Preto + Branco + Orange
- **Impacto**: Hero section deve "pegar" o usuário

### Susan Kare (Icon Design)
**Decisão para "Sobre Nós"**:
- **Legibilidade**: Ícones 64px mínimo
- **Metáfora**: Ícones representam exatamente o conceito
- **Consistência**: Todos ícones Iconify MDI
- **Cor**: Ícones sempre orange (#F18322)

### Erik Spiekermann (Functional Typography)
**Decisão para "Sobre Nós"**:
- **Função**: Tipografia guia o olho (H1 → H2 → P → CTA)
- **Legibilidade**: Nunca comprometer por estética
- **Sistema**: Escala tipográfica 16px base → 1.25 ratio
- **Acessibilidade**: Contraste 7:1 (WCAG AAA)

---

## 🎨 FASE 3: DESIGN SYSTEM APPLICATION

### Paleta de Cores (TAF Design System)

```css
--taf-black: #000000          /* Textos principais */
--taf-orange: #F18322         /* Ícones, CTAs, hover */
--taf-white: #FFFFFF          /* Backgrounds */
--taf-gray-light: #E2E8F0     /* Borders */
--taf-gray-medium: #718096    /* Textos secundários */
--taf-gray-dark: #2D3748      /* Conteúdo */
```

### Tipografia (Hierarquia)

```
H1 (Hero Title): 'Coda', 48px desktop / 36px mobile, bold, #000
H2 (Section Title): 'Coda', 32px desktop / 28px mobile, semibold, #000
P (Intro): System font, 18px, regular, #718096
P (Content): System font, 17px, regular, #2D3748, line-height 1.8
```

### Spacing (8px Baseline Grid)

```
--space-xs: 8px
--space-sm: 12px
--space-md: 16px
--space-lg: 24px
--space-xl: 32px
--space-2xl: 48px
--space-3xl: 80px
```

### Components (Atomic Design)

#### Atoms:
- Icon (Iconify, 64px)
- Section Title (H2, Coda, 32px)
- Content Paragraph (P, 17px)
- Photo (img, aspect-ratio 4/3)

#### Molecules:
- Icon + Title + Text (seção)
- Photo Grid (3 fotos lado a lado)
- CTA Button Group

#### Organisms:
- Hero Banner
- Content Sections (4 seções)
- Photo Gallery
- CTA Section

---

## 🏗️ FASE 4: IMPLEMENTAÇÃO (BEGINNING → MIDDLE → END)

### BEGINNING: Estrutura HTML Semântica

**Objetivo**: Criar fundação sólida, preservando conteúdo dinâmico do DB

```html
<!-- Hero Banner (consistente com Contato/Serviços) -->
<div class="taf-about-banner">
  <div class="taf-about-banner__image" style="background-image: url('header.png');">
    <div class="taf-about-banner__overlay">
      <div class="taf-about-banner__content">
        <h1 class="taf-about-banner__title">
          <span class="iconify taf-about-banner__icon" data-icon="mdi:office-building"></span>
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

  <!-- Intro Section (conteúdo dinâmico: $empresas) -->
  <div class="taf-about__intro">
    <?php foreach($empresas as $empresa) { echo $empresa->conteudo; } ?>
  </div>

  <!-- Photo Gallery (fotos do escritório) -->
  <div class="taf-about__photos">
    <div class="taf-about__photo-grid">
      <img src="empresa1.jpeg" alt="Escritório TAF Sports 1" class="taf-about__photo">
      <img src="empresa2.jpeg" alt="Escritório TAF Sports 2" class="taf-about__photo">
      <img src="empresa3.jpeg" alt="Escritório TAF Sports 3" class="taf-about__photo">
    </div>
  </div>

  <!-- Section: Missão -->
  <div class="taf-about__section">
    <div class="taf-about__section-icon">
      <span class="iconify" data-icon="mdi:target"></span>
    </div>
    <div class="taf-about__section-content">
      <h2 class="taf-about__section-title">Missão</h2>
      <div class="taf-about__section-text">
        <?php foreach($missao as $missao_item) { echo $missao_item->conteudo; } ?>
      </div>
    </div>
  </div>

  <!-- Section: O Que Fazemos -->
  <div class="taf-about__section taf-about__section--reverse">
    <div class="taf-about__section-icon">
      <span class="iconify" data-icon="mdi:account-group"></span>
    </div>
    <div class="taf-about__section-content">
      <h2 class="taf-about__section-title">O Que Fazemos</h2>
      <div class="taf-about__section-text">
        <?php foreach($fazemos as $fazemos_item) { echo $fazemos_item->conteudo; } ?>
      </div>
    </div>
  </div>

  <!-- Section: Diferencial -->
  <div class="taf-about__section">
    <div class="taf-about__section-icon">
      <span class="iconify" data-icon="mdi:star-box"></span>
    </div>
    <div class="taf-about__section-content">
      <h2 class="taf-about__section-title">Diferencial</h2>
      <div class="taf-about__section-text">
        <?php foreach($diferencial as $diferencial_item) { echo $diferencial_item->conteudo; } ?>
      </div>
    </div>
  </div>

  <!-- CTA Section -->
  <div class="taf-about__cta">
    <h2 class="taf-about__cta-title">Conheça Nossos Serviços</h2>
    <p class="taf-about__cta-text">
      Descubra como podemos transformar sua carreira esportiva com nossa gestão 360°.
    </p>
    <div class="taf-about__cta-buttons">
      <a href="<?=base_url();?>servicos" class="taf-btn-primary">
        <span class="iconify" data-icon="mdi:hand-heart"></span>
        Nossos Serviços
      </a>
      <a href="<?=base_url();?>contato" class="taf-btn-primary">
        <span class="iconify" data-icon="mdi:email-outline"></span>
        Fale Conosco
      </a>
    </div>
  </div>

</section>
```

**Princípios aplicados**:
- ✅ Semantic HTML (section, h1, h2, p)
- ✅ ARIA labels
- ✅ Conteúdo dinâmico preservado (loops PHP)
- ✅ Iconografia estratégica

### MIDDLE: CSS Styling (Design System)

**Objetivo**: Aplicar design system, criar microinterações

```css
/* Hero Banner */
.taf-about-banner {
  width: 100%;
  position: relative;
  overflow: hidden;
}

.taf-about-banner__image {
  width: 100%;
  height: 300px;
  background-size: cover;
  background-position: center center;
  position: relative;
}

@media (min-width: 992px) {
  .taf-about-banner__image {
    height: 400px;
  }
}

.taf-about-banner__overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: linear-gradient(
    135deg,
    rgba(0, 0, 0, 0.75) 0%,
    rgba(241, 131, 34, 0.4) 100%
  );
  display: flex;
  align-items: center;
  justify-content: center;
}

.taf-about-banner__title {
  font-family: 'Coda', cursive;
  font-size: 36px;
  font-weight: 700;
  color: #FFFFFF;
  margin: 0 0 16px 0;
  letter-spacing: 2px;
  text-transform: uppercase;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 16px;
}

@media (min-width: 992px) {
  .taf-about-banner__title {
    font-size: 48px;
  }
}

.taf-about-banner__icon {
  font-size: 40px;
  color: #F18322;
}

/* Intro Section */
.taf-about__intro {
  max-width: 900px;
  margin: 80px auto 60px auto;
  text-align: center;
  padding: 0 24px;
}

.taf-about__intro p {
  font-size: 18px;
  line-height: 1.8;
  color: #2D3748;
  margin-bottom: 20px;
}

/* Photo Gallery */
.taf-about__photos {
  max-width: 1400px;
  margin: 60px auto;
  padding: 0 24px;
}

.taf-about__photo-grid {
  display: grid;
  grid-template-columns: 1fr;
  gap: 24px;
}

@media (min-width: 768px) {
  .taf-about__photo-grid {
    grid-template-columns: repeat(3, 1fr);
    gap: 32px;
  }
}

.taf-about__photo {
  width: 100%;
  height: 400px;
  object-fit: cover;
  object-position: center;
  border-radius: 8px;
  transition: all 300ms ease-out;
}

.taf-about__photo:hover {
  transform: scale(1.05);
  box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
}

/* Content Sections */
.taf-about__section {
  max-width: 1200px;
  margin: 80px auto;
  padding: 0 24px;
  display: grid;
  grid-template-columns: 1fr;
  gap: 40px;
  align-items: center;
}

@media (min-width: 992px) {
  .taf-about__section {
    grid-template-columns: 120px 1fr;
    gap: 60px;
  }

  .taf-about__section--reverse {
    grid-template-columns: 1fr 120px;
  }

  .taf-about__section--reverse .taf-about__section-icon {
    order: 2;
  }

  .taf-about__section--reverse .taf-about__section-content {
    order: 1;
    text-align: right;
  }
}

.taf-about__section-icon {
  width: 100px;
  height: 100px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgba(241, 131, 34, 0.1);
  border-radius: 50%;
  margin: 0 auto;
  transition: all 300ms ease-out;
}

.taf-about__section-icon .iconify {
  font-size: 48px;
  color: #F18322;
}

.taf-about__section:hover .taf-about__section-icon {
  background: #F18322;
  transform: scale(1.1);
}

.taf-about__section:hover .taf-about__section-icon .iconify {
  color: #FFFFFF;
}

.taf-about__section-title {
  font-family: 'Coda', cursive;
  font-size: 28px;
  font-weight: 600;
  color: #000000;
  margin: 0 0 20px 0;
  letter-spacing: 0.5px;
}

@media (min-width: 992px) {
  .taf-about__section-title {
    font-size: 32px;
  }
}

.taf-about__section-text {
  font-size: 17px;
  line-height: 1.8;
  color: #2D3748;
}

.taf-about__section-text p {
  margin-bottom: 16px;
}

/* CTA Section */
.taf-about__cta {
  max-width: 900px;
  margin: 100px auto 0 auto;
  text-align: center;
  padding: 60px 32px;
  background: rgba(241, 131, 34, 0.03);
  border-radius: 12px;
  border: 1px solid rgba(241, 131, 34, 0.1);
}

.taf-about__cta-title {
  font-family: 'Coda', cursive;
  font-size: 28px;
  font-weight: 700;
  color: #000000;
  margin: 0 0 16px 0;
}

@media (min-width: 992px) {
  .taf-about__cta-title {
    font-size: 32px;
  }
}

.taf-about__cta-text {
  font-size: 18px;
  line-height: 1.7;
  color: #718096;
  margin: 0 0 32px 0;
}

.taf-about__cta-buttons {
  display: flex;
  flex-direction: column;
  gap: 16px;
  align-items: center;
}

@media (min-width: 768px) {
  .taf-about__cta-buttons {
    flex-direction: row;
    justify-content: center;
    gap: 20px;
  }
}
```

---

## 🎯 FASE 5: CHECKLIST DE VALIDAÇÃO

### Hierarquia Visual ✅
- [ ] H1 (Hero) maior e mais visível
- [ ] H2 (Seções) escaneáveis
- [ ] P (Conteúdo) legível, line-height 1.8

### Microinterações ✅
- [ ] Photos hover: scale + shadow
- [ ] Icon wrapper hover: background orange + scale
- [ ] Transições suaves (300ms)

### Acessibilidade ✅
- [ ] ARIA labels
- [ ] Semantic HTML
- [ ] Contraste WCAG AAA (7:1)
- [ ] Focus states visíveis

### Responsividade ✅
- [ ] Mobile (320px+): 1 coluna
- [ ] Tablet (768px+): Fotos 3 colunas
- [ ] Desktop (992px+): Seções ícone + texto

### Consistência ✅
- [ ] Mesmas cores (black, orange, white)
- [ ] Mesma tipografia (Coda + System)
- [ ] Mesmo spacing (24px, 32px, 48px)
- [ ] Mesmos border-radius (8px)
- [ ] Mesmo padrão hero banner

### Conteúdo Dinâmico ✅
- [ ] Preserva loops PHP do DB
- [ ] `$empresas` na intro
- [ ] `$missao` na seção Missão
- [ ] `$fazemos` na seção O Que Fazemos
- [ ] `$diferencial` na seção Diferencial

---

## 📊 MÉTRICAS DE SUCESSO

### Antes (Baseline)
- Visual score: 1/10 (anos 2004, barras laranja horríveis)
- Consistência: 0/10 (zero design system)
- Trust: 3/10 (sem fotos, sem estrutura visual)
- Storytelling: 0/10 (fragmentado, sem hierarquia)
- Engagement: Baixo (usuário lê e sai confuso)

### Depois (Meta)
- Visual score: 9/10 (moderno, elegante, sexy)
- Consistência: 10/10 (100% design system TAF)
- Trust: 9/10 (fotos reais, estrutura profissional)
- Storytelling: 8/10 (storytelling contínuo, hierarquia clara)
- Engagement: Alto (CTAs claros, microinterações)

---

## 🚀 IMPLEMENTAÇÃO FINAL

Vou agora implementar:
1. ✅ **empresa.php** → HTML semântico preservando conteúdo dinâmico
2. ✅ **sobre-nos.css** → CSS moderno com design system completo
3. ✅ **inc_topo.php** → Mudar menu "Empresa" → "Sobre Nós"
4. ✅ **Iconografia** → Ícones únicos para cada seção
5. ✅ **Testing** → Mobile, tablet, desktop

**Princípios guia**:
- Elegant, not fancy
- Consistent, not repetitive
- Sexy, not pornhub
- Professional, not corporate
- Strategic, not generic
- Authentic, not fake (fotos reais, não stock photos)

**Mudanças de Nomenclatura**:
- "EMPRESA" → "SOBRE A TAF SPORTS" ou "SOBRE NÓS" (hero title)
- Menu "Empresa" → "Sobre Nós" (desktop + mobile)
- Estrutura: Storytelling contínuo (não 4 barras laranja separadas)

---

**Assinatura do Design Council**:
Steve Jobs, Jony Ive, Mark Wheeler, Leo Natsume, Luke Wroblewski, Dieter Rams, Don Norman, Paul Rand, Massimo Vignelli, Josef Müller-Brockmann, Saul Bass, Alan Fletcher, Milton Glaser, Jessica Hische, Aaron Draplin, Susan Kare, Erik Spiekermann

✅ **Aprovado para implementação**
