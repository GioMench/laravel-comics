@extends('layouts.app')

@section('content')
    <!--section-jumbotron-->
    <section class="jumbotron"></section>
    <!--section-card-->
    <section class="container container_card" style="margin-bottom: 40px;">
        <div class="row row-cols-2 row-cols-md-4 row-cols-lg-6 g-5 my-0">
            @foreach ($comics as $comic)
            <div class="col p-3 my-5" >
                <div class="card" style="height:200px;border: none">
                    <img src="{{$comic['thumb']}}" class="card-img-top" alt="..." style="height: 100%; width: 100%;">
                    <div class="card-body" >
                        <h6 class="card-title text-white text-uppercase fw-semibold">{{$comic['title']}}</h6>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <!--section-button-load-more-->
    <section class="container_button text-center">
    <button type="button" class="btn m-5 px-5 text-uppercase fw-bold text-white" style="border-radius: 0;background-color:#0282f9 ">load more</button>
    </section>
    <!--section-bar-shop-->
    <section class="container-fluid bar_shop">
        <div class="container ">
            <ul class="list-unstyled d-flex align-items-center justify-content-between p-4 m-0">
                <li class="text-uppercase text-white fw-light"> <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt=""  class="p-3" style="height: 80px" >digital comics</li>
                <li class="text-uppercase text-white fw-light"> <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt=""  class="p-3" style="height: 80px" >dc merchandise</li>
                <li class="text-uppercase text-white fw-light"> <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt=""  class="p-3" style="height: 80px" >subscription</li>
                <li class="text-uppercase text-white fw-light"> <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt=""  class="p-3" style="height: 80px" >comic shop locator</li>
                <li class="text-uppercase text-white fw-light"> <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt=""  class="p-3" style="height: 60px" >dc power visa</li>
            </ul>
        </div>
    </section>
@endsection