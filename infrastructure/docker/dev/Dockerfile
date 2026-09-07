FROM php:8.4-cli-alpine

RUN apk add --no-cache \
    $PHPIZE_DEPS \
    bash \
    curl \
    git \
    unzip \
    zip \
    libzip-dev \
    icu-dev \
    oniguruma-dev \
    nodejs \
    npm \
    && docker-php-ext-install \
    pdo_mysql \
    mbstring \
    intl \
    zip \
    && pecl install redis \
    && docker-php-ext-enable redis \
    && apk del $PHPIZE_DEPS

# Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /workspace

CMD ["bash"]