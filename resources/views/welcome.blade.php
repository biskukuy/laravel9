<x-layouts.app >
    <x-slot name="title">
        Home Title
    </x-slot>
    <h1>Inicio</h1>
    
    <p> El comando <pre>php artisan migrate</pre>, inicialmente creará la BD</p>
    <p> Luego de modificada una migracion se debe ejecutar
        <code>php artisan migrate:fresh</code> y recreará toda la base de datos nuevamente</p>
    
    
</x-layouts.app>
