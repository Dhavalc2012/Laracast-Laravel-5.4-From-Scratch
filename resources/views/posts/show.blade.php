@extends('layout')

@section('content')
    <div class="col-sm-10">
    <h1 class="col-sm-12">{{$post->title}}</h1>
    <div class="col-sm-12">{{$post->body}}</div>
    <hr>
    <div class="comments col-sm-12">
        <ul class="list-group">
            @foreach($post->comments as $comment)
                <li class="list-group-item">
<strong>{{ $comment->created_at->diffForHumans() }}:</strong> &nbsp;
                    {{$comment->body}}
                </li>
                @endforeach

        </ul>
    </div>
    </div>

    @endsection