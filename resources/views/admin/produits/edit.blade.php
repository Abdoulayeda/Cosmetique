@extends('admin.base')
@section('contenu')

<div class="container">

    <form action="{{ route('produit.update', $produit->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="">Titre</label>
        <input type="text" name="titre" value="{{ $produit->titre }}" class="form-control">

        <label for="">Prix</label>
        <input type="text" name="prix" value="{{ $produit->prix }}" class="form-control">

        <label for="">Prixpromo</label>
        <input type="text" name="prixpromo" value="{{ $produit->prixpromo }}" class="form-control">

        <label for="">Promo</label>
        <input type="text" name="promo" value="{{ $produit->promo }}" class="form-control">


        <input type="hidden" name="categorie" value="{{ $produit->categorie->id }}" class="form-control">

        <label for="">Photo</label>
        <img src="{{ $produit->imageproduit() }}" alt="" width="40" height="40">

        <input type="text" name="photo" value=" {{ $produit->photo }}">
        <label for="">Description</label>
        <br>
        <textarea name="description" id="" cols="30" rows="10"   value="{{ $produit->description }}" >
            {{ $produit->description }}
        </textarea>
        <br>
        <br>
        <button class="btn btn-primary">Modifier</button>
    </form>

</div>



@endsection
