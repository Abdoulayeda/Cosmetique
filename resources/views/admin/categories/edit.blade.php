@extends('admin.base')
@section('contenu')

    <div class="container">

        <form action="{{ route('categorie.update',$categorie->id) }}" class="form-group" method="post">
            @csrf
            @method('PUT')

            <label for="">Nom</label>
            <input type="text" name="nom" value="{{ $categorie->nom }}" class="form-control">
            <button class="btn btn-primary">Modifier</button>
        </form>
    </div>

@endsection
