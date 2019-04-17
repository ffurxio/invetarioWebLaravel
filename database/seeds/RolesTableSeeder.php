<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nombre' => 'Administrador',
                'descripcion' => 'Administradores de área',
                'condicion' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'nombre' => 'Vendedor',
                'descripcion' => 'Vendedor área venta',
                'condicion' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'nombre' => 'Almacenero',
                'descripcion' => 'Almacenero área compras',
                'condicion' => 1,
            ),
        ));
        
        
    }
}