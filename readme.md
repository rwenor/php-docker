
https://thephp.website/en/issue/php-docker-quick-setup/

# Konvensjon
">": Kjøtrs
"f>": Når prosjektet lages


# Settup

> alias doc='docker-compose'
> alias dcr='docker-compose run'

## Install PHPUnit
> dcr composer require --dev phpunit/phpunit

## Test
> dcr phpunit
or
> dcr phpunit --testdox

## Run
> doc up fpm nginx
or
> doc up -d fpm nginx
Autoloader (???)
> dcr composer -- dump

http://localhost:8088/


## Envirement
f> touch docker-compose.yml
f> mkdir -p src/ tests/ bin/ .conf/nginx/ var/

## Install PHPUnit
> dcr composer require --dev phpunit/phpunit

## Run PHPUnit inside container
> dcr php vendor/bin/phpunit
Or
> dcr phpunit --version

## PHPUnit setup
f> dcr phpunit  --generate-configuration

## PHPUnit test
f> touch tests/MyTest.php
Coding...

## Test
> dcr phpunit
Fail... (Fix later...)

## Web Server Set Up
> doc up -d fpm 

f> touch .conf/nginx/site.conf

> doc up -d fpm nginx

## The site
f> touch public/index.php

http://localhost:8088/

## Don't forget the autoloader
> dcr composer -- dump