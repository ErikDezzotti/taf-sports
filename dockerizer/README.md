# 🐳 Dockerizer - Configuração Docker para EasyPanel

Esta pasta contém os arquivos necessários para fazer o deploy do TAF Sports no EasyPanel usando Docker.

---

## 📁 Arquivos

### 1. `Dockerfile`
- Define a imagem Docker base: `webdevops/php-nginx:7.4-alpine`
- Copia as configurações customizadas (php.ini e vhost.conf)
- Copia todo o código da aplicação para `/app`
- Define permissões corretas para pastas writable
- Expõe porta 80

### 2. `php.ini`
- Configurações PHP customizadas para TAF Sports
- Timezone: America/Sao_Paulo
- Memory limit: 128M
- Upload max: 10M
- Post max: 30M
- Max execution time: 300s
- Display errors: OFF (produção)

### 3. `vhost.conf`
- Configuração Nginx para CodeIgniter 3
- Document root: `/app` (raiz do projeto)
- URL rewrite para remover `index.php`
- Proteção de diretórios sensíveis (`/application`, `/system`)
- Cache para assets estáticos
- Client max body size: 50M

---

## 🚀 Como Usar no EasyPanel

1. **No serviço da aplicação, vá em "Build"**
2. **Selecione "Dockerfile"**
3. **O EasyPanel detectará automaticamente o Dockerfile na raiz ou em /dockerizer**
4. **Clique em "Deploy"**

---

## 🔧 Tecnologias

- **Base Image:** webdevops/php-nginx:7.4-alpine
- **PHP Version:** 7.4
- **Web Server:** Nginx
- **OS:** Alpine Linux (leve e rápido)

---

## ⚙️ Customizações

### Para alterar configurações PHP:
Edite o arquivo `php.ini` e faça novo deploy.

### Para alterar configurações Nginx:
Edite o arquivo `vhost.conf` e faça novo deploy.

### Para mudar versão do PHP:
No `Dockerfile`, linha 1, altere `7.4-alpine` para a versão desejada (ex: `7.3-alpine`, `8.0-alpine`).

⚠️ **Atenção:** CodeIgniter 3.1.4 funciona melhor com PHP 7.4. Evite PHP 8.x sem testes.

---

## 📦 Build Local (Opcional)

Se quiser testar localmente antes de fazer deploy:

```bash
# Build da imagem
docker build -t taf-sports -f ./dockerizer/Dockerfile .

# Executar container
docker run -p 8080:80 taf-sports

# Acessar no navegador
http://localhost:8080
```

---

## 🔍 Estrutura Final no Container

```
/app/
├── index.php
├── .htaccess
├── application/
│   ├── config/
│   ├── controllers/
│   ├── models/
│   ├── views/
│   ├── cache/ (writable)
│   └── logs/ (writable)
├── system/
├── assets/
├── imagens/ (writable)
├── dockerizer/
└── ...
```

---

**Criado para:** TAF Sports - Gestão de Carreiras no Futebol
**Framework:** CodeIgniter 3.1.4
**Data:** 2025-11-04
