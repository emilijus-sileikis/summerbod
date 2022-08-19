#!/bin/sh
set -e 

cd /var/www/summerbod/

php spark migrate

cd