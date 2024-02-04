<?php

namespace Database\Seeders;

use App\Models\Produit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProduitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Produit::create([
            'designation'=>'mangue',
            'quantite'=>'50',
            'prix_unitaire'=>'25',
            'categorie_id'=>'2'
        ]);
    }
}
