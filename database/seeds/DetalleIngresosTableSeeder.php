<?php

use Illuminate\Database\Seeder;

class DetalleIngresosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('detalle_ingresos')->delete();
        
        \DB::table('detalle_ingresos')->insert(array (
            0 => 
            array (
                'id' => 5,
                'idingreso' => 4,
                'idarticulo' => 2,
                'cantidad' => 100,
                'precio' => '220.00',
            ),
            1 => 
            array (
                'id' => 6,
                'idingreso' => 4,
                'idarticulo' => 1,
                'cantidad' => 100,
                'precio' => '20.00',
            ),
            2 => 
            array (
                'id' => 7,
                'idingreso' => 5,
                'idarticulo' => 2,
                'cantidad' => 50,
                'precio' => '10.00',
            ),
            3 => 
            array (
                'id' => 8,
                'idingreso' => 5,
                'idarticulo' => 1,
                'cantidad' => 20,
                'precio' => '20.00',
            ),
            4 => 
            array (
                'id' => 9,
                'idingreso' => 6,
                'idarticulo' => 1,
                'cantidad' => 50,
                'precio' => '50.00',
            ),
            5 => 
            array (
                'id' => 10,
                'idingreso' => 6,
                'idarticulo' => 2,
                'cantidad' => 10,
                'precio' => '250.00',
            ),
            6 => 
            array (
                'id' => 11,
                'idingreso' => 6,
                'idarticulo' => 3,
                'cantidad' => 5,
                'precio' => '1250.00',
            ),
            7 => 
            array (
                'id' => 12,
                'idingreso' => 7,
                'idarticulo' => 3,
                'cantidad' => 1,
                'precio' => '1500.00',
            ),
            8 => 
            array (
                'id' => 13,
                'idingreso' => 8,
                'idarticulo' => 1,
                'cantidad' => 10,
                'precio' => '20.00',
            ),
            9 => 
            array (
                'id' => 14,
                'idingreso' => 9,
                'idarticulo' => 3,
                'cantidad' => 1,
                'precio' => '1250.00',
            ),
        ));
        
        
    }
}