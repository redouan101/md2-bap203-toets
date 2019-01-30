@extends('layouts.master')



@section('content')

    @foreach($links as $link)
        <p>This is link {{ $link->title }} : The url is {{$link->url}}  The discription of the : {{$link->description}}</p>
    @endforeach

@endsection