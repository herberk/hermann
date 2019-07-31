<?php


use Illuminate\Database\Seeder;

class HelpTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Help::class)->create([

            'pantalla' => 'Pantalla del Perfil de usuario',
            'default-notes' => 'Debe ser un archivo de imagen de dimensiones 150x150 pixeles',
            'notes' => 'cualquier blabla que escriban los usuarios y es editable'
        ]);

        factory(Help::class)->times(10)->create();
    }
}
