@extends('layout')

@section('content')
    <div class="col-sm-10">
    <h1 class="col-sm-12">{{$post->title}}</h1>
    <div class="col-sm-12">{{$post->body}}</div>
    </div>

    @endsection