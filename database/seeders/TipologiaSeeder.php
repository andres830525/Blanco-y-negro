<?php

namespace Database\Seeders;
use App\Models\tipologia;

use Illuminate\Database\Seeder;

class TipologiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        tipologia::create(['id' => 1, 'nombre' => 'Articulado']);
        tipologia::create(['id' => 2, 'nombre' => 'padron']);
        tipologia::create(['id' => 3, 'nombre' => 'Complementaria']);
        tipologia::create(['id' => 4, 'nombre' => 'Diesel']);
        tipologia::create(['id' => 5, 'nombre' => 'Dual']);
        //
    }
}
