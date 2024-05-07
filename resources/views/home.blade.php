@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            @foreach ($comics as $comic )
            <div class="col">
                {{$comic['title']}}
            </div>
            @endforeach
        </div>
    </div>
@endsection