FROM php:8.3-cli

COPY php.ini /usr/local/etc/php

RUN apt-get update \
    && apt-get install -y \
        git \
        zip \
        unzip \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*
