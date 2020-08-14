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
            'email' => 'superadmin@gmail.com',
            'telephone' => '680808080',
            'sexe' => '0',
            'photo' => '/sources/images/superadmin.jpg',
            'password' => Hash::make('superadmin'),
        ]);

        DB::table('users')->insert([
            'type' => 'administrateur',
            'nom' => 'nom_administrateur',
            'prenom' => 'prenom_administrateur',
            'email' => 'admin@gmail.com',
            'telephone' => '67777777',
            'sexe' => '0',
            'photo' => '/sources/images/superadmin.jpg',
            'password' => Hash::make('admin'),
        ]);

        DB::table('users')->insert([
            'type' => 'professeur',
            'nom' => 'nom_professeur',
            'prenom' => 'prenom_professeur',
            'email' => 'professeur@gmail.com',
            'telephone' => '699999999',
            'sexe' => '0',
            'photo' => '/sources/images/superadmin.jpg',
            'password' => Hash::make('professeur'),
        ]);

        DB::table('users')->insert([
            'type' => 'etudiant',
            'nom' => 'nom_etudiant',
            'prenom' => 'prenom_etudiant',
            'email' => 'etudiant@gmail.com',
            'telephone' => '655555555',
            'sexe' => '0',
            'photo' => '/sources/images/superadmin.jpg',
            'password' => Hash::make('etudiant'),
        ]);
    }
}
