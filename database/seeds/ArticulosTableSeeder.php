<?php

use Illuminate\Database\Seeder;

class ArticulosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('articulos')->delete();
        
        \DB::table('articulos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'idcategoria' => 1,
                'codigo' => '00245',
                'nombre' => 'loguitech',
                'precio_venta' => '20.00',
                'stock' => 500,
                'descripcion' => 'teclado model km90',
                'condicion' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'idcategoria' => 3,
                'codigo' => 'MN-P78',
                'nombre' => 'placa asus',
                'precio_venta' => '250.00',
                'stock' => 500,
                'descripcion' => 'placas standar',
                'condicion' => 1,
                'created_at' => '2018-09-07 21:44:29',
                'updated_at' => '2018-09-07 21:44:29',
            ),
            2 => 
            array (
                'id' => 3,
                'idcategoria' => 2,
                'codigo' => 'CMYK-45-10',
                'nombre' => 'GL Monitor de 4k',
                'precio_venta' => '1500.00',
                'stock' => 500,
                'descripcion' => 'monitor de alta resolucion',
                'condicion' => 1,
                'created_at' => '2018-09-07 21:45:13',
                'updated_at' => '2018-09-07 21:45:13',
            ),
        ));
        
        
    }
}