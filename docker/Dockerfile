FROM php:8.2-apache

# Additional tools
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN apt-get -y update
RUN apt-get install -y libicu-dev libxml2-dev libzip-dev

# PHP Extension enabling
RUN docker-php-ext-install intl pdo_mysql zip

# Apache modules
RUN a2enmod rewrite