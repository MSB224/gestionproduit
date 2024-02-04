<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Permission;
class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Permission::create([
            'name'=>'client-ajouter'
        ]);
          Permission::create([
            'name'=>'client-modifier'
        ]);
          Permission::create([
            'name'=>'client-supprimer'
        ]);
    }
}
 