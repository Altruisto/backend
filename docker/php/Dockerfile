FROM php:7.2-fpm

RUN pecl install apcu

RUN apt-get update && \
apt-get install -y \
zlib1g-dev  libpq-dev

RUN docker-php-ext-install zip
RUN docker-php-ext-enable apcu
# RUN docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql
RUN docker-php-ext-install pdo pdo_pgsql pgsql
