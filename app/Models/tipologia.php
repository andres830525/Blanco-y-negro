<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipologia extends Model
{
    protected $table = 'tipologias';
    public function vehiculo()
    {
        return $this->hasOne('App\Models\vehiculo');
    }
    use HasFactory;
}
