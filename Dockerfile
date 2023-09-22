FROM ubuntu:22.04
MAINTAINER Georgelys Marcano <georgelysmarcanob@gmail.com>
WORKDIR /var/www/html
ENV DEBIAN_FRONTEND noninteractive
ENV TZ=UTC
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime \
    && echo $TZ > /etc/timezone \
    && apt-get update \
    && apt-get install -y gnupg gosu curl ca-certificates zip unzip git supervisor nano libcap2-bin libpng-dev python3\
    && mkdir -p ~/.gnupg \
    && chmod 600 ~/.gnupg \
    && echo "disable-ipv6" >> ~/.gnupg/dirmngr.conf \
    && apt-key adv --homedir ~/.gnupg --keyserver hkp://keyserver.ubuntu.com:80 --recv-keys E5267A6C \
    && apt-key adv --homedir ~/.gnupg --keyserver hkp://keyserver.ubuntu.com:80 --recv-keys C300EE8C \
    && echo "deb https://ppa.launchpadcontent.net/ondrej/php/ubuntu/ jammy main" > /etc/apt/sources.list.d/ppa_ondrej_php.list \
    && apt-get update \
    && apt-get install -y php8.2-cli php8.2-dev \
          php8.2-pgsql php8.2-sqlite3 php8.2-gd php8.2-imagick \
          php8.2-curl \
          php8.2-imap php8.2-mysql php8.2-mbstring \
          php8.2-xml php8.2-zip php8.2-bcmath php8.2-soap \
          php8.2-intl php8.2-readline \
          php8.2-ldap \
          php8.2-msgpack php8.2-igbinary php8.2-redis php8.2-swoole \
          php8.2-memcached php8.2-pcov php8.2-xdebug \
    && php -r "readfile('https://getcomposer.org/installer');" | php -- --install-dir=/usr/bin/ --filename=composer \
    && apt-get install -y mariadb-client \
    && apt-get -y autoremove \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* \
    && setcap "cap_net_bind_service=+ep" /usr/bin/php8.2 \
    && groupadd --force -g 1000 laravel \
    && useradd -ms /bin/bash --no-user-group -g 1000 -u 1337 laravel
COPY docker/start-container /usr/local/bin/start-container
COPY docker/supervisord.conf /etc/supervisor/conf.d/supervisord.conf
COPY docker/php.ini /etc/php/8.2/cli/conf.d/99-laravel.ini
RUN chmod +x /usr/local/bin/start-container \
    && chmod +x -R /var/www/html
# Run without cache below
ARG CACHEBUST=1
#RUN chmod +x -R vendor
# RUN composer install
RUN composer create-project laravel/laravel onboarding \
    && cd onboarding \
    && composer require livewire/livewire
EXPOSE 8000
ENTRYPOINT ["start-container"]
