@extends('front_end.layouts')
@section('content')
<div class="container">
    <div class="row" style="margin-top: 10px">
        <div class="col-md-12">
            <form action="{{ route('storeProduit') }}" class="mt-3" method="post">
                @csrf
                <div class="form-group col-md-2">
                    <label for="designation">Designation</label>
                    <input name="designation" id="designation" type="text" class="form-control">
                    @error('designation')
                    <span class="text-danger text-center">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-md-3">
                    <label for="prix_unitaire">Prix unitaire</label>
                    <input name="prix_unitaire" id="prix_unitaire" type="text" class="form-control">
                    @error('prix_unitaire')
                    <span class="text-danger text-center">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-md-2">
                    <label for="Quantite">Quantite</label>
                    <input name="Quantite" id="Quantite" type="text" class="form-control">
                    @error('Quantite')
                    <span class="text-danger text-center">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-md-2">
                <label for="categorie_id">Categorie id</label>
                <input name="categorie_id" class="form-control"  type="text">
                <!-- if any error detected in this proccessus -->
                @error('categorie_id')
                <span class="text-danger text-center">{{$message}}</span>
                @enderror
                </div>
                
                <div class="form-group col-md-1">
                    <label for="btn">Action</label><br>
                    <button type="submit" id="btn" class="btn btn-danger">Envoyer</button>
                </div>

            </form>
            <table class="table table-hover table-bordered">
                <thead class="bg-primary">
                    <tr>
                        <th>N°</th>
                        <th>Designation</th>
                        <th>Prix unitaire</th>
                        <th>Quantite</th>
                        <th>Categorie indentite</th>

                        <th>Supprimer</th>
                        <th>Modifier</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($produit as $key => $produit)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $produit->designation }}</td>
                        <td>{{ $produit->prix_unitaire }}</td>
                        <td>{{ $produit->quantite }}</td>
                        <td>{{ $produit->categorie_id }}</td>
                           <td>
                                <form method="POST" action="{{ route('deleteClient',$client->id) }}">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger">Supprimer</button>
                                </form>
                            </td>
                            <td>
                                <a class="btn btn-success" href="{{ route('editClient',$client->id) }}">Modifier</a>
                            </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>

            @endsection