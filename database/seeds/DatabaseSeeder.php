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
            'Bancos',
            'Directorios',
            'Ciudades',
            'Comunas',
            'Contactos',
            'Empresas',
            'empresa_juradas',
            'Ficheros',
            'Girosas',
            'Girosbs',
            'Giros',
            'helps',
            'Juradas',
            'professions',
            'messages',
            'Regiones',
            'skills',
            'Socios',
            'teams',
            'Tipos',
            'users',
            'user_profiles',
            'user_skill',



        ]);
//        $this->connection('dbsql')->truncateTables([
//          'Settings'
//
//        ]);

        $this->call([
            SettingsTableSeeder::class,
            TiposTableSeeder::class,
            AtributosTableSeeder::class,
            CiudadesTableSeeder::class,
            RegionesTableSeeder::class,
            ComunasTableSeeder::class,
            EmpresasTableSeeder::class,
            DirectoriosSeeder::class,
            FicherosSeeder::class,
            girosasTableSeder::class,
            girosbsTableSeder::class,
            GirosTableSeeder::class,
//          helpTableSeeder::class,
            JuradasTableSeeder::class,
            ContactosTableSeeder::class,
            bancosTableSeeder::class,
            SociosTableSeeder::class,
            ProfessionSeeder::class,
            SkillSeeder::class,
            TeamSeeder::class,
            UserSeeder::class,
            MessagesTableSeeder::class,
            empresa_juradaTableSeeder::class,

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
