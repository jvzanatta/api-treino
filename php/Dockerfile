FROM php:7.0-fpm

RUN apt-get update \
  && apt-get install -y git libmcrypt-dev libpq-dev zlib1g-dev libmemcached-dev libldap2-dev \
  && docker-php-ext-install zip \
  && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
  && docker-php-ext-install mcrypt mbstring tokenizer pdo pdo_mysql mysqli \
  && cd /tmp \
  && git clone -b php7 https://github.com/php-memcached-dev/php-memcached.git \
  && cd php-memcached \
  && phpize \
  && ./configure \
  && make \
  && echo "extension=/tmp/php-memcached/modules/memcached.so" > /usr/local/etc/php/conf.d/memcached.ini \
  && chown www-data:www-data -R /var/www \
  && chmod g+rw -R /var/www

USER www-data
