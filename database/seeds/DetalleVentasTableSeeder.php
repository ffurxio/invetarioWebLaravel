<?php

use Illuminate\Database\Seeder;

class DetalleVentasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('detalle_ventas')->delete();
        
        \DB::table('detalle_ventas')->insert(array (
            0 => 
            array (
                'id' => 1,
                'idventa' => 1,
                'idarticulo' => 1,
                'cantidad' => 10,
                'precio' => '25.00',
                'descuento' => '0.00',
            ),
            1 => 
            array (
                'id' => 2,
                'idventa' => 2,
                'idarticulo' => 2,
                'cantidad' => 1,
                'precio' => '250.00',
                'descuento' => '0.00',
            ),
            2 => 
            array (
                'id' => 3,
                'idventa' => 2,
                'idarticulo' => 3,
                'cantidad' => 1,
                'precio' => '1500.00',
                'descuento' => '0.00',
            ),
            3 => 
            array (
                'id' => 4,
                'idventa' => 2,
                'idarticulo' => 1,
                'cantidad' => 1,
                'precio' => '20.00',
                'descuento' => '0.00',
            ),
            4 => 
            array (
                'id' => 5,
                'idventa' => 3,
                'idarticulo' => 1,
                'cantidad' => 50,
                'precio' => '20.00',
                'descuento' => '0.00',
            ),
            5 => 
            array (
                'id' => 6,
                'idventa' => 4,
                'idarticulo' => 1,
                'cantidad' => 1,
                'precio' => '20.00',
                'descuento' => '1.00',
            ),
            6 => 
            array (
                'id' => 7,
                'idventa' => 4,
                'idarticulo' => 2,
                'cantidad' => 1,
                'precio' => '250.00',
                'descuento' => '5.00',
            ),
            7 => 
            array (
                'id' => 8,
                'idventa' => 4,
                'idarticulo' => 3,
                'cantidad' => 1,
                'precio' => '1500.00',
                'descuento' => '20.00',
            ),
            8 => 
            array (
                'id' => 9,
                'idventa' => 5,
                'idarticulo' => 3,
                'cantidad' => 2,
                'precio' => '1500.00',
                'descuento' => '0.00',
            ),
            9 => 
            array (
                'id' => 10,
                'idventa' => 6,
                'idarticulo' => 3,
                'cantidad' => 1,
                'precio' => '1500.00',
                'descuento' => '0.00',
            ),
            10 => 
            array (
                'id' => 11,
                'idventa' => 7,
                'idarticulo' => 3,
                'cantidad' => 2,
                'precio' => '1500.00',
                'descuento' => '0.00',
            ),
            11 => 
            array (
                'id' => 12,
                'idventa' => 8,
                'idarticulo' => 3,
                'cantidad' => 1,
                'precio' => '1500.00',
                'descuento' => '0.00',
            ),
            12 => 
            array (
                'id' => 13,
                'idventa' => 9,
                'idarticulo' => 3,
                'cantidad' => 1,
                'precio' => '1500.00',
                'descuento' => '0.00',
            ),
        ));
        
        
    }
}