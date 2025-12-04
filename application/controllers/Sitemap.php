<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Sitemap Controller
 * 
 * Gera sitemap.xml dinâmico para SEO
 * 
 * @package     TAF Sports
 * @author      TAF Sports Dev Team
 * @version     1.0.0
 */
class Sitemap extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Home_model', 'banco');
  }

  /**
   * Gera sitemap.xml
   */
  public function index()
  {
    $this->output->set_content_type('application/xml');

    $base_url = 'https://www.tafsportsbr.com';
    $today = date('Y-m-d');

    // Páginas estáticas
    $static_pages = array(
      array('loc' => '', 'priority' => '1.0', 'changefreq' => 'daily'),
      array('loc' => '/empresa', 'priority' => '0.8', 'changefreq' => 'monthly'),
      array('loc' => '/servicos', 'priority' => '0.9', 'changefreq' => 'monthly'),
      array('loc' => '/clientes', 'priority' => '0.9', 'changefreq' => 'weekly'),
      array('loc' => '/contato', 'priority' => '0.7', 'changefreq' => 'monthly')
    );

    // Atletas dinâmicos
    $atletas = $this->banco->clientesMP(500);

    $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
    $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" ';
    $xml .= 'xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">' . "\n";

    // Páginas estáticas
    foreach ($static_pages as $page) {
      $xml .= "  <url>\n";
      $xml .= "    <loc>{$base_url}{$page['loc']}</loc>\n";
      $xml .= "    <lastmod>{$today}</lastmod>\n";
      $xml .= "    <changefreq>{$page['changefreq']}</changefreq>\n";
      $xml .= "    <priority>{$page['priority']}</priority>\n";
      $xml .= "  </url>\n";
    }

    // Páginas de atletas
    if (!empty($atletas)) {
      foreach ($atletas as $atleta) {
        $url = $base_url . '/atleta/' . $atleta->id . '/' . $atleta->url;
        $xml .= "  <url>\n";
        $xml .= "    <loc>{$url}</loc>\n";
        $xml .= "    <lastmod>{$today}</lastmod>\n";
        $xml .= "    <changefreq>weekly</changefreq>\n";
        $xml .= "    <priority>0.6</priority>\n";

        // Imagem do atleta
        if (!empty($atleta->imagem)) {
          $img_url = $base_url . '/imagens/atletas/' . $atleta->imagem;
          $xml .= "    <image:image>\n";
          $xml .= "      <image:loc>{$img_url}</image:loc>\n";
          $xml .= "      <image:title>" . htmlspecialchars($atleta->apelido, ENT_XML1, 'UTF-8') . " - Atleta TAF Sports</image:title>\n";
          $xml .= "    </image:image>\n";
        }

        $xml .= "  </url>\n";
      }
    }

    $xml .= '</urlset>';

    $this->output->set_output($xml);
  }
}

/* End of file Sitemap.php */
/* Location: ./application/controllers/Sitemap.php */
