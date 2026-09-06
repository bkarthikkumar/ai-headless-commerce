FROM php:8.4-cli-alpine

RUN apk add --no-cache \
    git \
    curl \
    unzip \
    zip \
    libzip-dev \
    icu-dev \
    oniguruma-dev \
    nodejs \
    npm \
    bash \
    && docker-php-ext-install \
    pdo_mysql \
    mbstring \
    intl \
    zip

# Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /workspace

CMD ["bash"]