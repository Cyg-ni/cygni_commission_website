FROM php:8.4-cli

# System dependencies + PHP extensions needed by Laravel.
RUN apt-get update && apt-get install -y --no-install-recommends \
    git \
    unzip \
    ca-certificates \
    curl \
    gnupg \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    libsqlite3-dev \
    && docker-php-ext-install pdo pdo_sqlite mbstring bcmath xml zip \
    && mkdir -p /etc/apt/keyrings \
    && curl -fsSL https://deb.nodesource.com/gpgkey/nodesource-repo.gpg.key | gpg --dearmor -o /etc/apt/keyrings/nodesource.gpg \
    && echo "deb [signed-by=/etc/apt/keyrings/nodesource.gpg] https://deb.nodesource.com/node_22.x nodistro main" > /etc/apt/sources.list.d/nodesource.list \
    && apt-get update \
    && apt-get install -y --no-install-recommends nodejs \
    && rm -rf /var/lib/apt/lists/*

# Install Composer from official image.
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copy repository contents from the selected Docker context.
COPY . .

# Install dependencies and build assets from the detected app directory.
RUN set -eux; \
    php -v; \
    composer --version; \
    node -v; \
    npm -v; \
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
    composer install --no-dev --prefer-dist --no-interaction --optimize-autoloader --no-scripts --no-progress; \
    npm ci; \
    npm run build

EXPOSE 10000

CMD ["sh", "-c", "if [ -f /var/www/html/composer.json ]; then cd /var/www/html; else cd /var/www/html/Commission-Website; fi; DB_FILE=${DB_DATABASE:-database/database.sqlite}; mkdir -p \"$(dirname \"$DB_FILE\")\" storage/logs bootstrap/cache; touch \"$DB_FILE\"; chmod -R ug+rwX storage bootstrap/cache || true; if [ -z \"${APP_KEY:-}\" ]; then export APP_KEY=$(php artisan key:generate --show); echo 'APP_KEY was missing, generated a runtime key'; fi; if [ ! -f public/build/manifest.json ]; then echo 'Vite manifest missing, rebuilding assets at startup'; npm ci && npm run build; fi; php artisan config:cache || true; php artisan route:cache || true; php artisan view:cache || true; php artisan migrate --force --graceful; php artisan db:seed --force || true; php artisan serve --host=0.0.0.0 --port=${PORT:-10000}"]
