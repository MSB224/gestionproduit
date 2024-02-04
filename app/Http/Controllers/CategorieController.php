<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategorieRequest;
use App\Http\Requests\UpdateCategoriesRequest;
use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    //

    public function index(){

            $categori=Categorie::orderby('categories','asc')->paginate(3);
            //$categories=Categories::orderby('categories','asc')->get();
            return view('front_end.categorie.index',['categories'=>$categori]);
    }


    public function delete(Categorie $categorie){
        $categorie->delete();
        return back()->with('succes','une categories supprimer');
    }


    public function store(StoreCategorieRequest  $request,Categorie $categories){
        $categories->categories=$request->categories;
        $categories->save();
        return back()->with('status','une categories à été ajoutez');
    }


    public function edit(Categorie $id){
        return view('front_end.categorie.edit',compact('id'));
    }


  public function update(UpdateCategoriesRequest $request, String $id) {
    $categories = Categorie::findOrFail($id);
    $categories->categories = $request->categories;
    $categories->save();

    return redirect()->route('categorie')->with('succes', 'Modification avec succès');
}


}
