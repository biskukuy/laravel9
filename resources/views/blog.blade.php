
<x-layouts.app 
    title="Contacto" 
    meta-description="Pagina de Blog"
>
      <h1>Blog  </h1>
      {{-- IMPRIMIR UNA VARIABLE CON BLADE --}}
      {{-- @dump($posts) --}}

      @foreach ($posts as $item)
        <h2> {{ $item['title']}}</h2>
      @endforeach


</x-layouts.app>