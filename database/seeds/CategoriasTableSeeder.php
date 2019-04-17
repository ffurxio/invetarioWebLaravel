<?php

use Illuminate\Database\Seeder;

class CategoriasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categorias')->delete();
        
        \DB::table('categorias')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nombre' => 'Teclados',
                'descripcion' => 'teclados gamers',
                'condicion' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'nombre' => 'Monitores',
                'descripcion' => 'todos tipo de monitores',
                'condicion' => 1,
                'created_at' => '2018-09-07 21:43:35',
                'updated_at' => '2018-09-07 21:43:35',
            ),
            2 => 
            array (
                'id' => 3,
                'nombre' => 'MotherBoards',
                'descripcion' => 'placas madre gamers',
                'condicion' => 1,
                'created_at' => '2018-09-07 21:43:55',
                'updated_at' => '2018-09-07 21:43:55',
            ),
            3 => 
            array (
                'id' => 4,
                'nombre' => 'Laptops',
                'descripcion' => 'laptops de marca Hp, Lenovo, Asus, Acer, Toshiba, Dell',
                'condicion' => 1,
                'created_at' => '2018-09-10 17:23:16',
                'updated_at' => '2018-09-10 17:23:16',
            ),
            4 => 
            array (
                'id' => 5,
                'nombre' => 'Fundas',
                'descripcion' => 'fundas de laptop, impresoras y pc',
                'condicion' => 1,
                'created_at' => '2018-09-10 17:23:50',
                'updated_at' => '2018-09-10 17:23:50',
            ),
        ));
        
        
    }
}