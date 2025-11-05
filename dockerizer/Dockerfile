FROM webdevops/php-nginx:8.1-alpine

# Copiar configurações customizadas
COPY ./dockerizer/php.ini /opt/docker/etc/php/php.ini
COPY ./dockerizer/vhost.conf /opt/docker/etc/nginx/vhost.conf

# Copiar todo o código da aplicação
COPY . /app

# Definir permissões corretas para pastas writable
RUN chmod -R 755 /app/application/cache && \
    chmod -R 755 /app/application/logs && \
    chmod -R 755 /app/imagens

# Definir working directory
WORKDIR /app

# Expor porta 80
EXPOSE 80
