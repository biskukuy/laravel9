<x-layouts.app title="Crear nuevo post" meta-description="Formulario para crear un nuevo blog post">
    <h1>Crear nuevo Post</h1>
    <form method="POST" action="{{ route('posts.store')}}">
        @csrf
        @include('posts.form-fields')
        <button type="submit">Enviar</button>
        <br>
    </form>
    <br>
   <a href ="{{ route('posts.index') }}">Regresar</a>
</x-layouts.app>
