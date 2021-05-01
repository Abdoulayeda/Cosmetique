@extends('admin.base')
@section('contenu')

    <div class="container">
        <h2>Les produits</h2>
<div class="alert">
    @if(session('prodcreate'))
        <div class="alert alert-success" role="alertdialog">
            {{ session('prodcreate') }}
        </div>
    @endif

        @if(session('prodedit'))
            <div class="alert alert-success" role="alertdialog">
                {{ session('prodedit') }}
            </div>
        @endif

        @if(session('proddelete'))
            <div class="alert alert-danger">
                {{ session('proddelete') }}
            </div>
        @endif
</div>
        <button>
            <a href="{{ route('produit.create') }}">Ajouter</a>
        </button>

        <table class="table table-striped">
            <thead class="table-dark">
            <th>Numéro</th>
            <th>Titre</th>
            <th>Prix</th>
            <th>Prix Promo</th>
            <th>% promo</th>

            <th>Ispromo</th>
            <th>Stocke</th>
            <th>Description</th>
            <th>Photo</th>
            <th>Créé</th>
            <th>Modifié </th>
            <th></th>
            <th>Action</th>

            </thead>

            <tbody>

            @foreach( $produits as $key=>$produit)

                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $produit->titre }}</td>
                    <td>{{ $produit->prix }}</td>
                    <td>{{ $produit->prixpromo }}</td>
                    <td>{{ $produit->promo }}</td>
                    <td>{{ $produit->ispromo }}</td>
                    <td>{{ $produit->stocke }}</td>
                    <td>{{ $produit->description }}
                    <td><img src="{{ $produit->imageproduit() }}" alt="" width="'80" height="80"></td>
                    </td>
                    <td>{{ $produit->created_at }}</td>
                    <td> {{ $produit->updated_at }}</td>

                    <td>
                        <a href="{{ route('produit.edit', $produit->id) }} ">
                            <div class="icon" >
                                <i class="bi bi-pencil-fill" style="font-size:30px "></i>
                            </div>
                        </a>
                    </td>


                    <td>

                        <form action="{{ route('produit.destroy', $produit->id) }}" method="post" onclick="return confirm('Etes sùr de vouloir supprimer?');">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">
                                <div class="icon">
                                    <i class="bi bi-trash" style="font-size:30px "></i>
                                </div>
                            </button>
                        </form>


                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>


    </div>

@endsection
