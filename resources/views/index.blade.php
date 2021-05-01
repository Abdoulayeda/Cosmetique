@extends('base')
    @section('content')


        <div class="product__discount__slider owl-carousel mt-3">

            <img src="{{ asset('images/im4.jpg') }}" alt="" width="600" height="200">
            <img src="{{ asset('images/im4.jpg') }}" alt="" width="400" height="200">
            <img src="{{ asset('images/im4.jpg') }}" alt="" width="400" height="200">
            <img src="{{ asset('images/im4.jpg') }}" alt="" width="400" height="200">


        </div>

    <section class="product spad" style="background-color: #6f42c1">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="sidebar">
                        <div class="sidebar__item">
                            <h4>Nos catégories</h4>
                            <ul>
                               @foreach($categories as $categorie)
                                    <li><a href="#">{{ $categorie->nom }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-9 col-md-7">
                    <div class="product__discount">
                        <div class="section-title product__discount__title">
                            <h2>Promotion</h2>
                        </div>
                        <div class="row">
                            <div class="product__discount__slider owl-carousel">
                                @foreach( $promos as $promo)
                                    <div class="col-lg-4">
                                        <div class="product__discount__item">
                                            <div class="product__discount__item__pic set-bg"
                                                 data-setbg="{{ $promo->imageproduit() }}">
                                                <div class="product__discount__percent">-{{ $promo->promo }}%</div>
                                                <ul class="product__item__pic__hover">
                                                    <li><a href="{{ route('detail',$promo->id) }}"><i class="fa fa-heart"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="product__discount__item__text">
                                                <span>{{ $promo->titre }}</span>
                                                <h5><a href="{{ route('detail',$promo->id) }}"> Profiter</a></h5>
                                                <div class="product__item__price">{{ $promo->prixpromo }} <span>{{ $promo->prix }}</span></div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="filter__item">
                    <div class="row">


                    </div>
                </div>
                <div class="row">
                    @foreach($produits as $produit)
                        <div class="col-lg-2 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="{{ asset($produit->imageproduit()) }}">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="{{ route('detail',$produit->id) }}"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">{{ $produit->titre }}</a></h6>
                                    <h5>{{ $produit->prix }} CFA</h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="product__pagination">
                    <a href="#">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>




 @endsection
