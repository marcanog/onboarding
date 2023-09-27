FROM richarvey/nginx-php-fpm:1.7.2
FROM ubuntu:22.04
MAINTAINER Georgelys Marcano <georgelysmarcanob@gmail.com>
WORKDIR /var/www/html
ENV DEBIAN_FRONTEND noninteractive
ENV TZ=UTC

COPY onboarding .

# Image config
ENV SKIP_COMPOSER 1
ENV WEBROOT /var/www/html/public
ENV PHP_ERRORS_STDERR 1
ENV RUN_SCRIPTS 1
ENV REAL_IP_HEADER 1

# Laravel config
ENV APP_ENV production
ENV APP_DEBUG false
ENV LOG_CHANNEL stderr

# Allow composer to run as root
ENV COMPOSER_ALLOW_SUPERUSER 1
#RUN useradd -ms /bin/bash --no-user-group -g 1000 -u 1337 laravel
COPY docker/start-container /usr/local/bin/start-container
COPY docker/supervisord.conf /etc/supervisor/conf.d/supervisord.conf
COPY docker/php.ini /etc/php/8.2/cli/conf.d/99-laravel.ini
RUN chmod +x /usr/local/bin/start-container \
    && chmod +x -R /var/www/html
# Run without cache below
ARG CACHEBUST=1
#RUN chmod +x -R vendor
# RUN composer install
#RUN composer create-project laravel/laravel onboarding \    && cd onboarding \    && composer require livewire/livewire
CMD ["/start.sh"]
