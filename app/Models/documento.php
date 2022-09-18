<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class documento extends Model
{
    protected $table = 'documentos';
    public function documento(){
        return $this->belongsTo('App\Models\vehiculo');
    }
    use HasFactory;
}
