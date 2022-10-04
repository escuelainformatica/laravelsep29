# crear un proyecto

> composer create-project laravel/laravel sep29

# luego, no olvide editar el .env

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

# iniciar laravel

> php artisan serve

# script para iniciar y abrir una pagina

```
php artisan serve
start http://localhost:8080
```

# MVC

cliente --requerimiento -> route -> (opcional) controlador -> (opcion) view -> response

route --> view

## configurar el enrutador

Y editar web.php

```
Route::get('/producto/listado',[\App\Http\Controllers\ProductoController::class,'listado']);
```

## Crear controlador

> php artisan make:controller NombreControlador

Y crear las funciones correctas




