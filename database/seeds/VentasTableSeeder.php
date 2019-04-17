<?php

use Illuminate\Database\Seeder;

class VentasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ventas')->delete();
        
        \DB::table('ventas')->insert(array (
            0 => 
            array (
                'id' => 1,
                'idcliente' => 4,
                'idusuario' => 1,
                'tipo_comprobante' => 'BOLETA',
                'serie_comprobante' => '001',
                'num_comprobante' => '0001',
                'fecha_hora' => '2018-05-01 00:00:00',
                'impuesto' => '18.00',
                'total' => '100.00',
                'estado' => 'Anulado',
                'created_at' => NULL,
                'updated_at' => '2018-09-09 18:35:19',
            ),
            1 => 
            array (
                'id' => 2,
                'idcliente' => 6,
                'idusuario' => 1,
                'tipo_comprobante' => 'BOLETA',
                'serie_comprobante' => '0001',
                'num_comprobante' => '00002',
                'fecha_hora' => '2018-06-05 00:00:00',
                'impuesto' => '0.18',
                'total' => '1770.00',
                'estado' => 'Anulado',
                'created_at' => '2018-09-09 18:05:01',
                'updated_at' => '2018-09-09 18:41:05',
            ),
            2 => 
            array (
                'id' => 3,
                'idcliente' => 6,
                'idusuario' => 1,
                'tipo_comprobante' => 'BOLETA',
                'serie_comprobante' => '0001',
                'num_comprobante' => '0003',
                'fecha_hora' => '2018-05-07 00:00:00',
                'impuesto' => '0.18',
                'total' => '1000.00',
                'estado' => 'Registrado',
                'created_at' => '2018-09-09 18:19:37',
                'updated_at' => '2018-09-09 18:19:37',
            ),
            3 => 
            array (
                'id' => 4,
                'idcliente' => 4,
                'idusuario' => 1,
                'tipo_comprobante' => 'BOLETA',
                'serie_comprobante' => '0001',
                'num_comprobante' => '00005',
                'fecha_hora' => '2018-09-09 00:00:00',
                'impuesto' => '0.18',
                'total' => '1744.00',
                'estado' => 'Registrado',
                'created_at' => '2018-09-09 18:37:59',
                'updated_at' => '2018-09-09 18:37:59',
            ),
            4 => 
            array (
                'id' => 5,
                'idcliente' => 7,
                'idusuario' => 6,
                'tipo_comprobante' => 'BOLETA',
                'serie_comprobante' => '0001',
                'num_comprobante' => '0007',
                'fecha_hora' => '2018-09-09 00:00:00',
                'impuesto' => '0.18',
                'total' => '3000.00',
                'estado' => 'Registrado',
                'created_at' => '2018-09-09 23:56:57',
                'updated_at' => '2018-09-09 23:56:57',
            ),
            5 => 
            array (
                'id' => 6,
                'idcliente' => 4,
                'idusuario' => 6,
                'tipo_comprobante' => 'BOLETA',
                'serie_comprobante' => '0001',
                'num_comprobante' => '00009',
                'fecha_hora' => '2018-09-10 00:00:00',
                'impuesto' => '0.18',
                'total' => '1500.00',
                'estado' => 'Registrado',
                'created_at' => '2018-09-10 00:46:11',
                'updated_at' => '2018-09-10 00:46:11',
            ),
            6 => 
            array (
                'id' => 7,
                'idcliente' => 6,
                'idusuario' => 1,
                'tipo_comprobante' => 'BOLETA',
                'serie_comprobante' => '0001',
                'num_comprobante' => '00009',
                'fecha_hora' => '2018-09-10 00:00:00',
                'impuesto' => '0.18',
                'total' => '3000.00',
                'estado' => 'Registrado',
                'created_at' => '2018-09-10 16:40:13',
                'updated_at' => '2018-09-10 16:40:13',
            ),
            7 => 
            array (
                'id' => 8,
                'idcliente' => 3,
                'idusuario' => 1,
                'tipo_comprobante' => 'BOLETA',
                'serie_comprobante' => '0001',
                'num_comprobante' => '0010',
                'fecha_hora' => '2018-09-10 00:00:00',
                'impuesto' => '0.18',
                'total' => '1500.00',
                'estado' => 'Registrado',
                'created_at' => '2018-09-10 16:59:04',
                'updated_at' => '2018-09-10 16:59:04',
            ),
            8 => 
            array (
                'id' => 9,
                'idcliente' => 7,
                'idusuario' => 1,
                'tipo_comprobante' => 'BOLETA',
                'serie_comprobante' => '0001',
                'num_comprobante' => '00011',
                'fecha_hora' => '2018-09-10 00:00:00',
                'impuesto' => '0.18',
                'total' => '1500.00',
                'estado' => 'Registrado',
                'created_at' => '2018-09-10 17:04:11',
                'updated_at' => '2018-09-10 17:04:11',
            ),
        ));
        
        
    }
}