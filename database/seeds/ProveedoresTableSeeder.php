<?php

use Illuminate\Database\Seeder;

class ProveedoresTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('proveedores')->delete();
        
        \DB::table('proveedores')->insert(array (
            0 => 
            array (
                'id' => 3,
                'contacto' => 'Martin quiñones',
                'telefono_contacto' => '584721',
            ),
            1 => 
            array (
                'id' => 7,
                'contacto' => 'Daniela Chamuco',
                'telefono_contacto' => '452512',
            ),
        ));
        
        
    }
}