@extends('front_end.layouts')

@section('content')
        <div class="container">
            <div class="row" style="margin-top: 10px">
                <div class="col-md-8">

                    <form action="{{ route('updateCategories',$id->id) }}" class="mt-3" method="post">
                        @csrf
                        <div class="form-group col-md-6 mt-5">
                            <label for="libelle">Categories</label>
                            <input value="{{ $id->categories }}" name="categories" id="libelle" type="text" class="form-control">
                        </div>

                        <div class="form-group col-md-3 mt-5">
                            <label for="btn">Action</label><br>
                            <button type="submit" class="btn btn-danger">Envoyer</button>

                        </div>

                    </form>


                </div>


            </div>
            @if (session('status'))
            <div class="alert alert-danger text-center">
                {{ session('status') }}
            </div>
            @endif

        </div>

@endsection
