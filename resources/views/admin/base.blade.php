<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('icons/font/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <style>
        .icons {
            display: grid;
            max-width: 100%;
            grid-template-columns: repeat(auto-fit, minmax(100px, 1fr) );
            gap: 1.25rem;
        }
        .icon {
            background-color: var(--bs-light);
            border-radius: .25rem;
        }
        .bi {
            margin: .25rem;
            font-size: 2.5rem;
        }
        .label {
            font-family: var(--bs-font-monospace);
        }
        .label {
            display: inline-block;
            width: 100%;
            overflow: hidden;
            padding: .35rem;
            font-size: .625rem;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
    </style>


</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark  bg-dark">
    <a class="navbar-brand" href="/admin">Cosmetique</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="true" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse show" id="navbarColor01" style="">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('categorie.index') }}">Categorie

                </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('produit.index') }} ">Produits

                </a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href=" ">Commandes

                </a>
            </li>

        </ul>

        <ul class="navbar-nav">
            <li class="nav-item">
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                   <button class="btn btn-danger">Déconnecter</button>
                </form>
            </li>
        </ul>

    </div>
</nav>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@yield('contenu')


</body>
</html>
