<?php

use Illuminate\Database\Seeder;

class SuperAdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'type' => 'super_administrateur',
            'nom' => 'nom_superadmin',
            'prenom' => 'prenom_superadmin',
            'email' => 'superadmin@justlearn.com',
            'telephone' => '680808080',
            'sexe' => '0',
            'photo' => '/sources/images/superadmin.jpg',
            'password' => Hash::make('admin'),
        ]);
    }
}
