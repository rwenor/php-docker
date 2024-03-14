#! /bin/bash
# > chmod u+x ./buildAndTest.sh

#alias doc='docker-compose'
#alias dcr='docker-compose run'

docker-compose run composer require --dev phpunit/phpunit
docker-compose run phpunit --testdox