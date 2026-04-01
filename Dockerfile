FROM php:8.4-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    zip \
    unzip \
    git \
    curl

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_mysql gd zip

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html
COPY . .

# Install dependencies
RUN composer install --no-dev --optimize-autoloader

# --- NEW LINES START HERE ---
# 1. Create the database directory and an empty sqlite file
RUN mkdir -p database && touch database/database.sqlite

# 2. Fix permissions so Laravel can write to the database and logs
RUN chmod -R 777 storage database
# --- NEW LINES END HERE ---

# Updated CMD to run migrations before starting
CMD php artisan migrate --force && php artisan serve --host=0.0.0.0 --port=$PORT