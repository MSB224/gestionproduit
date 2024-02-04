@extends('front_end.layouts')

@section('content')
    <div class="container">
        <div class="row" style="margin-top: 10px">
            <div class="col-md-8">

                <form action="{{ route('storeCategories') }}" class="mt-3" method="post">
                    @csrf
                    <div class="form-group col-md-6 mt-5">
                        <label for="libelle">Categories</label>
                        <input value="{{ old('categories') }}" name="categories" id="libelle" type="text"
                            class="form-control">
                    </div>

                    <div class="form-group col-md-3 mt-5">
                        <label for="btn">Action</label><br>
                        <button type="submit" id="btn" class="btn btn-danger">Envoyer</button>
                    </div>

                </form>

                <table class="table table-hover table-bordered">
                    <thead class="bg-primary">
                        <tr>
                            <th>N°</th>
                            <th>Categories</th>
                            <th>Supprimer</th>
                            <th>Modifier</th>
                        </tr>

                    </thead>
                    <tbody>
                        @forelse ($categories as $key=> $categoried)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $categoried->categories }}</td>
                                <td>
                                    <form class="" method="POST"
                                        action="{{ route('deleteCategories', $categoried->id) }}">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <button class="btn btn-primary">Supprimer</button>
                                    </form>
                                </td>
                                <td>

                                    <a class="btn btn-success" href="{{ route('editCategories', $categoried->id) }}">
                                        Modifier</a>

                                </td>
                            </tr>
                        @empty
                            <tr colspan="4">
                                <td>Aucune information trouvé</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

                {{ $categories->links() }}
                <!-- @if (session('status'))
                    <div class="alert alert-success text-center">
                        {{ session('status') }}
                    </div>
                @endif -->

                <!-- @if (session('succes'))
                    <div class="alert alert-danger text-center bg-danger">{{ session('succes') }}</div>
                @endif -->
                <!-- @error('categories')
                    <div class="alert alert-success text-center bg-success">{{ $message }}</div>
                @enderror  -->
                


                @if (session('succesUp'))
                <div class="alert alert-success text-center bg-success">{{ session('succes') }}</div>
                @endif 
            </div>


        </div>


    </div>
@endsection
