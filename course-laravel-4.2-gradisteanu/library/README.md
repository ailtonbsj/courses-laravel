# Course Introduction to Laravel 4 by Gradisteanu

## Requirements

- php7
- mcrypt
- composer

## Commands to create

```bash
composer create-project laravel/laravel library 4.2 --prefer-dist

cd ./library

php artisan serve

# edit ./app/config/app.php to enable debug and disable error reporting

php artisan migrate:make create_users_table --create=users

php artisan migrate:make create_books_table --create=books

php artisan migrate:install

php artisan migrate

php artisan db:seed
```

## Commands after clone repository

```bash
cd ./library

composer install
```

## Commands for help

```bash
php artisan help migrate:make
```