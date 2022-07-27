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