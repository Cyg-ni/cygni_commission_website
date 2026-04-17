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

# Copy repository contents from the selected Docker context.
COPY . .

# Install dependencies, build assets, and warm caches from the detected app directory.
RUN set -eux; \
    if [ -f /var/www/html/composer.json ]; then \
        APP_DIR=/var/www/html; \
    elif [ -f /var/www/html/Commission-Website/composer.json ]; then \
        APP_DIR=/var/www/html/Commission-Website; \
    else \
        echo "composer.json not found in expected locations"; \
        ls -la /var/www/html; \
        exit 1; \
    fi; \
    cd "$APP_DIR"; \
    composer install --no-dev --prefer-dist --no-interaction --optimize-autoloader --no-scripts; \
    npm ci; \
    npm run build; \
    php artisan config:cache; \
    php artisan route:cache; \
    php artisan view:cache

EXPOSE 10000

CMD ["sh", "-c", "if [ -f /var/www/html/composer.json ]; then cd /var/www/html; else cd /var/www/html/Commission-Website; fi; php artisan migrate --force --graceful; php artisan serve --host=0.0.0.0 --port=${PORT:-10000}"]
