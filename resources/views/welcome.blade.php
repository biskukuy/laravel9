{{-- @component('components.layout') --}}
    
<x-layouts.app
    
>
    <x-slot name="title">
        Home Title
    </x-slot>

    <h1>Inicio  </h1>
    <p>
        el comando php artisan migrate, ejecutara lo que se encuentre 
        dentro de la carpeta database/migrations 
        la tabla migrations tiene la informacion de las veces
        que se ha ejecutado el comando migrate
        el add_body_to_post
        lo que hace es agregar un campo a la tabla, sin afectar a @if ($loop->last)
            valores que ya se encontraban almacenados

tambien tenemos el comando 
php artisan make:migration create_posts_table
con ese comando creara una migracion para la tabla llamada post

php artisan make:migration add_body_to_posts_table

php artisan migrate:rollback 

existe ORM (OBJECT RELATIONAL MAPPING )
LARAVEL ELOQUENT

php artisan make:model Post

atajo:
creara la migracion y el modelo
php artisan make:model Post -m 

Tinker es para interactuar con nuestra aplicacion de LARAVEL

php artisan Tinker

metodos basicos de elocuent

obtener todos los registros
Post::get()

obtener solo 1 registro por id
$post=Post::find($id)

guardar
$post->save()

borrar:
$post->delete()

precionar control +c para salir de Tinker

    </p>
    

</x-layouts.app>
    

{{-- @endcomponent  --}}

