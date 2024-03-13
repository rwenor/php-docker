
https://thephp.website/en/issue/php-docker-quick-setup/


# Settup

> alias doc='docker-compose'
> alias dcr='docker-compose run'


## Envirement
> touch docker-compose.yml
> mkdir -p src/ tests/ bin/ .conf/nginx/ var/


## Install PHPUnit
> dcr composer require --dev phpunit/phpunit

## Run PHPUnit inside container
> dcr php vendor/bin/phpunit
Or
> dcr phpunit --version

## PHPUnit setup
> dcr phpunit  --generate-configuration

## PHPUnit test
> touch tests/MyTest.php

Coding...
> dcr phpunit

Fail... (Fix later...)

## Web Server Set Up
> doc up -d fpm 

> touch .conf/nginx/site.conf

> doc up -d fpm nginx

## The site
> mkdir app app/public
> touch app/public/index.php

http://localhost:8080/

## Don't forget the autoloader
> dcr composer -- dump