# Course of Laravel 5

## Requirements

- php7
- composer

## Commands to create
 
```bash
composer create-project --prefer-dist laravel/laravel cursoLaravel 5.3

php artisan serve

php artisan make:controller ContatoController

php artisan make:model Contato -m

php artisan make:migration create_produtos_table --create=produtos

# Case of don't found the driver
sudo apt install php-sqlite3

php artisan migrate

php artisan tinker
>>>
```

### On Tinker prompt

```
# Create
$contato = new App\Contato();
$contato->nome="Guilerme";
$contato->tel="5454545454";
$contato->email="gui@mail.com";
$contato;
$contato->save();

# List All
App\Contato::all();

# Get
$con = App\Contato::find(1);

# Remove
$con->delte();
```

## Commands to Create

```bash
php artisan make:model Curso -m

php artisan migrate

php artisan make:controller Admin/CursoController

php artisan make:controller Site/HomeController

php artisan make:seed UsuarioSeeder

# To run all seeds
php artisan db:seed

# To run one seed
php artisan db:seed --class=UsuarioSeeder

php artisan make:controller Site/LoginController
```