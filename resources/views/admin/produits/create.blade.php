@extends('admin.base')
@section('contenu')

<div class="container">

    <h2>Ajouter un produit</h2>

    <form action="{{ route('produit.store') }}" method="post" class="form-group" enctype="multipart/form-data">
      @csrf
        <label for="">Titre</label>
        <input type="text" name="titre" class="form-control">

        <label for="">prix</label>
        <input type="text" name="prix" class="form-control">

        <label for="">prixpromo</label>
        <input type="text" name="prixpromo" class="form-control">

        <label for="">promo</label>
        <input type="text" name="promo" class="form-control">

        <label for="">photo</label>
        <input type="file" name="photo" class="form-control">

        <label for="">Catégorie</label><br>
        <select name="categorie" id="">
            @foreach($categories as $categorie)
                <option value="{{ $categorie->id }}">{{ $categorie->nom }}</option>
            @endforeach
        </select>
        <br>
        <label for="">Description</label><br>
        <textarea name="description" id="" cols="30" rows="10"></textarea>
        <br>

        <br>

        <button class="btn btn-primary">Ajouter</button>
    </form>

</div>

@endsection
