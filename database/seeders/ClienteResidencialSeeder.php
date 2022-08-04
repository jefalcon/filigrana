<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ClienteResidencial;

class ClienteResidencialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        ClienteResidencial::factory()->times(50)->create();
    }
}
