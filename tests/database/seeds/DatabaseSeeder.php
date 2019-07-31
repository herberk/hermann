<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTables([
            'Atributos',
            'Ciudades',
            'Comunas',
            'Contactos',
            'Empresas',
            'Files',
            'Girosas',
            'Girosbs',
            'Giros',
            'helps',
            'Juradas',
            'professions',
            'Regiones',
            'settings',
            'skills',
            'Socios',
            'teams',
            'Tipos',
            'users',
            'user_profiles',
            'user_skill',


        ]);

        $this->call([
            TiposTableSeeder::class,
            AtributosTableSeeder::class,
            CiudadesTableSeeder::class,
            RegionesTableSeeder::class,
            ComunasTableSeeder::class,
            EmpresasTableSeeder::class,
            FilesTableSeeder::class,
            girosasTableSeder::class,
            girosbsTableSeder::class,
            GirosTableSeeder::class,
//            helpTableSeeder::class,
            JuradasTableSeeder::class,
            ContactosTableSeeder::class,
            SociosTableSeeder::class,
            ProfessionSeeder::class,
            SkillSeeder::class,
            TeamSeeder::class,
            SettingsSeeder::class,
            UserSeeder::class,

        ]);
        $this->command->warn('All done = Todo bien :)');
    }

    protected function truncateTables(array $tables)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');

        foreach ($tables as $table) {
            DB::table($table)->truncate();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }

}
