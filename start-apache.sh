#!/usr/bin/env bash

cd /composer
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === 'e21205b207c3ff031906575712edab6f13eb0b361f2085f1f1237b7126d785e826a450292b6cfd1d64d92e6563bbde02') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php /composer/composer-setup.php --install-dir=/composer
php -r "unlink('composer-setup.php');"
mv /composer/composer.phar /usr/local/bin/composer

#sudo mv composer.phar /usr/local/bin/composer


chmod -R 2777 /var/www/html/

sed -i "s/Listen 80/Listen ${PORT:-80}/g" /etc/apache2/ports.conf
sed -i "s/:80/:${PORT:-80}/g" /etc/apache2/sites-enabled/*
chown -R www-data:www-data /var/www/html/how5/storage/
#chown -R www-data:www-data /var/www/html/
#chown -R www-data:www-data /var/www/html/
apache2-foreground