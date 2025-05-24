FROM php:8.1.17-fpm-alpine3.17

# 必要なパッケージをインストール
RUN apk add --no-cache \
    $PHPIZE_DEPS \
    linux-headers \
    libzip-dev \
    zlib-dev \
    mariadb-client \
    unzip \
    curl \
    vim \
    && docker-php-ext-configure zip \
    && docker-php-ext-install -j$(nproc) zip pdo_mysql sockets \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer \
    && composer self-update --2 \
    && echo 'export PATH="$PATH:$HOME/.composer/vendor/bin"' >> ~/.bashrc

# PHPの設定ファイルをコピー
COPY php.ini /usr/local/etc/php/conf.d/custom.ini

# ワーキングディレクトリを設定
WORKDIR /work/web

