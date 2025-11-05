<?php
/**
 * Script de Debug - Conexão MySQL no XCloud.host
 * Arquivo temporário para descobrir hostname correto
 */

echo "<h1>Debug - Conexão MySQL no XCloud.host</h1>";
echo "<pre>";

// 1. Verificar extensão mysqli
echo "1. Extensão mysqli disponível? " . (extension_loaded('mysqli') ? 'SIM' : 'NÃO') . "\n\n";

// 2. Mostrar variáveis de ambiente relacionadas ao banco
echo "2. Variáveis de ambiente do banco:\n";
echo "   DB_HOST: " . ($_SERVER['DB_HOST'] ?? 'não definido') . "\n";
echo "   DB_PORT: " . ($_SERVER['DB_PORT'] ?? 'não definido') . "\n";
echo "   DB_USERNAME: " . ($_SERVER['DB_USERNAME'] ?? 'não definido') . "\n";
echo "   DB_PASSWORD: " . (isset($_SERVER['DB_PASSWORD']) ? '***definido***' : 'não definido') . "\n";
echo "   DB_DATABASE: " . ($_SERVER['DB_DATABASE'] ?? 'não definido') . "\n\n";

// 3. Testar conexões com diferentes hostnames
$credentials = [
    'user' => 'tafdb',
    'pass' => 'taf-db-pass2025',
    'db'   => 'taf-database',
    'port' => 3306
];

$hostnames = [
    'localhost',
    '127.0.0.1',
    'mysql',
    'db',
    'database',
    'mysql-server',
    'localhost:3306'
];

echo "3. Testando conexões com diferentes hostnames:\n";
foreach ($hostnames as $host) {
    echo "   Tentando {$host}... ";

    $mysqli = @new mysqli(
        $host,
        $credentials['user'],
        $credentials['pass'],
        $credentials['db'],
        $credentials['port']
    );

    if ($mysqli->connect_error) {
        echo "❌ ERRO: " . $mysqli->connect_error . "\n";
    } else {
        echo "✅ SUCESSO! Hostname correto: {$host}\n";
        echo "   Server info: " . $mysqli->server_info . "\n";
        $mysqli->close();
        break;
    }
}

echo "\n4. Informações do servidor:\n";
echo "   PHP Version: " . PHP_VERSION . "\n";
echo "   Server Software: " . ($_SERVER['SERVER_SOFTWARE'] ?? 'desconhecido') . "\n";
echo "   Document Root: " . ($_SERVER['DOCUMENT_ROOT'] ?? 'desconhecido') . "\n";
echo "   ENVIRONMENT: " . (defined('ENVIRONMENT') ? ENVIRONMENT : 'não definido') . "\n";

echo "</pre>";
?>
