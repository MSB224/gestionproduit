<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Client::create([
            'nom'=>'Balde',
            'prenom'=>'Mamadou saliou',
            'telephone'=>'624378757',
            'genre'=>'M',
           
        ]);

    }
}
