FROM php:8.2-apache

# Install mysqli extension
RUN docker-php-ext-install mysqli

# Aktifkan mod_rewrite (opsional, tapi aman)
RUN a2enmod rewrite
