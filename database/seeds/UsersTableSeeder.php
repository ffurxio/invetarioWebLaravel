<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'usuario' => 'admin',
                'password' => '$2y$12$fQVExSFUFZCNs.9xClllau9VAWQGMJZq7KNTQ14DgpO2djOIiEeVi',
                'condicion' => 1,
                'idrol' => 1,
                'remember_token' => 'TLrMOsVpTWGkPDT0EB3R8JTapzkvCT2ntwLLMT3JOZZhtML9w1WwHsjHJK5n',
            ),
            1 => 
            array (
                'id' => 5,
                'usuario' => 'jose',
                'password' => '$2y$10$/NCWJJ9aD60bi.KG/Nu4seGwesgiisIKb1k6eVHyM7mldYTyNfm8u',
                'condicion' => 1,
                'idrol' => 3,
                'remember_token' => '',
            ),
            2 => 
            array (
                'id' => 6,
                'usuario' => 'maxi',
                'password' => '$2y$10$Doyn0rEKDWS76NiZHxzjIu53u7VL5MDbGndautuyKv8iBygVDq1De',
                'condicion' => 1,
                'idrol' => 2,
                'remember_token' => 'JaMiM71ZZDQiqPhOgqMNAZN6nn2TA2hqwOySO0LNaJidezJBD64caBVnL4qo',
            ),
        ));
        
        
    }
}