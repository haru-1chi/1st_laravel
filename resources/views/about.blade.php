@extends('layout')
@section('title', 'about')
@section('content')
    <h2>About</h2>
    <p>ผู้จัดทำ : {{$name}}</p>
    <p>เมื่อ : {{$date}}</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt sint explicabo, ratione ab unde eum, minima
        reprehenderit voluptatibus aliquid, ullam obcaecati mollitia soluta modi quos ipsa quis laudantium nam nemo?
    </p>
@endsection
