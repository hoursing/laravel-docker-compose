# laravel-docker-compose
Build a Docker compose for Laravel project

# Project
PHP 8.0 FPM
Mysql

# Build docker
 1. run command mkdir `source_code`

 2. Move code to `source_code`

 3. Add env with the following connection

 4. Run: `composer install` & `composer dump-autoload`

 5. Run: `php artisan key:generate`

 6. Run: `php artisan cache:clear`

# DB connection
DB_HOST=qs_db
DB_PORT=3306
DB_DATABASE="qs"
DB_USERNAME="root"
DB_PASSWORD="123456"

# Rebuild Build docker
docker-compose up --build
