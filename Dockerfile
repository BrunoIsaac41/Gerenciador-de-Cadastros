FROM php:8.2-cli

# Instala extensões necessárias
RUN apt-get update && apt-get install -y \
    unzip git curl libzip-dev libpng-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo_mysql mbstring zip exif pcntl bcmath gd

RUN docker-php-ext-install pdo pdo_mysql

WORKDIR /var/www/html

COPY . /var/www/html

# Instala Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && composer install --no-interaction --prefer-dist --optimize-autoloader

EXPOSE 3606
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=3606"]