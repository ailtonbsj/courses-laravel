# Course of Laravel 5 by Guilherme

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
```