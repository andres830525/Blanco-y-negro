<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class documento extends Model
{
    protected $table = 'documentos';
    protected $fillable = ['nombre','fecha_expedicion','fecha_vencimiento','valor','path','vehiculo_id' ];
    public function vehiculo(){
        return $this->belongsTo('App\Models\vehiculo');
    }
    use HasFactory;
}
