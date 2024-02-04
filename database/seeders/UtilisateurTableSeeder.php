<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;


class UtilisateurTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //definition des roles pour les admins et clients
        $admin =Role::create([
                'name'=>'admin',
        ]);
         $client =Role::create([
                'name'=>'client',
        ]);
       
    //    creation des users
    $admi = User::create([
        'nom'=>'Sow',
        'prenom'=>'Kadiatou saliou',
        'telephone'=>'78757',
        'pseudo'=>'MS',
        'email'=>'larya621@gmail.com',
        'password'=>bcrypt('1234')

    ]);

    $Cli = User::create([
        'nom'=>'Bah',
        'prenom'=>'Mamadou ',
        'telephone'=>'624378',
        'pseudo'=>'MSB',
        'email'=>'msb621@gmail.com',
        'password'=>bcrypt('1234')

    ]);

    // attachement des roles
    $admi->addRole($admin);
    $Cli->addRole($client);
    }
}
