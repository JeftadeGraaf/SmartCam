FROM composer:2.4.4 AS composer

FROM php:8.1-fpm-alpine AS base

ARG USER_ID=1000
ARG GROUP_ID=1000

COPY --from=composer /usr/bin/composer /usr/local/bin/composer

COPY php.ini /usr/local/etc/php/

RUN apk add --update linux-headers --no-cache --virtual .phpize-deps-configure \
    $PHPIZE_DEPS \
    && \
    docker-php-source extract \
    yes | pecl install \
    xdebug \
    && \
    docker-php-ext-install \
    mysqli \
    pdo_mysql \
    && \
    docker-php-ext-enable xdebug
RUN apk add git vim

RUN addgroup -g ${GROUP_ID} user && \
    mkdir -p /var/www/html /home/user && \
    adduser -D -u ${USER_ID} -h /home/user -G user user && \
    chown -R user:user /var/www/html /home/user

WORKDIR /var/www/html
