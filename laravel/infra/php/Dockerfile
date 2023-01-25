FROM php:8.1.4-fpm-alpine3.14

# add user
RUN addgroup -S nginx && adduser -S nginx -G nginx

RUN apk add --no-cache mysql-client msmtp perl wget procps shadow libzip libpng libjpeg-turbo libwebp freetype icu

RUN apk add --no-cache --virtual build-essentials \
    icu-dev icu-libs zlib-dev g++ make automake autoconf libzip-dev \
    libpng-dev libwebp-dev libjpeg-turbo-dev freetype-dev unzip && \
    docker-php-ext-configure gd --enable-gd --with-freetype --with-jpeg --with-webp && \
    docker-php-ext-install gd && \
    docker-php-ext-install mysqli && \
    docker-php-ext-install pdo_mysql && \
    docker-php-ext-install intl && \
    docker-php-ext-install opcache && \
    docker-php-ext-install exif && \
    docker-php-ext-install zip && \
    docker-php-ext-install bcmath && \
    apk del build-essentials && rm -rf /usr/src/php*

RUN wget https://getcomposer.org/composer-stable.phar -O /usr/local/bin/composer && chmod +x /usr/local/bin/composer

ENV TZ Asia/Tokyo

# nginx setting
ADD ./infra/php/zzz-docker.conf /usr/local/etc/php-fpm.d/zzz-docker.conf
# php.iniの設定
ADD ./infra/php/php.ini /usr/local/etc/php/php.ini

# unix socket
RUN mkdir /var/run/php-fpm
VOLUME ["/var/run/php-fpm"]

# 作業ディレクトリ
WORKDIR /app

# copy soruce
ADD . .

# install composer libs and clear cache
RUN composer install && \
    php artisan cache:clear && \
    php artisan config:clear && \
    chmod -R 777 storage
