<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProduitRequest;
use App\Http\Requests\UpdateProduitRequest;
use App\Models\Categorie;
use App\Models\Produit;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $categories=Categorie::orderBy
        $produit = Produit::orderBy('designation', 'ASC')->get();
        $categorie = Categorie::all();

        return view('front_end.produit.index', compact('produit', 'categorie'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProduitRequest $request)
    {
        //
        $produit = new Produit();
        $produit->designation = $request->designation;
        $produit->quantite = $request->quantite;
        $produit->prix_unitaire = $request->prix_unitaire;
        $produit->categorie_id = $request->categorie_id;
        // call the methode saving

            // Votre code d'enregistrement ici
            $produit->save();
            return back()->with('success', 'Produit ajouté avec succès');
       
           
        // affter saving this  back and read this message succès

       
    }

    /**
     * Display the specified resource.
     */
    public function show(Produit $produit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produit $produit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProduitRequest $request, Produit $produit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produit $produit)
    {
        //
    }
}
