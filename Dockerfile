FROM php:7-apache
RUN a2enmod rewrite
ADD . /var/www/html
RUN chown -R www-data:www-data /var/www/html