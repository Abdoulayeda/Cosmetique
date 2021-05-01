@extends('base')
@section('content')


    <div class="container mt-5" style="background-color: #00cc00">
        <div class="row">
            <div class="col-lg-4">
                <h2 class="card-title" style="font-size: 3rem">{{ $produit->titre }}</h2>

                <div class="card-img">
                    <img src="{{ $produit->imageproduit() }}" alt="" width="300" height="400">
                </div>
                <h2>{{ $produit->prix }} FCFA</h2>
                <h5>{{ $produit->description }}</h5>
            </div>

            <div class="col-lg-4">
                <div class="jumbotron">
                    <h2><span>Commander</span></h2>
                    <form action="">
                        <label for="">Prenom</label>
                        <input type="text" name="" class="form-control">

                        <label for="">Nom</label>
                        <input type="text" name="" class="form-control">

                        <label for="">Téléphone</label>
                        <input type="text" name=""  class="form-control">

                        <label for="">Adresse</label>
                        <input type="text" name=""  class="form-control">


                        <label for="">Email</label>
                        <input type="email" name=""   class="form-control">

                        <button class="btn btn-primary mt-3" >Commander</button>
                    </form>
                </div>
            </div>

            <div class="col-lg-4" >
                <p style="color: black">
                    Vous pouvez commander par téléphone en appelant le numéro 782777140 ou par whatshapp sur le meme numéro.
                </p>
                <p style="color: black"> Si vous avez des questions ou rencontrez des problemes merci de nous contacter par mail <span>abdoulayeda93@gmail.com</span>
                ou sur le numéro ci-dessous, par whatsapp ou appel normal.
                </p>

                <p style="color: black">Nous somme aussi joignable sur <a href="">facebook</a> , <a href="">twitter</a> ou <a href="">instagram</a></p>
            </div>
        </div>

    </div>


@endsection
