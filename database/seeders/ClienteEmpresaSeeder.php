<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ClienteEmpresa;

class ClienteEmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        ClienteEmpresa::factory()->times(50)->create();
    }
}
