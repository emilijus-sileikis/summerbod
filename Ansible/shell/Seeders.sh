#!/bin/sh
set -e 

cd /var/www/summerbod/

php spark db:seed UserSeeder
php spark db:seed QuizSeeder
php spark db:seed WorkoutSeeder
php spark db:seed UserWorkoutSeeder

cd