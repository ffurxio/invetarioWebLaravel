<?php

use Illuminate\Database\Seeder;

class PersonasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('personas')->delete();
        
        \DB::table('personas')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nombre' => 'angel',
                'tipo_documento' => 'DNI',
                'num_documento' => '72154871',
                'direccion' => 'calle los naranjos 852',
                'telefono' => '54328730',
                'email' => 'angeltotocayo_257@hotmail.com',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'nombre' => 'juan carlos',
                'tipo_documento' => 'DNI',
                'num_documento' => '54215485',
                'direccion' => 'Av. simon bolivar 410',
                'telefono' => '54328730',
                'email' => 'juan@gmail.com',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'nombre' => 'ELECTRONICS S.A.C.',
                'tipo_documento' => 'RUC',
                'num_documento' => '10585621457',
                'direccion' => 'Calle los jirasoles 20',
                'telefono' => '458521',
                'email' => 'electronics@hotmail.com',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'nombre' => 'Daniel',
                'tipo_documento' => 'DNI',
                'num_documento' => '45852541',
                'direccion' => 'Calle los tombos 63',
                'telefono' => '05478541',
                'email' => 'daniel@gmail.com',
                'created_at' => '2018-09-07 16:17:24',
                'updated_at' => '2018-09-07 16:17:24',
            ),
            4 => 
            array (
                'id' => 5,
                'nombre' => 'Jose',
                'tipo_documento' => 'DNI',
                'num_documento' => '30225415',
                'direccion' => 'Calle Perales 221',
                'telefono' => '556699',
                'email' => 'jose@gmail.com',
                'created_at' => '2018-09-07 16:19:08',
                'updated_at' => '2018-09-07 16:19:08',
            ),
            5 => 
            array (
                'id' => 6,
                'nombre' => 'Maximo',
                'tipo_documento' => 'DNI',
                'num_documento' => '30662512',
                'direccion' => 'Av la marina 120',
                'telefono' => '221155',
                'email' => 'maximo@gmail.com',
                'created_at' => '2018-09-07 16:20:16',
                'updated_at' => '2018-09-07 16:20:16',
            ),
            6 => 
            array (
                'id' => 7,
                'nombre' => 'ITD tecnology',
                'tipo_documento' => 'RUC',
                'num_documento' => '20548452584',
                'direccion' => 'Calle Octavio Muñoz Najar 215',
                'telefono' => '354896',
                'email' => 'itd@gmail.com',
                'created_at' => '2018-09-07 18:20:08',
                'updated_at' => '2018-09-07 18:20:08',
            ),
        ));
        
        
    }
}