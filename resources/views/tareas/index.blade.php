<x-layouts.app title="Tareas" meta-description="Pagina de Tareas">
     <h1>Tareas</h1>
      <a href="{{ route('tareas.create') }}"> Crear nueva Tarea</a>
      <table class="table table-striped table-primary">
        <thead>
        <tr>
          <th scope="col">Nombre </td>
          <th scope="col">Finalizada </td>
          <th scope="col">Fecha </td>
          <th scope="col">Urgencia </td>
          <th scope="col">Descripcion</td>
          <th scope="col">Accion</td>
        </tr>  
        </thead>
        <tbody>
      @foreach ($tareas as $tarea)
      <tr class="table-light">
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
