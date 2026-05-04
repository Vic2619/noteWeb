FROM php:8.2-apache

RUN a2dismod mpm_event && a2enmod mpm_prefork

RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN a2enmod rewrite

COPY . /var/www/html/

EXPOSE 80
