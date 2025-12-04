<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * SEO Helper - TAF Sports
 * 
 * Centraliza todas as funções de SEO para garantir consistência
 * e facilitar manutenção. Implementação de nível senior.
 * 
 * @package     TAF Sports
 * @author      TAF Sports Dev Team
 * @version     1.0.0
 */

if (!function_exists('taf_seo_config')) {
  /**
   * Retorna configurações SEO base da TAF Sports
   * @return array
   */
  function taf_seo_config()
  {
    return array(
      'site_name' => 'TAF Sports',
      'site_slogan' => 'Assessoria Esportiva Profissional',
      'domain' => 'https://www.tafsportsbr.com',
      'brand_color' => '#f18322',
      'phone' => '+55 62 3300-1229',
      'email' => 'contato@tafsportsbr.com',
      'founded' => '2010',
      'ceo' => 'Thiago Sampaio',
      'ceo_title' => 'Agente FIFA',
      'address' => array(
        'street' => 'Av. Olinda, 960 - Business Tower, Sala 310',
        'building' => 'Edifício Lozandes',
        'neighborhood' => 'Alphaville Araguaia',
        'city' => 'Goiânia',
        'state' => 'GO',
        'zip' => '74884-120',
        'country' => 'BR'
      ),
      'coordinates' => array(
        'lat' => -16.6869,
        'lng' => -49.2648
      ),
      'social' => array(
        'instagram' => 'https://www.instagram.com/tafsportsbr/',
        'facebook' => 'https://www.facebook.com/tafsportsbr/'
      ),
      // Palavra-chave foco
      'focus_keyword' => 'assessoria esportiva',
      // Palavras-chave por página
      'keywords' => array(
        'home' => 'assessoria esportiva, gestão de carreiras futebol, agente de jogadores, TAF Sports, empresário de futebol, agente FIFA Brasil, intermediário de atletas',
        'empresa' => 'assessoria esportiva Goiânia, agente FIFA Thiago Sampaio, gestão de carreiras atletas, TAF Sports empresa, sobre TAF Sports',
        'servicos' => 'serviços assessoria esportiva, gestão de carreira 360, assessoria contratual futebol, marketing esportivo atletas, gestão de imagem jogador',
        'clientes' => 'atletas TAF Sports, jogadores profissionais assessorados, clientes assessoria esportiva, portfólio agente FIFA',
        'contato' => 'contato assessoria esportiva, falar com agente FIFA, TAF Sports Goiânia telefone, contratar gestão de carreira'
      )
    );
  }
}

if (!function_exists('taf_seo_description')) {
  /**
   * Retorna meta description otimizada por página
   * @param string $pagina Nome da página
   * @param string $custom Descrição customizada (opcional)
   * @return string
   */
  function taf_seo_description($pagina, $custom = '')
  {
    if (!empty($custom)) {
      return $custom . ' | TAF Sports - Assessoria Esportiva';
    }

    $descriptions = array(
      'home' => 'TAF Sports: assessoria esportiva líder em gestão de carreiras de atletas e treinadores de futebol. Agente FIFA com 19 anos de experiência. Goiânia-GO.',
      'empresa' => 'Conheça a TAF Sports: assessoria esportiva fundada pelo Agente FIFA Thiago Sampaio. 19 anos de experiência em gestão de carreiras no futebol brasileiro.',
      'servicos' => 'Serviços de assessoria esportiva completa: gestão de carreira 360°, assessoria contratual, marketing esportivo, suporte financeiro e transição pós-carreira.',
      'clientes' => 'Veja nossos atletas e treinadores assessorados pela TAF Sports. Portfólio completo de profissionais que confiam em nossa assessoria esportiva.',
      'contato' => 'Entre em contato com a TAF Sports. Assessoria esportiva em Goiânia-GO. Resposta em até 24 horas. Telefone: (62) 3300-1229.',
      'cliente' => 'Perfil do atleta assessorado pela TAF Sports. Gestão de carreira profissional com assessoria esportiva completa.'
    );

    return isset($descriptions[$pagina]) ? $descriptions[$pagina] : $descriptions['home'];
  }
}

if (!function_exists('taf_seo_title')) {
  /**
   * Retorna title otimizado por página
   * @param string $pagina Nome da página
   * @param string $custom Título customizado (opcional)
   * @return string
   */
  function taf_seo_title($pagina, $custom = '')
  {
    $suffix = ' | TAF Sports - Assessoria Esportiva';

    if (!empty($custom)) {
      return $custom . $suffix;
    }

    $titles = array(
      'home' => 'TAF Sports - Assessoria Esportiva | Gestão de Carreiras no Futebol',
      'empresa' => 'Sobre Nós' . $suffix,
      'servicos' => 'Serviços de Gestão de Carreira 360°' . $suffix,
      'clientes' => 'Nossos Atletas e Treinadores' . $suffix,
      'contato' => 'Contato' . $suffix
    );

    return isset($titles[$pagina]) ? $titles[$pagina] : $titles['home'];
  }
}

if (!function_exists('taf_schema_organization')) {
  /**
   * Gera Schema.org JSON-LD para SportsOrganization
   * @return string JSON-LD script tag
   */
  function taf_schema_organization()
  {
    $config = taf_seo_config();
    $CI =& get_instance();

    $schema = array(
      '@context' => 'https://schema.org',
      '@type' => 'SportsOrganization',
      '@id' => $config['domain'] . '/#organization',
      'name' => $config['site_name'],
      'alternateName' => 'TAF Sports Assessoria Esportiva',
      'url' => $config['domain'],
      'logo' => array(
        '@type' => 'ImageObject',
        'url' => base_url('assets/img/taf.png'),
        'width' => 200,
        'height' => 200
      ),
      'image' => base_url('assets/img/og-image.jpg'),
      'description' => 'Assessoria esportiva líder em gestão de carreiras de atletas e treinadores de futebol. Agente FIFA com 19 anos de experiência.',
      'foundingDate' => $config['founded'],
      'sport' => 'Futebol',
      'slogan' => $config['site_slogan'],
      'address' => array(
        '@type' => 'PostalAddress',
        'streetAddress' => $config['address']['street'],
        'addressLocality' => $config['address']['city'],
        'addressRegion' => $config['address']['state'],
        'postalCode' => $config['address']['zip'],
        'addressCountry' => $config['address']['country']
      ),
      'geo' => array(
        '@type' => 'GeoCoordinates',
        'latitude' => $config['coordinates']['lat'],
        'longitude' => $config['coordinates']['lng']
      ),
      'contactPoint' => array(
        '@type' => 'ContactPoint',
        'telephone' => $config['phone'],
        'contactType' => 'customer service',
        'email' => $config['email'],
        'availableLanguage' => array('Portuguese', 'English', 'Spanish'),
        'areaServed' => 'BR'
      ),
      'founder' => array(
        '@type' => 'Person',
        '@id' => $config['domain'] . '/#founder',
        'name' => $config['ceo'],
        'jobTitle' => $config['ceo_title'],
        'sameAs' => array_values($config['social'])
      ),
      'sameAs' => array_values($config['social']),
      'areaServed' => array(
        '@type' => 'Country',
        'name' => 'Brasil'
      ),
      'knowsAbout' => array(
        'Assessoria Esportiva',
        'Gestão de Carreiras',
        'Intermediação de Transferências',
        'Marketing Esportivo',
        'Agente FIFA'
      ),
      'hasOfferCatalog' => array(
        '@type' => 'OfferCatalog',
        'name' => 'Serviços de Assessoria Esportiva',
        'itemListElement' => array(
          array('@type' => 'Offer', 'itemOffered' => array('@type' => 'Service', 'name' => 'Gestão de Carreira')),
          array('@type' => 'Offer', 'itemOffered' => array('@type' => 'Service', 'name' => 'Assessoria Contratual')),
          array('@type' => 'Offer', 'itemOffered' => array('@type' => 'Service', 'name' => 'Marketing Esportivo')),
          array('@type' => 'Offer', 'itemOffered' => array('@type' => 'Service', 'name' => 'Suporte Financeiro')),
          array('@type' => 'Offer', 'itemOffered' => array('@type' => 'Service', 'name' => 'Transição Pós-Carreira'))
        )
      )
    );

    return '<script type="application/ld+json">' . json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) . '</script>';
  }
}

if (!function_exists('taf_schema_breadcrumb')) {
  /**
   * Gera Schema.org JSON-LD para BreadcrumbList
   * @param string $pagina Nome da página atual
   * @param string $titulo Título da página (opcional)
   * @return string JSON-LD script tag
   */
  function taf_schema_breadcrumb($pagina, $titulo = '')
  {
    $config = taf_seo_config();

    $breadcrumbs = array(
      array(
        '@type' => 'ListItem',
        'position' => 1,
        'name' => 'Home',
        'item' => $config['domain']
      )
    );

    $pages = array(
      'empresa' => array('name' => 'Sobre Nós', 'url' => '/empresa'),
      'servicos' => array('name' => 'Serviços', 'url' => '/servicos'),
      'clientes' => array('name' => 'Clientes', 'url' => '/clientes'),
      'contato' => array('name' => 'Contato', 'url' => '/contato'),
      'cliente' => array('name' => 'Atleta', 'url' => '/atleta')
    );

    if ($pagina !== 'home' && isset($pages[$pagina])) {
      $breadcrumbs[] = array(
        '@type' => 'ListItem',
        'position' => 2,
        'name' => $pages[$pagina]['name'],
        'item' => $config['domain'] . $pages[$pagina]['url']
      );

      // Se for página de atleta individual, adiciona terceiro nível
      if ($pagina === 'cliente' && !empty($titulo)) {
        $breadcrumbs[1]['name'] = 'Clientes';
        $breadcrumbs[1]['item'] = $config['domain'] . '/clientes';
        $breadcrumbs[] = array(
          '@type' => 'ListItem',
          'position' => 3,
          'name' => $titulo
        );
      }
    }

    $schema = array(
      '@context' => 'https://schema.org',
      '@type' => 'BreadcrumbList',
      'itemListElement' => $breadcrumbs
    );

    return '<script type="application/ld+json">' . json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';
  }
}

if (!function_exists('taf_schema_services')) {
  /**
   * Gera Schema.org JSON-LD para página de Serviços
   * @return string JSON-LD script tag
   */
  function taf_schema_services()
  {
    $config = taf_seo_config();

    $services = array(
      array(
        'name' => 'Gestão de Carreira',
        'description' => 'Planejamento estratégico personalizado, acompanhamento da evolução profissional e orientação em tomadas de decisão dentro e fora de campo.',
        'serviceType' => 'Assessoria Esportiva'
      ),
      array(
        'name' => 'Assessoria Contratual e Jurídica',
        'description' => 'Negociação de contratos com clubes e patrocinadores, análise de documentos legais e orientação sobre direitos trabalhistas.',
        'serviceType' => 'Assessoria Jurídica Esportiva'
      ),
      array(
        'name' => 'Marketing e Imagem',
        'description' => 'Gestão da marca pessoal do atleta, fortalecimento de presença nas redes sociais e captação de patrocínios.',
        'serviceType' => 'Marketing Esportivo'
      ),
      array(
        'name' => 'Desenvolvimento e Performance',
        'description' => 'Acompanhamento de treinos, indicação de profissionais de preparação física e mental, orientação nutricional.',
        'serviceType' => 'Consultoria de Performance'
      ),
      array(
        'name' => 'Suporte Administrativo e Financeiro',
        'description' => 'Organização de agendas, consultoria financeira e patrimonial, orientação tributária.',
        'serviceType' => 'Consultoria Financeira Esportiva'
      ),
      array(
        'name' => 'Transição e Pós-Carreira',
        'description' => 'Planejamento para encerramento da carreira, preparação para novas áreas de atuação e construção de legado.',
        'serviceType' => 'Planejamento de Carreira'
      )
    );

    $items = array();
    foreach ($services as $index => $service) {
      $items[] = array(
        '@type' => 'Service',
        'position' => $index + 1,
        'name' => $service['name'],
        'description' => $service['description'],
        'serviceType' => $service['serviceType'],
        'provider' => array(
          '@type' => 'SportsOrganization',
          '@id' => $config['domain'] . '/#organization'
        ),
        'areaServed' => array(
          '@type' => 'Country',
          'name' => 'Brasil'
        )
      );
    }

    $schema = array(
      '@context' => 'https://schema.org',
      '@type' => 'ItemList',
      'name' => 'Serviços de Assessoria Esportiva TAF Sports',
      'description' => 'Lista completa de serviços de gestão de carreira 360° para atletas e treinadores de futebol.',
      'numberOfItems' => count($services),
      'itemListElement' => $items
    );

    return '<script type="application/ld+json">' . json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) . '</script>';
  }
}

if (!function_exists('taf_schema_faq')) {
  /**
   * Gera Schema.org JSON-LD para FAQPage
   * @return string JSON-LD script tag
   */
  function taf_schema_faq()
  {
    $faqs = array(
      array(
        'question' => 'O que é assessoria esportiva?',
        'answer' => 'Assessoria esportiva é um serviço profissional que oferece gestão completa da carreira de atletas e treinadores, incluindo negociação de contratos, marketing pessoal, suporte jurídico e financeiro, e planejamento estratégico de carreira.'
      ),
      array(
        'question' => 'Como funciona a gestão de carreira de um jogador de futebol?',
        'answer' => 'A gestão de carreira envolve planejamento estratégico personalizado, intermediação com clubes, negociação de contratos, gestão de imagem, acompanhamento de performance e suporte em todas as áreas da vida profissional do atleta.'
      ),
      array(
        'question' => 'O que faz um agente FIFA?',
        'answer' => 'Um agente FIFA é um profissional licenciado pela FIFA para intermediar transferências de jogadores entre clubes em âmbito nacional e internacional, além de negociar contratos de trabalho e representar os interesses do atleta.'
      ),
      array(
        'question' => 'Quais são os serviços oferecidos pela TAF Sports?',
        'answer' => 'A TAF Sports oferece gestão de carreira 360°: planejamento estratégico, assessoria contratual e jurídica, marketing e imagem, desenvolvimento e performance, suporte administrativo e financeiro, e transição pós-carreira.'
      ),
      array(
        'question' => 'Como entrar em contato com a TAF Sports?',
        'answer' => 'Você pode entrar em contato pelo telefone (62) 3300-1229, pelo email contato@tafsportsbr.com, ou visitando nosso escritório no Edifício Lozandes, Av. Olinda 960, Sala 310, em Goiânia-GO.'
      )
    );

    $items = array();
    foreach ($faqs as $faq) {
      $items[] = array(
        '@type' => 'Question',
        'name' => $faq['question'],
        'acceptedAnswer' => array(
          '@type' => 'Answer',
          'text' => $faq['answer']
        )
      );
    }

    $schema = array(
      '@context' => 'https://schema.org',
      '@type' => 'FAQPage',
      'mainEntity' => $items
    );

    return '<script type="application/ld+json">' . json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) . '</script>';
  }
}

if (!function_exists('taf_schema_contact_page')) {
  /**
   * Gera Schema.org JSON-LD para ContactPage
   * @return string JSON-LD script tag
   */
  function taf_schema_contact_page()
  {
    $config = taf_seo_config();

    $schema = array(
      '@context' => 'https://schema.org',
      '@type' => 'ContactPage',
      'name' => 'Contato - TAF Sports',
      'description' => 'Entre em contato com a TAF Sports para assessoria esportiva profissional.',
      'url' => $config['domain'] . '/contato',
      'mainEntity' => array(
        '@type' => 'SportsOrganization',
        '@id' => $config['domain'] . '/#organization'
      )
    );

    return '<script type="application/ld+json">' . json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';
  }
}

if (!function_exists('taf_schema_about_page')) {
  /**
   * Gera Schema.org JSON-LD para AboutPage
   * @return string JSON-LD script tag
   */
  function taf_schema_about_page()
  {
    $config = taf_seo_config();

    $schema = array(
      '@context' => 'https://schema.org',
      '@type' => 'AboutPage',
      'name' => 'Sobre Nós - TAF Sports',
      'description' => 'Conheça a TAF Sports, assessoria esportiva fundada pelo Agente FIFA Thiago Sampaio com 19 anos de experiência.',
      'url' => $config['domain'] . '/empresa',
      'mainEntity' => array(
        '@type' => 'SportsOrganization',
        '@id' => $config['domain'] . '/#organization'
      )
    );

    return '<script type="application/ld+json">' . json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';
  }
}

if (!function_exists('taf_schema_person')) {
  /**
   * Gera Schema.org JSON-LD para Person (Agente FIFA)
   * @return string JSON-LD script tag
   */
  function taf_schema_person()
  {
    $config = taf_seo_config();

    $schema = array(
      '@context' => 'https://schema.org',
      '@type' => 'Person',
      '@id' => $config['domain'] . '/#founder',
      'name' => $config['ceo'],
      'jobTitle' => $config['ceo_title'],
      'description' => 'Agente FIFA com 19 anos de experiência em gestão de carreiras no futebol brasileiro. Fundador da TAF Sports.',
      'worksFor' => array(
        '@type' => 'SportsOrganization',
        '@id' => $config['domain'] . '/#organization'
      ),
      'knowsAbout' => array(
        'Gestão de carreiras esportivas',
        'Intermediação de transferências',
        'Legislação esportiva',
        'Negociação de contratos',
        'Marketing esportivo'
      ),
      'sameAs' => array_values($config['social'])
    );

    return '<script type="application/ld+json">' . json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) . '</script>';
  }
}

if (!function_exists('taf_schema_athlete')) {
  /**
   * Gera Schema.org JSON-LD para atleta individual
   * @param object $atleta Dados do atleta
   * @param object|null $clube Dados do clube atual
   * @return string JSON-LD script tag
   */
  function taf_schema_athlete($atleta, $clube = null)
  {
    $config = taf_seo_config();
    $CI =& get_instance();

    $schema = array(
      '@context' => 'https://schema.org',
      '@type' => 'Person',
      'name' => isset($atleta->apelido) ? $atleta->apelido : '',
      'url' => $config['domain'] . '/atleta/' . (isset($atleta->id) ? $atleta->id : '') . '/' . (isset($atleta->url) ? $atleta->url : ''),
      'image' => base_url('imagens/atletas/' . (isset($atleta->imagem) ? $atleta->imagem : '')),
      'jobTitle' => isset($atleta->posicao) ? $atleta->posicao : 'Jogador de Futebol',
      'description' => 'Atleta profissional assessorado pela TAF Sports.',
      'memberOf' => array(
        '@type' => 'SportsOrganization',
        '@id' => $config['domain'] . '/#organization'
      )
    );

    if ($clube) {
      $schema['worksFor'] = array(
        '@type' => 'SportsTeam',
        'name' => isset($clube->nome) ? $clube->nome : ''
      );
    }

    return '<script type="application/ld+json">' . json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';
  }
}

if (!function_exists('taf_schema_website')) {
  /**
   * Gera Schema.org JSON-LD para WebSite (com SearchAction)
   * @return string JSON-LD script tag
   */
  function taf_schema_website()
  {
    $config = taf_seo_config();

    $schema = array(
      '@context' => 'https://schema.org',
      '@type' => 'WebSite',
      '@id' => $config['domain'] . '/#website',
      'name' => $config['site_name'],
      'alternateName' => 'TAF Sports Assessoria Esportiva',
      'url' => $config['domain'],
      'description' => 'Assessoria esportiva profissional para atletas e treinadores de futebol.',
      'publisher' => array(
        '@type' => 'SportsOrganization',
        '@id' => $config['domain'] . '/#organization'
      ),
      'potentialAction' => array(
        '@type' => 'SearchAction',
        'target' => array(
          '@type' => 'EntryPoint',
          'urlTemplate' => $config['domain'] . '/clientes?buscar={search_term_string}'
        ),
        'query-input' => 'required name=search_term_string'
      ),
      'inLanguage' => 'pt-BR'
    );

    return '<script type="application/ld+json">' . json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) . '</script>';
  }
}

/* End of file seo_helper.php */
/* Location: ./application/helpers/seo_helper.php */
