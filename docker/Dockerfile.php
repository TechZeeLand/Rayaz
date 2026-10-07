FROM php:8.3-fpm-alpine

RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"
COPY docker/php.ini "$PHP_INI_DIR/conf.d/zz-rayaz.ini"

# includes/ lives outside the web root so it can never be requested directly.
COPY includes /var/www/includes
COPY public /var/www/html
