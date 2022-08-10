<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Carbon\Carbon;
use App\Models\Tarea;

class TareaFormBody extends Component
{
    private $tarea;
    public function __construct( $tarea = null)
    {
        if(is_null( $tarea))
        {
            $tarea = Tarea::make([
                'urgencia' => 0,
                'fecha_limite' => Carbon::now(),
            ]);

        }

        $this->tarea = $tarea;
        
    }

    public function render()
    {
        $params = [
            'tarea' => $this->tarea,
            'urgencias' => Tarea::URGENCIAS,

        ];
        return view('components.tarea-form-body',$params);
    }
}
