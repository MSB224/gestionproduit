@extends('front_end.layouts')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('inscription') }}" class="mt-3" method="post">
                @csrf
                <div class="form-group col-md-2">
                    <label for="nom">Nom</label>
                    <input name="nom" id="nom" type="text" class="form-control">
                    @error('nom')
                    <span class="text-danger text-center">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-md-2 ">
                    <label for="prenom">Prenom</label>
                    <input name="prenom" id="prenom" type="text" class="form-control">
                    @error('prenom')
                    <span class="text-danger text-center">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-md-2">
                    <label for="Telephone">Telephone</label>
                    <input name="telephone" id="telephone" type="text" class="form-control">
                    @error('telephone')
                    <span class="text-danger text-center">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-md-2">
                    <label for="email">Email</label>
                    <input name="email" id="nom" type="text" class="form-control">
                    @error('Email')
                    <span class="text-danger text-center">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-md-2">
                    <label for="password">Mot de passe</label>
                    <input name="password" id="password" type="password" class="form-control">
                    @error('password')
                    <span class="text-danger text-center">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-md-2">
                    <label for="password_confirmation">Confirmation du mot de passe</label>
                    <input name="password_confirmation" id="password_confirmation" type="password" class="form-control">
                </div>

                <div class="form-group col-md-2">
                    <label for="pseudo">pseudo</label>
                    <input name="pseudo" id="pseudo" type="text" class="form-control">
                    @error('pseudo')
                    <span class="text-danger text-center">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-md-1">
                    <label for="btn">Action</label><br>
                    <button type="submit" id="btn" class="btn btn-danger">Envoyer</button>
                </div>
            </form>
        </div>
    </div>
    @endsection