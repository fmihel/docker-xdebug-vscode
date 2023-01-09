FROM php:7.4-apache
LABEL maintainer fmihel76@gmail.com

RUN apt-get update \ 
    && apt-get install -y \
    && apt-get install autoconf automake mc -y \
    && docker-php-ext-install mysqli \
    && mkdir /opt/xdebug/ \
    && curl https://xdebug.org/files/xdebug-3.1.6.tgz -o /opt/xdebug.tgz \ 
    && tar -zxvf /opt/xdebug.tgz -C /opt/xdebug/ \ 
    && rm -rf /opt/xdebug.tgz \
    && cd /opt/xdebug/xdebug-3.1.6/ \
    && phpize \ 
    && ./configure \
    && make\
    && cp modules/xdebug.so /usr/local/lib/php/extensions/no-debug-non-zts-20190902
    #&& touch /usr/local/etc/php/conf.d/99-xdebug.ini \
    #&& echo "zend_extension = xdebug" > /usr/local/etc/php/conf.d/99-xdebug.ini