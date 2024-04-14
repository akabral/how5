FROM php:8.1-apache

ARG UID=root
ARG GID=root
ARG USER

RUN apt-get update -qq && \
    apt-get install -y build-essential libpq-dev apt-transport-https && \
    apt-get install -y curl libxrender1 libfontconfig libxtst6 xz-utils unzip 
RUN apt-get install -y libpng-dev 
RUN apt-get install -y zlib1g-dev 

RUN apt-cache search freetype

RUN apt-get install -y \
    libwebp-dev \
    libjpeg62-turbo-dev \
    libpng-dev libxpm-dev \
    libmcrypt-dev \
    libjpeg-dev \
    libfreetype6-dev libfreetype6 libicu-dev

RUN docker-php-ext-configure intl

RUN docker-php-ext-install iconv pgsql pdo_pgsql intl mysqli pdo pdo_mysql 


#https://stackoverflow.com/questions/7290958/php-fatal-error-call-to-undefined-function-imagettftext
#https://github.com/docker-library/php/issues/865

RUN docker-php-ext-configure gd --with-freetype 
#    --with-gd --with-webp-dir  --with-jpeg-dir=/usr/include --with-png-dir=/usr/include \
#    --with-zlib-dir --with-xpm-dir --with-freetype-dir=/usr/include/freetype2 --enable-gd-native-ttf

RUN docker-php-ext-install gd
#RUN docker-php-ext-install gd 
RUN docker-php-ext-enable mysqli


RUN curl -sL https://deb.nodesource.com/setup_18.x | bash - 
RUN apt-get update -y 
RUN apt-get install -y nodejs --force-yes


RUN chown -R ${UID}:${GID} /var/www/html

RUN a2enmod rewrite

RUN mkdir /composer
RUN cd /composer

#RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
#RUN php -r "if (hash_file('sha384', 'composer-setup.php') === 'e21205b207c3ff031906575712edab6f13eb0b361f2085f1f1237b7126d785e826a450292b6cfd1d64d92e6563bbde02') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
#RUN php /composer/composer-setup.php --install-dir=/composer
#RUN php -r "unlink('composer-setup.php');"
#RUN mv /composer/composer.phar /usr/local/bin/composer

RUN cd /var/www/html

WORKDIR /var/www/html


ADD ./start-apache.sh /docker-start-apache.sh

RUN chmod +x /docker-start-apache.sh

EXPOSE 85

#CMD ["start-apache"]
CMD /docker-start-apache.sh