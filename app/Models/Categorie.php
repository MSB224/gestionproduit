<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    // ici on fixe les relations definiton de la relation entre categories et produits
   public function produit(){
    return $this->hasMany(Produit::class);
}
}
