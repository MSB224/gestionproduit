<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UtilisateursController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $user = User::paginate(3);
        return view('front_end.utilisateur.inscription',compact('user'));
        

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
    public function store(Request $request)
    {
        //
        request()->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'telephone'=>'required|unique:users',
            'pseudo'=>'required',
            'email'=>'required|unique:users',
            'password'=>'required|confirmed',

          
        ]);
        $user = new User();
        $user->nom=$request->nom;
        $user->prenom=$request->prenom;
        $user->telephone=$request->telephone;
        $user->pseudo=$request->pseudo;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        

        $user->save();
        return back()->with('succes','un client enregistrer avec succès');
        // affectation du role
        $user->addRole('client');
         
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
