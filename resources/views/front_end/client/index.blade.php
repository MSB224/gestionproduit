 @extends('front_end.layouts')
@section('content')
<div class="container">
    <div class="row" style="margin-top: 10px">
        <div class="col-md-12">
            <form action="{{ route('storeClient') }}" class="mt-3" method="post">
                @csrf
                <div class="form-group col-md-2">
                    <label for="nom">Nom</label>
                    <input name="nom" id="nom" type="text" class="form-control">
                    @error('nom')
                        <span class="text-danger text-center">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-md-3">
                    <label for="prenom">Prenom</label>
                    <input name="prenom" id="prenom" type="text" class="form-control">
                    @error('prenom')
                        <span class="text-danger text-center">{{ $message }}</span>
                     @enderror
                </div>
                <div class="form-group col-md-2">
                    <label for="telephone">Telephone</label>
                    <input name="telephone" id="telephone" type="text" class="form-control">
                    @error('telephone')
                    <span class="text-danger text-center">{{ $message }}</span>
                @enderror
                </div>
                <div class="form-group col-md-2 ">
                    <label for="genre">Genre</label>
                    <input name="genre" id="genre" type="text" class="form-control">
                    @error('genre')
                    <span class="text-danger text-center">{{ $message }}</span>
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
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Telephone</th>
                        <th>Genre</th>
                        <th>Status</th>
                        <th>Supprimer</th>
                        <th>Modifier</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($clien as $index=>$client)
                        <tr>
                            <td>
                                {{ $index+1 }}
                            </td>
                            <td>
                                {{ $client->nom }}
                            </td>
                            <td>
                                {{ $client->prenom }}
                            </td>
                            <td>
                                {{ $client->telephone }}
                            </td>
                            <td>
                                {{ $client->genre }}
                            </td>
                            <td>
                                {{ $client->status }}
                            </td>
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
                    @empty
                            <tr>
                                <td>
                                     Aucune information trouvé
                                </td>
                            </tr>
                    @endforelse
                </tbody>
            </table>
            {{ $clien->links() }}
        </div>
        @if (session('status'))
            <div class="alert alert-success text-center">{{ session('status') }}</div>
        @endif
    </div>
    @if (session('succes'))
        <div class="alert alert-success text-center">{{ session('succes') }}</div>
    @endif
    @if (session('succesUp'))
    <div class="alert alert-success text-center">{{ session('succesUp') }}</div>
@endif

</div>
@endsection
