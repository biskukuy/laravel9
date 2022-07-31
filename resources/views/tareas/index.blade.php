<x-layouts.app title="Tareas" meta-description="Pagina de Tareas">
  <div class="container shadow bg-white">
    <h1>Tareas</h1>
  </div> 
      <a href="{{ route('tareas.create') }}"> Crear nueva Tarea</a>
      <table>
        <thead>
        <tr>
          <td>Nombre </td>
          <td>finalizada </td>
          <td>Fecha </td>
          <td>urgencia </td>
          <td>descripcion</td>
          <td>Accion</td>
        </tr>  
        </thead>
        <tbody>
      @foreach ($tareas as $tarea)
      <tr>
        <td>{{ $tarea->nombre }}</td>
        <td>{{ $tarea->finalizada() }}</td>
        <td>{{ $tarea->fecha_limite->format('H:i  d/m/Y') }}</td>
        <td>{{ $tarea->urgencia() }}</td>
        <td>{{ $tarea->descripcion }}</td>
        <td>
        <a href="{{ route('tareas.edit',$tarea) }}">Editar</a>
        </td>
      </tr>
      @endforeach
        </tbody>
      </table>
   
</x-layouts.app>
