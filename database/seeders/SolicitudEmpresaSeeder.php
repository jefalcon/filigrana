<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SolicitudEmpresa;

class SolicitudEmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        SolicitudEmpresa::factory()->times(50)->create();
    }
}
