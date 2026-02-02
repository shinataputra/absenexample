FROM php:8.2-apache

# install ekstensi postgres
RUN apt-get update && apt-get install -y \
    libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql

# enable apache rewrite (optional)
RUN a2enmod rewrite

WORKDIR /var/www/html
