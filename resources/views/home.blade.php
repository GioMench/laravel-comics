@extends('layouts.app')

@section('content')

    <div class="container container_card">
        <div class="row row-cols-6 g-5 my-4">
            @foreach ($comics as $comic)
            <div class="col p-3 my-5">
                <div class="card" style="height:200px;border: none">
                    <img src="{{$comic['thumb']}}" class="card-img-top" alt="..." style="height: 100%; width: 100%;">
                    <div class="card-body" class="margin-bottom: 100px">
                        <h6 class="card-title text-white text-uppercase">{{$comic['title']}}</h6>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection