# History of commands

> Social Folder

```bash
# Install Vue CLI
sudo npm i -g @vue/cli

# Create new project
vue create social

# Install materialize
npm i materialize-css@next
npm i material-design-icons

# Install axios
npm i axios
```

> Webservice Folder

```bash
# Create webservice project
composer create-project --prefer-dist laravel/laravel webservice

# Install one php package
composer require laravel/passport

# Install APT package SQLite
sudo apt install php-sqlite3

# Create the tables on database
php artisan migrate

# Install passport on project
php artisan passport:install

# Run werbservice
php artisan serve

# Laravel in pt-BR
composer require laravel-lang/lang:~7.0
cp -r vendor/laravel-lang/lang/src/pt_BR/ resources/lang/

# Another migration
php artisan make:migration add_image_table_users --table=users
php artisan migrate

# Creating Controllers
php artisan make:controller UsuarioController

# Install package CORS
composer require fruitcake/laravel-cors
php artisan vendor:publish --tag="cors"

# Creating models
php artisan make:model Conteudo -m
php artisan make:model Comentario -m
php artisan make:migration create_amigos_table --create=amigos
php artisan make:migration create_curtidas_table --create=curtidas
php artisan migrate
php artisan migrate:status
```