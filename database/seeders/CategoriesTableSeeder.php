<?php

namespace Database\Seeders;

use App\Models\Categorie;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Categorie::create([
            'categories'=>'Chemise'
        ]);
        Categorie::create([
            'categories'=>'Alimentation'
        ]);
        Categorie::create([
            'categories'=>'ecouteur'
        ]);
    }
}
