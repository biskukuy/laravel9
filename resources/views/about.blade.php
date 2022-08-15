<x-layouts.app title="About" meta-description="descripcion de About">
  <h1>About</h1>
  
  <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h3>Modelo: Tarea</h3>
          <p id="etiqueta1">
            <small>
            <pre>
&lt;?php            
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tarea extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $table = 'tareas';
    protected $fillable= [
        'nombre',
        'descripcion',
        'finalizada',
        'fecha_limite',
        'urgencia',
    ];
    protected $dates = ['fecha_limite']; 
    public const URGENCIAS = ['Baja', 'Normal', 'Alta'];

    public function urgencia(){
        return self::URGENCIAS[ $this->urgencia ];
    }
    public function estaFinalizada(){
    
            return $this->finalizada == 1 ? 'Si':'No';
            
    }
}
            
          </pre>
            </small>
          </p>
        </div>
        <div class="col-md-4">
          <h3>Vista: Index.tarea</h3>
          <p><small>
            <pre>
            <code>
&lt;x-layouts.app title="Tareas" &gt;
              
      &lt;a href="{{ route('tareas.create') }}"&gt; Crear nueva Tarea&lt;/a&gt;
      &lt;table class="table table-striped table-primary"&gt;
        &lt;thead&gt;
        &lt;tr&gt;
          &lt;th scope="col"&gt;Nombre &lt;/td&gt;
          &lt;th scope="col"&gt;Finalizada &lt;/td&gt;
          &lt;th scope="col"&gt;Fecha &lt;/td&gt;
          &lt;th scope="col"&gt;Urgencia &lt;/td&gt;
          &lt;th scope="col"&gt;Descripcion&lt;/td&gt;
          &lt;th scope="col"&gt;Accion&lt;/td&gt;
        &lt;/tr&gt;  
        &lt;/thead&gt;
        &lt;tbody&gt;

&lt;/x-layouts.app&gt;
@ foreach ($tareas as $tarea) 
&lt;tr class="table-light"&gt;
  &lt;td&gt;{ $ tarea-&gt;nombre }}&lt;/td&gt;
  &lt;td&gt;{ $ tarea-&gt;estaFinalizada() }}&lt;/td&gt;
  &lt;td&gt;{ $ tarea-&gt;fecha_limite-&gt;format('H:i  d / m / Y') }}&lt;/td&gt;
  &lt;td&gt;{ $ tarea-&gt;urgencia() }}&lt;/td&gt;
  &lt;td&gt;{ $ tarea-&gt;descripcion }}&lt;/td&gt;
  &lt;td&gt;
  &lt;a href="{ route('tareas.edit',$ tarea) }}"&gt;Editar&lt;/a&gt;
  &lt;/td&gt;
&lt;/tr&gt;
@ endforeach  

            </code>
            </pre></small>
          </p>

        </div>
        <div class="col-md-4">
          <h3>Controlador: Tarea</h3>
          <p class="claseP">
            <small>
              <pre>
                <code>
&lt;?php
namespace App\Http\Controllers;

use App\Models\Tarea;
use Illuminate\Http\Request;
use App\Http\Requests\SaveTareaRequest;

class TareaController extends Controller
{
    public function index()
    {
        $tareas = Tarea::orderByDesc('id')->get();
        return view('tareas.index',['tareas' => $tareas]);
    }
    public function show(Tarea $tarea)
    {
        return view('tareas.show',['tarea'=> $tarea]); 
    }
    public function create()
    {
        return view('tareas.create'); 
    }
    public function store(Request $request)
    {
      
        $datos = $request->validate(
            [
            'nombre'        => 'required|max:60',
            'descripcion'   => 'required|max:255',
            'finalizada'    =>  'nullable',
            'urgencia'      => 'required|numeric|min:0|max:2',
            'fecha_limite'  => 'required|date_format:Y-m-d\TH:i',

        ]);
        if(isset($datos["finalizada"]))
            $datos["finalizada"]= $datos["finalizada"] =="on" ? 1: 0;
        $tarea = Tarea::create($datos);
        
            
        return to_route('tareas.index')->with('status','tarea Creada!!!');
    }
    public function edit(Tarea $tarea)
    {
        return view('tareas.edit',['tarea'=> $tarea]); 
    }
    public function update(Request $requesT)
    {
      //  $tarea->update($request->validated());
        //return to_route('tareas.show',$tarea)->with('status','tarea Actualizado!!!');
    }
}
                  
                </code>
              </pre>
            </small>
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
        </div>
      </div>
    </div>
 
</x-layouts.app>
