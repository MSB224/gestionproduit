<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;
use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $clien=Client::paginate(3);
        return view('front_end.client.index',compact('clien'));
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
    public function store(StoreClientRequest $request)
    {
        //
          $client=new Client();
        $client->nom=$request->nom;
        $client->prenom=$request->prenom;
        $client->telephone=$request->telephone;
        $client->genre=$request->genre;

        $client->save();

        return back()->with('succes','un client enregistrer avec succès');
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
    public function edit(Client $client)
    {
        //
        return view('front_end.client.edit',compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClientRequest $request, Client $id)       
    {
        $verClient=Client::where('id','<>',$id->id)->where('telephone',$request->telephone)->First();

        if($verClient)
        {
            return back()->with('status','Cet numero existe dèja');
        }else{
            $id->nom=$request->nom;
            $id->prenom=$request->prenom;
            $id->telephone=$request->telephone;
            $id->genre=$request->genre;
           
            $id->save();
            return redirect()->route('client')->with('succesUp','Client modifier avec succès');
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {   
        $client->delete();
        return back()->with('status','Client supprimer avec succès');
    }
}
