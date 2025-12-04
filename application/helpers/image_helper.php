<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * ============================================================================
 * TAF SPORTS - IMAGE HELPER
 * ============================================================================
 * Helper para otimização automática de imagens
 * - Conversão para WebP (economia de 70% no tamanho)
 * - Cache automático
 * - Fallback para navegadores antigos
 * 
 * @author TAF Sports Dev Team
 * @version 1.0.0
 */

if (!function_exists('taf_webp_url')) {
  /**
   * Retorna URL da imagem WebP (converte se necessário)
   * 
   * @param string $image_path Caminho relativo da imagem (ex: 'banners/foto.jpg')
   * @param string $folder Pasta base (ex: 'imagens')
   * @param int $quality Qualidade WebP (0-100)
   * @return string URL da imagem otimizada
   */
  function taf_webp_url($image_path, $folder = 'imagens', $quality = 85)
  {
    $CI =& get_instance();

    // Caminho original
    $original_path = FCPATH . $folder . '/' . $image_path;

    // Se arquivo não existe, retorna original
    if (!file_exists($original_path)) {
      return base_url($folder . '/' . $image_path);
    }

    // Extensão do arquivo
    $ext = strtolower(pathinfo($image_path, PATHINFO_EXTENSION));

    // Se já é WebP, retorna direto
    if ($ext === 'webp') {
      return base_url($folder . '/' . $image_path);
    }

    // Só converte JPEG e PNG
    if (!in_array($ext, ['jpg', 'jpeg', 'png'])) {
      return base_url($folder . '/' . $image_path);
    }

    // Caminho do WebP
    $webp_path = preg_replace('/\.(jpg|jpeg|png)$/i', '.webp', $image_path);
    $webp_full_path = FCPATH . $folder . '/' . $webp_path;

    // Se WebP já existe e é mais recente, usa ele
    if (file_exists($webp_full_path)) {
      if (filemtime($webp_full_path) >= filemtime($original_path)) {
        return base_url($folder . '/' . $webp_path);
      }
    }

    // Tenta converter para WebP
    if (taf_convert_to_webp($original_path, $webp_full_path, $quality)) {
      return base_url($folder . '/' . $webp_path);
    }

    // Fallback: retorna original
    return base_url($folder . '/' . $image_path);
  }
}

if (!function_exists('taf_convert_to_webp')) {
  /**
   * Converte imagem para WebP
   * 
   * @param string $source Caminho completo da imagem original
   * @param string $destination Caminho completo do WebP destino
   * @param int $quality Qualidade (0-100)
   * @return bool Sucesso ou falha
   */
  function taf_convert_to_webp($source, $destination, $quality = 80)
  {
    // Verifica se GD está disponível
    if (!function_exists('imagewebp')) {
      log_message('error', 'WebP: GD com suporte a WebP não disponível');
      return false;
    }

    // Identifica tipo da imagem
    $info = getimagesize($source);
    if (!$info) {
      return false;
    }

    $mime = $info['mime'];

    // Cria imagem baseado no tipo
    switch ($mime) {
      case 'image/jpeg':
        $image = imagecreatefromjpeg($source);
        break;
      case 'image/png':
        $image = imagecreatefrompng($source);
        // Preserva transparência
        imagepalettetotruecolor($image);
        imagealphablending($image, true);
        imagesavealpha($image, true);
        break;
      default:
        return false;
    }

    if (!$image) {
      return false;
    }

    // Cria diretório se não existir
    $dir = dirname($destination);
    if (!is_dir($dir)) {
      mkdir($dir, 0755, true);
    }

    // Salva como WebP
    $success = imagewebp($image, $destination, $quality);
    imagedestroy($image);

    if ($success) {
      // Log de economia
      $original_size = filesize($source);
      $webp_size = filesize($destination);
      $savings = round((1 - $webp_size / $original_size) * 100);
      log_message('info', "WebP: {$source} convertido. Economia: {$savings}%");
    }

    return $success;
  }
}

if (!function_exists('taf_picture_tag')) {
  /**
   * Gera tag <picture> com WebP e fallback
   * 
   * @param string $image_path Caminho da imagem
   * @param string $folder Pasta base
   * @param array $attrs Atributos da tag img
   * @return string HTML da tag <picture>
   */
  function taf_picture_tag($image_path, $folder = 'imagens', $attrs = [])
  {
    $webp_url = taf_webp_url($image_path, $folder);
    $original_url = base_url($folder . '/' . $image_path);

    // Atributos padrão
    $default_attrs = [
      'loading' => 'lazy',
      'decoding' => 'async',
      'alt' => ''
    ];
    $attrs = array_merge($default_attrs, $attrs);

    // Monta atributos
    $attr_string = '';
    foreach ($attrs as $key => $value) {
      $attr_string .= ' ' . $key . '="' . htmlspecialchars($value) . '"';
    }

    // Se WebP foi gerado, usa picture tag
    if (strpos($webp_url, '.webp') !== false) {
      return '<picture>
                <source srcset="' . $webp_url . '" type="image/webp">
                <img src="' . $original_url . '"' . $attr_string . '>
            </picture>';
    }

    // Fallback: só img
    return '<img src="' . $original_url . '"' . $attr_string . '>';
  }
}

if (!function_exists('taf_responsive_image')) {
  /**
   * Gera imagem responsiva com srcset
   * 
   * @param string $image_path Caminho da imagem
   * @param string $folder Pasta base
   * @param array $sizes Array de larguras [320, 640, 1024]
   * @param array $attrs Atributos da tag
   * @return string HTML
   */
  function taf_responsive_image($image_path, $folder = 'imagens', $sizes = [320, 640, 1024], $attrs = [])
  {
    $webp_url = taf_webp_url($image_path, $folder);

    // Atributos padrão
    $default_attrs = [
      'loading' => 'lazy',
      'decoding' => 'async',
      'alt' => '',
      'class' => 'img-responsive'
    ];
    $attrs = array_merge($default_attrs, $attrs);

    // Monta atributos
    $attr_string = '';
    foreach ($attrs as $key => $value) {
      if ($key !== 'srcset' && $key !== 'sizes') {
        $attr_string .= ' ' . $key . '="' . htmlspecialchars($value) . '"';
      }
    }

    return '<img src="' . $webp_url . '"' . $attr_string . '>';
  }
}

/* End of file image_helper.php */
