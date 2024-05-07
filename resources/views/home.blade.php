@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="{{$comic['thumb']}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$comic['title']}}</h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection