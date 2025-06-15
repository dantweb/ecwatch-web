FROM php:8.3-apache

# Install system dependencies and PHP extensions if needed
RUN apt-get update && apt-get install -y libonig-dev libzip-dev zip unzip \
    && docker-php-ext-install pdo pdo_mysql

# Enable Apache modules for rewrite and SSL support
RUN a2enmod rewrite ssl

# Copy existing application directory contents
COPY . /var/www/html

# Change Apache port from 80 to 5050 for HTTPS
RUN sed -i 's/<VirtualHost \*:80>/<VirtualHost *:5050>/' /etc/apache2/sites-available/000-default.conf

# Expose port 5050
EXPOSE 5050

# Set working directory
WORKDIR /var/www/html
