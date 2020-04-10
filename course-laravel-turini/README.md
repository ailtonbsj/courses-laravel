# Course of Laravel by Turini


## Installing laravel command

```
composer global require laravel/installer
```

Include in file `.profile`:
```bash
# set PATH so it includes user's private bin if it exists
if [ -d "$HOME/.config/composer/vendor/bin" ] ; then
    PATH="$HOME/.config/composer/vendor/bin:$PATH"
fi
``` 

## Creating project

```bash
# Create new project
laravel new estoque

# install appName command
composer require andrey-helldar/laravel-app --dev

# Change namespace of project
php artisan app:name estoque

# Create a controller
php artisan make:controller ProdutoController
```

## Comands on MySQL
```sql
-- mysql -u admin -p
create database estoque_laravel;
-- mysql -u admin -p estoque_laravel < dump.sql
```

## Creating project
```bash
# Create a Model
php artisan make:model Produto -m

# Drop table produtos before continue

# Generate tables
php artisan migrate

# Create seed
php artisan make:seeder ProdutoTableSeeder

# Insert data on table from seed
php artisan db:seed

# ui utilities and presets
composer require laravel/ui

# bootstrap scaffolding
php artisan ui bootstrap

# install npm packages
npm install
npm run dev

# install bootstrap icons
npm i bootstrap-icons --save
mkdir public/icons
cp node_modules/bootstrap-icons/icons/search.svg public/icons/
cp node_modules/bootstrap-icons/icons/trash.svg public/icons/
cp node_modules/bootstrap-icons/icons/arrow-clockwise.svg public/icons/

# making form request
php artisan make:request ProdutosRequest
```