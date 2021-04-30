@extends('admin.base')
@section('contenu')


    <div class="container">

        <h2>Categorie</h2>
        <div>
            @if(session('catcreate'))
           <div class="alert alert-success" role="alert">
               {{ session('catcreate') }}
           </div>
            @endif

                @if(session('catedit'))
                    <div class="alert alert-success" role="alert">
                        {{ session('catedit') }}
                    </div>
                @endif

                @if(session('catdelete'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('catdelete') }}
                    </div>
                @endif

        </div>

<button class="btn btn-dark">
    <a href="{{ route('categorie.create') }}"> Ajouter</a>
</button>

        <table class="table table-striped">
            <thead class="table-dark">
            <th>Numéro</th>
            <th>Nom</th>
            <th></th>
            <th>Action</th>

            </thead>

            <tbody>

            @foreach( $categories as $key=>$categorie)

                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $categorie->nom }}</td>
                    <td>
                        <a href=" {{ route('categorie.edit',$categorie->id) }}">
                            <div class="icon" >
                                <i class="bi bi-pencil-fill" style="font-size:30px "></i>
                            </div>
                        </a>
                    </td>


                    <td>

                        <form action="{{ route('categorie.destroy', $categorie->id) }}" method="post" onclick="return confirm('Etes sùr de vouloir supprimer?');">
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
