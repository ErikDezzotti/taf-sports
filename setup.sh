#!/bin/bash

echo "================================"
echo "  TAF SPORTS - Setup Local"
echo "================================"
echo ""

# 1. Fixar permissões MySQL
echo "1. Configurando permissões do MySQL..."
sudo chown -R $(whoami) /usr/local/var/mysql
sudo chmod -R 755 /usr/local/var/mysql

# 2. Iniciar MySQL
echo "2. Iniciando MySQL..."
mysql.server start

# 3. Aguardar MySQL iniciar
sleep 3

# 4. Criar banco de dados
echo "3. Criando banco de dados..."
mysql -u root -e "DROP DATABASE IF EXISTS sitetaf_local;"
mysql -u root -e "CREATE DATABASE sitetaf_local CHARACTER SET utf8 COLLATE utf8_general_ci;"

# 5. Importar SQL
echo "4. Importando dados..."
mysql -u root sitetaf_local < /Users/erikdezzotti/Downloads/taf/sitetaf.sql

echo ""
echo "================================"
echo "  Setup concluído!"
echo "================================"
echo ""
echo "Agora execute:"
echo ""
echo "  cd /Users/erikdezzotti/Downloads/taf"
echo "  php -S localhost:8000"
echo ""
echo "Depois abra no navegador:"
echo "  http://localhost:8000"
echo ""
