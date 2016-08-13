FROM php:7.0-fpm

CMD chmod a+x phpunit.phar
CMD ./phpunit.phar AdderTest
