<?php

use Illuminate\Database\Seeder;

class IngresosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ingresos')->delete();
        
        \DB::table('ingresos')->insert(array (
            0 => 
            array (
                'id' => 4,
                'idproveedor' => 7,
                'idusuario' => 1,
                'tipo_comprobante' => 'BOLETA',
                'serie_comprobante' => '0001',
                'num_comprobante' => '00004',
                'fecha_hora' => '2018-06-01 00:00:00',
                'impuesto' => '0.18',
                'total' => '24000.00',
                'estado' => 'Anulado',
                'created_at' => '2018-09-09 01:57:17',
                'updated_at' => '2018-09-09 02:07:39',
            ),
            1 => 
            array (
                'id' => 5,
                'idproveedor' => 3,
                'idusuario' => 1,
                'tipo_comprobante' => 'BOLETA',
                'serie_comprobante' => '0001',
                'num_comprobante' => '00005',
                'fecha_hora' => '2018-05-02 00:00:00',
                'impuesto' => '0.18',
                'total' => '900.00',
                'estado' => 'Anulado',
                'created_at' => '2018-09-09 02:23:08',
                'updated_at' => '2018-09-09 02:23:26',
            ),
            2 => 
            array (
                'id' => 6,
                'idproveedor' => 3,
                'idusuario' => 1,
                'tipo_comprobante' => 'BOLETA',
                'serie_comprobante' => '0001',
                'num_comprobante' => '00006',
                'fecha_hora' => '2018-07-04 00:00:00',
                'impuesto' => '0.18',
                'total' => '11250.00',
                'estado' => 'Registrado',
                'created_at' => '2018-09-09 22:12:41',
                'updated_at' => '2018-09-09 22:12:41',
            ),
            3 => 
            array (
                'id' => 7,
                'idproveedor' => 7,
                'idusuario' => 1,
                'tipo_comprobante' => 'BOLETA',
                'serie_comprobante' => '0001',
                'num_comprobante' => '00005',
                'fecha_hora' => '2018-09-10 00:00:00',
                'impuesto' => '0.18',
                'total' => '1500.00',
                'estado' => 'Registrado',
                'created_at' => '2018-09-09 22:46:47',
                'updated_at' => '2018-09-09 22:46:47',
            ),
            4 => 
            array (
                'id' => 8,
                'idproveedor' => 3,
                'idusuario' => 1,
                'tipo_comprobante' => 'BOLETA',
                'serie_comprobante' => '0001',
                'num_comprobante' => '00006',
                'fecha_hora' => '2018-09-09 00:00:00',
                'impuesto' => '0.18',
                'total' => '200.00',
                'estado' => 'Registrado',
                'created_at' => '2018-09-09 23:27:00',
                'updated_at' => '2018-09-09 23:27:00',
            ),
            5 => 
            array (
                'id' => 9,
                'idproveedor' => 7,
                'idusuario' => 1,
                'tipo_comprobante' => 'BOLETA',
                'serie_comprobante' => '0001',
                'num_comprobante' => '00008',
                'fecha_hora' => '2018-09-10 00:00:00',
                'impuesto' => '0.18',
                'total' => '1250.00',
                'estado' => 'Registrado',
                'created_at' => '2018-09-10 00:38:17',
                'updated_at' => '2018-09-10 00:38:17',
            ),
        ));
        
        
    }
}