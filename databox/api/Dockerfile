# syntax=docker.io/docker/dockerfile:1

FROM php:8.3.11-fpm-alpine3.20 AS fake-databox-api-php
RUN apk add --no-interactive bash nano

COPY --from=composer:2.5.8 /usr/bin/composer /usr/bin/composer

RUN composer config --global process-timeout 2000 \
    && adduser -D -u 1000 app

COPY --chown=app:app . /srv/app
WORKDIR /srv/app/databox/api

RUN composer install

RUN ls -al
WORKDIR /srv/app

RUN ["php", "databox/api/application.php", "app:documentation:dump" ]
# RUN php databox/api/application.php app:documentation:dump

CMD ["php-fpm"]
