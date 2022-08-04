<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTable([
            'estado_solicituds','cliente_residencials','solicitud_residencials',
            'cliente_empresas','solicitud_empresas'
        ]);
        // \App\Models\User::factory(10)->create();
        $this->call(EstadoSolicitudSeeder::class);
        $this->call(ClienteResidencialSeeder::class);
        $this->call(SolicitudResidencialSeeder::class);
        $this->call(ClienteEmpresaSeeder::class);
        $this->call(SolicitudEmpresaSeeder::class);
        

    }

    protected function truncateTable (array $tables)
    {
        foreach ($tables as $table)
        {
            DB::statement('SET FOREIGN_KEY_CHECKS=0');
            DB::table($table)->truncate();
            DB::statement('SET FOREIGN_KEY_CHECKS=1');
        }
    }
}
