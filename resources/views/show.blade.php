@extends('base')
@section('content')


    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6">
                <div class="card-img">
                    <img src="{{ $produit->imageproduit() }}" alt="" width="300" height="400">
                </div>
                <h2>{{ $produit->prix }} FCFA</h2>
                <h5>{{ $produit->description }}</h5>
            </div>

            <div class="col-lg-6">
                <div class="jumbotron">
                    <h2><span>Commander</span></h2>
                    <form action="">
                        <label for="">Nom</label>
                        <input type="text" name="" class="form-control">

                        <label for="">Prenom</label>
                        <input type="text" name="" class="form-control">

                        <label for="">Adresse</label>
                        <input type="text" name=""  class="form-control">

                        <label for="">Email</label>
                        <input type="email" name=""   class="form-control">

                        <button class="btn btn-primary mt-3" >Commander</button>
                    </form>
                </div>
            </div>
        </div>

    </div>


@endsection
