FROM php:7.4-apache
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN apt-get -y update
RUN apt-get install curl
RUN curl -L -C - --progress-bar -o /usr/local/bin/composer https://getcomposer.org/composer.phar
RUN chmod 755 /usr/local/bin/composer
RUN docker-php-ext-install pdo_mysql mysqli
RUN pecl install redis && docker-php-ext-enable redis
RUN pecl install xdebug-2.9.6 && docker-php-ext-enable xdebug
RUN echo "date.timezone=UTC" >> /usr/local/etc/php/conf.d/timezone.ini
RUN echo "allow_url_fopen = on \n" \
    > /usr/local/etc/php/conf.d/uploads.ini
RUN echo "allow_url_include = on \n" \
    > /usr/local/etc/php/conf.d/uploads.ini
RUN echo "session.auto_start = 1 \n" \
    > /usr/local/etc/php/conf.d/uploads.ini
RUN echo "session.save_path = /var/www/html/sessions \n" \
    > /usr/local/etc/php/conf.d/uploads.ini

