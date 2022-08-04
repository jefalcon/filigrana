<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SolicitudResidencial;

class SolicitudResidencialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        SolicitudResidencial::factory()->times(50)->create();
        
    }
}
