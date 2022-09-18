<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\documento;

class DocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        documento::create(['id' => 1, 'nombre' => 'Soat', 'fecha_expedicion' => '2022-01-01', 'fecha_vencimiento' => '2023-01-01', 'valor' => '5000000', 'path' => '', 'vehiculo_id' => '1']);
        documento::create(['id' => 2, 'nombre' => 'Tecnomecanica', 'fecha_expedicion' => '2022-01-01', 'fecha_vencimiento' => '2023-01-01', 'valor' => '2000000', 'path' => '', 'vehiculo_id' => '1']);
        documento::create(['id' => 3, 'nombre' => 'Impuestos', 'fecha_expedicion' => '2022-01-01', 'fecha_vencimiento' => '2023-01-01', 'valor' => '500000', 'path' => '', 'vehiculo_id' => '1']);
        //
    }
}
