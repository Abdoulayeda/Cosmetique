@extends('admin.base')
@section('contenu')

    <div class="container">

        <div class="form-group">
            <form action="{{ route('categorie.store') }}" method="POST">
                @csrf
                <label>Nom</label>
                <input type="text" name="nom" class="form-control">
                <button class="btn btn-primary">Ajouter</button>
            </form>
        </div>

    </div>

@endsection
