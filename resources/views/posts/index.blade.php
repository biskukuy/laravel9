
<x-layouts.app 
    title="Contacto" 
    meta-description="Pagina de Blog"
>
      <h1>Blog  </h1>
      {{-- IMPRIMIR UNA VARIABLE CON BLADE --}}
      {{-- @dump($posts) --}}

      @foreach ($posts as $post)
        <h2> 
          <a href="{{ route('posts.show',$post->id)  }}"> 

            {{ $post->title}}
          </a>
          </h2>
      @endforeach


</x-layouts.app>