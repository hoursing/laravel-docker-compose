# laravel-docker-compose
Build a Docker compose for Laravel 9.0 project to build API for Health Application. 

# Project
PHP 8.0 FPM
Mysql 8.0

# Build docker

 1. Run command mkdir `source_code`

 2. Move code to `source_code`

 3. Add `.env` with the following connection

 4. Run: `composer install` & `composer dump-autoload`

 5. Run: `php artisan key:generate`

 6. Run: `php artisan config:cache`

 7. Run: `php artisan migrate` to migrate tables

# DB connection
- DB_HOST=health_db
- DB_PORT=3306
- DB_DATABASE=health_app
- DB_USERNAME=root
- DB_PASSWORD=123456

# Use JWT to authenticate
- php-open-source-saver/jwt-auth

# Rebuild Build docker
docker-compose up --build
