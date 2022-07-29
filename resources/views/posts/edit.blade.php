<x-layouts.app :title="$post->title" :meta-description="$post->body">
    <h1>Formulario de Edicion</h1>
    <form method="POST" action="{{route('posts.update',$post)}}">
        @csrf
        @method('PATCH')
        @include('posts.form-fields')
        <button type="submit">Enviar</button>
        <br>
    </form>
    
  

    <a href ="{{route('posts.index')}}">Regresar</a>
</x-layouts.app>
