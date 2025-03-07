FROM php:8.2-fpm

# Set production PHP ini file
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

# Install system dependencies
RUN apt-get update && apt-get install -y \
    apt-transport-https \
    gnupg2 \
    libpng-dev \
    libzip-dev \
    unzip \
    libsqlite3-dev \
    sqlite3 \
    ca-certificates \
    libonig-dev \
    libxml2-dev \
    && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install \
    pdo \
    pdo_sqlite \
    mbstring \
    xml \
    zip \
    gd

# Set working directory
WORKDIR /var/www/html

# Create directory for SQLite database
RUN mkdir -p /var/www/database
RUN chown -R www-data:www-data /var/www/database

# Copy application files
COPY . .

# Set proper permissions
RUN chown -R www-data:www-data /var/www/html

# Expose port
EXPOSE 9000

# Use the default production configuration
CMD ["php-fpm"]