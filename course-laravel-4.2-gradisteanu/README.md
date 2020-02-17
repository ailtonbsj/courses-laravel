# Course Introduction to Laravel 4 by Gradisteanu

## Requirements

- php7
- mcrypt
- composer

## Commands to create

```bash
composer create-project laravel/laravel myfirstapp 4.2 --prefer-dist

cd ./myfirstapp

php artisan serve

# edit ./app/config/app.php to enable debug and disable error reporting

php artisan migrate:make create_books

php artisan migrate:install

php artisan migrate
```

## Commands after clone repository

```bash
cd ./myfirstapp

composer install
```

## Commands to remove tables with migrations

```bash
cd ./myfirstapp

php artisan migrate:rollback
```