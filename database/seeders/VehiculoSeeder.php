<?php

namespace Database\Seeders;
use App\Models\vehiculo;

use Illuminate\Database\Seeder;

class VehiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        vehiculo::create(['id' => 1, 'numero_vehículo' => '1080', 'placa' => 'TVR74Y', 'chasis' => 'microbus', 'fecha_matricula' => '2000-01-01', 'tipologia_id' => 1]);
        vehiculo::create(['id' => 2, 'numero_vehículo' => '1444', 'placa' => 'TGRH58P    ', 'chasis' => 'buseta', 'fecha_matricula' => '2000-01-01', 'tipologia_id' => 4,]);
    }
}


        //

