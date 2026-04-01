FROM php:8.2-fpm
WORKDIR /var/www/html
COPY . .
RUN apt-get update && apt-get install -y libpng-dev libzip-dev zip unzip
RUN docker-php-ext-install pdo pdo_mysql
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install --no-dev
CMD php artisan serve --host=0.0.0.0 --port=$PORT