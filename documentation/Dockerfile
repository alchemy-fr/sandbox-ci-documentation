# syntax=docker.io/docker/dockerfile:1

FROM node:alpine3.21

WORKDIR /srv/workspace

RUN chown -R node:node /srv/workspace \
        && npm install -g pnpm@^9.3.0

RUN apk add --no-interactive jq curl bash nano

USER node
#COPY --chown=node:node --chmod=+x ./getdoc.sh  ./
#COPY --chown=node:node ./my-app  /srv/workspace/my-app
#
#
WORKDIR /srv/workspace/documentation/phrasea
#
#RUN pnpm install && pnpm build

EXPOSE 3000
EXPOSE 3066
