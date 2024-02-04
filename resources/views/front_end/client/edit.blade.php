@extends('front_end.layouts')
@section('content')
<div class="container">
    <div class="row" style="margin-top: 10px">
        <div class="col-md-12">
            <form action="{{ route('updateClient',$client->id) }}" class="mt-3" method="post">
                @csrf
                
                <div class="form-group col-md-2">
                    <label for="nom">Nom</label>
                    <input value="{{ $client->nom }}" name="nom" id="nom" type="text" class="form-control">
                    @error('nom')
                        <span class="text-danger text-center">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-md-3">
                    <label for="prenom">Prenom</label>
                    <input value="{{ $client->prenom }}" name="prenom" id="prenom" type="text" class="form-control">
                    @error('prenom')
                        <span class="text-danger text-center">{{ $message }}</span>
                     @enderror
                </div>
                <div class="form-group col-md-2">
                    <label for="telephone">Telephone</label>
                    <input value="{{ $client->telephone }}" name="telephone" id="telephone" type="text" class="form-control">
                    @error('telephone')
                    <span class="text-danger text-center">{{ $message }}</span>
                @enderror
                </div>
                <div class="form-group col-md-2 ">
                    <label for="genre">Genre</label>
                    <input value="{{ $client->genre }}" name="genre" id="genre" type="text" class="form-control">
                    @error('genre')
                    <span class="text-danger text-center">{{ $message }}</span>
                @enderror
                </div>
               
                <div class="form-group col-md-1">
                    <label for="btn">Action</label><br>
                   <button type="submit" id="btn" class="btn btn-danger">Envoyer</button>
                </div>

            </form>


        </div>
        @if (session('status'))
            <div class="alert alert-success text-center">{{ session('status') }}</div>
        @endif
    </div>
    @if (session('succes'))
        <div class="alert alert-success text-center') }}</div>
    @endif

</div>
@endsection
