<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Simple .env File Loader for TAF Sports
 *
 * Carrega variáveis de ambiente do arquivo .env na raiz do projeto
 * e as disponibiliza via getenv(), $_ENV e $_SERVER
 */

if (!function_exists('load_env')) {
    /**
     * Carrega o arquivo .env e popula as variáveis de ambiente
     *
     * @param string $path Caminho para o arquivo .env
     * @return bool True se carregou com sucesso, False se o arquivo não existe
     */
    function load_env($path = null) {
        // Define o caminho padrão se não fornecido
        if ($path === null) {
            $path = dirname(dirname(dirname(__FILE__))) . DIRECTORY_SEPARATOR . '.env';
        }

        // Verifica se o arquivo existe
        if (!file_exists($path)) {
            return false;
        }

        // Lê o arquivo linha por linha
        $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        foreach ($lines as $line) {
            // Ignora comentários e linhas vazias
            $line = trim($line);
            if (empty($line) || strpos($line, '#') === 0) {
                continue;
            }

            // Separa chave e valor
            if (strpos($line, '=') !== false) {
                list($key, $value) = explode('=', $line, 2);
                $key = trim($key);
                $value = trim($value);

                // Remove aspas do valor se existirem
                if (preg_match('/^(["\'])(.*)\\1$/', $value, $matches)) {
                    $value = $matches[2];
                }

                // Define a variável de ambiente apenas se não estiver já definida
                if (!getenv($key)) {
                    putenv("$key=$value");
                    $_ENV[$key] = $value;
                    $_SERVER[$key] = $value;
                }
            }
        }

        return true;
    }
}

/**
 * Helper function para pegar valor do .env com fallback
 *
 * @param string $key Nome da variável
 * @param mixed $default Valor padrão se a variável não existir
 * @return mixed
 */
if (!function_exists('env')) {
    function env($key, $default = null) {
        $value = getenv($key);

        if ($value === false) {
            return $default;
        }

        // Converte strings para booleanos
        switch (strtolower($value)) {
            case 'true':
            case '(true)':
                return true;
            case 'false':
            case '(false)':
                return false;
            case 'empty':
            case '(empty)':
                return '';
            case 'null':
            case '(null)':
                return null;
        }

        return $value;
    }
}

// Carrega o .env automaticamente quando este arquivo é incluído
load_env();
