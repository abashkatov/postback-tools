FROM php:8.0-fpm

ENV DEBIAN_FRONTEND noninteractive

RUN apt-get update -yqq && \
    apt-get install -y apt-utils git zip unzip && \
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer && \
    pecl channel-update pecl.php.net
RUN apt-get install -y libpq-dev && \
    docker-php-ext-install pdo pdo_pgsql pgsql
RUN docker-php-ext-install mysqli pdo_mysql

WORKDIR /var/www
EXPOSE 9000
