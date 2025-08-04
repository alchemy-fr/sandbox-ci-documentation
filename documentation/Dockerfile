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
