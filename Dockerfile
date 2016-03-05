FROM php:7.0.3-apache
COPY src/ /var/www/html/
WORKDIR /usr/src/myapp
CMD [ "php", "./your-script.php" ]

