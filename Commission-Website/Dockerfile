FROM php:8.3-cli

# System dependencies + PHP extensions needed by Laravel.
RUN apt-get update && apt-get install -y --no-install-recommends \
    git \
    unzip \
    libzip-dev \
    libsqlite3-dev \
    nodejs \
    npm \
    && docker-php-ext-install pdo pdo_sqlite zip \
    && rm -rf /var/lib/apt/lists/*

# Install Composer from official image.
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Install PHP and JS dependencies first for better Docker layer caching.
COPY . .
RUN composer install --no-dev --prefer-dist --no-interaction --optimize-autoloader --no-scripts

RUN npm ci

# Build frontend assets.
RUN npm run build

# Warm framework caches for production startup.
RUN php artisan config:cache && php artisan route:cache && php artisan view:cache

EXPOSE 10000

CMD ["sh", "-c", "php artisan migrate --force --graceful; php artisan serve --host=0.0.0.0 --port=${PORT:-10000}"]
