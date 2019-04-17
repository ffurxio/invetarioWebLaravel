<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(CategoriasTableSeeder::class);
        $this->call(ArticulosTableSeeder::class);
        $this->call(PersonasTableSeeder::class);  
        $this->call(ProveedoresTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(IngresosTableSeeder::class);
        $this->call(DetalleIngresosTableSeeder::class);
        $this->call(VentasTableSeeder::class);
        $this->call(DetalleVentasTableSeeder::class);        
        $this->call(NotificationsTableSeeder::class);
                      

        

    }
}
