# syntax=docker.io/docker/dockerfile:1

FROM node:alpine3.21

WORKDIR /srv/workspace

RUN chown -R node:node /srv/workspace \
        && npm install -g pnpm@^9.3.0

RUN apk add --no-interactive bash nano

USER node

COPY --chown=node:node ./documentation/phrasea /srv/workspace/documentation/phrasea
WORKDIR /srv/workspace/documentation/phrasea
#
RUN pnpm install && pnpm build

EXPOSE 3000

FROM php:8.3.11-fpm-alpine3.20 as fake-phrasea

COPY --from=composer:2.5.8 /usr/bin/composer /usr/bin/composer

RUN composer config --global process-timeout 2000 \
    && adduser -D -u 1000 app \
    && printf "\nuser = app\ngroup = app\n" >> /usr/local/etc/php-fpm.d/zz-docker.conf

WORKDIR /srv/app

CMD ["php-fpm"]
