FROM php:8.4-fpm

# 1. Install system dependencies & Node.js
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    zip \
    unzip \
    git \
    curl \
    gnupg

# Install Node.js (needed for Vite)
RUN curl -sL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs

# 2. Install PHP extensions
RUN docker-php-ext-install pdo pdo_mysql gd zip

# 3. Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html
COPY . .

# 4. Install PHP and Node dependencies, then build assets
RUN composer install --no-dev --optimize-autoloader
RUN npm install
RUN npm run build

# 5. Create database and fix permissions
RUN mkdir -p database && touch database/database.sqlite
RUN chmod -R 777 storage database public bootstrap/cache

# 6. Final command
CMD php artisan migrate --force && php artisan serve --host=0.0.0.0 --port=$PORT -t public