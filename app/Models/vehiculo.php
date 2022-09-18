<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehiculo extends Model
{
    protected $table = 'vehiculos';
    protected $fillable = ['numero_vehículo','placa','chasis','fecha_matricula','topologia' ];
    public function tipologia(){
        return $this->belongsTo('App\Models\tipologia');
    }
    public function documento(){
        return $this->hasMany('App\Models\documento');
    }
    use HasFactory;
}
