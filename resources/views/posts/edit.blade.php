<x-layouts.app :title="$post->title" :meta-description="$post->body">
    <h1>Formulario de Edicion</h1>
    <form method="POST" action="{{ route('posts.update',$post)}}">
        @csrf
        @method('PATCH')
        <label> 
            Titulo<br>
            <input type="text" name="title" value={{ old('title',$post->title)}}>
            @error('title')
                <br>
                <small style="color:red">{{ $message }}</small>
            @enderror
        </label><br>
        <label> 
            Body<br>
            <textarea name="body">{{old('body', $post->body)}}</textarea>
            @error('body')
            <br>
            <small style="color:red">{{ $message }}</small>
        @enderror
        </label><br>
        <button type="submit">Enviar</button>
        <br>
    </form>
    
  

    <a href ="{{ route('posts.index') }}">Regresar</a>
</x-layouts.app>
