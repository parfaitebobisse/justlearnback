<?php

use App\Cours;
use App\Classe;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SuperAdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Classe::create([
            "denomination"=>"GL",
            "niveau"=>1
        ]);
        Classe::create([
            "denomination"=>"GL",
            "niveau"=>2
        ]);
        Classe::create([
            "denomination"=>"GL",
            "niveau"=>2
        ]);

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
            'nom' => 'Claude',
            'prenom' => 'Bock',
            'email' => 'professeur@gmail.com',
            'telephone' => '699999999',
            'sexe' => '0',
            'photo' => '/sources/images/superadmin.jpg',
            'password' => Hash::make('professeur'),
        ]);

        DB::table('users')->insert([
            'classe_id'=>1,
            'type' => 'etudiant',
            'nom' => 'Ebobisse',
            'prenom' => 'Parfait',
            'email' => 'etudiant@gmail.com',
            'telephone' => '655555555',
            'sexe' => '0',
            'photo' => '/sources/images/superadmin.jpg',
            'password' => Hash::make('etudiant'),
        ]);

        Cours::create([
            "user_id"=>3,
            "classe_id"=>1,
            "denomination"=>"Machine Learning",
            "photo"=>"5f386da6c8911.jpg",
        ]);
        Cours::create([
            "user_id"=>3,
            "classe_id"=>1,
            "denomination"=>"Programmation Web Avancée",
            "photo"=>"5f3872f5c7503.png",
        ]);
    }
}
