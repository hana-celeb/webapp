FROM php:latest
COPY index.php /usr/src/myapp
COPY lib /usr/src/myapp
WORKDIR /usr/src/myapp
CMD [ "php", "./your-script.php" ]

