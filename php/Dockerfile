FROM php:8.3-fpm-alpine
RUN apk add --no-cache libpq-dev postgresql-dev \
    && docker-php-ext-install pdo pdo_pgsql
WORKDIR /var/www
RUN addgroup -g 1000 app && adduser -D -G app -u 1000 app \
    && chown -R app:app /var/www
USER app
