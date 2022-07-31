<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    use HasFactory;
   
    protected $guarded = [];
    protected $dates = ['fecha_limite']; 
    public const URGENCIAS = ['Baja', 'Normal', 'Alta'];

    public function urgencia(){
        return self::URGENCIAS[ $this->urgencia];
    }
    public function finalizada(){
        return $this->finalizada == 1 ? 'Si':'No';
    }
}
