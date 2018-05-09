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
     <div class="col-sm-12">
         <h5 class="col-sm-12">Tags</h5>
         @if(count($post->tags))
             <ul>
                 @foreach($post->tags as $tag)
                     <li><A href="/posts/tags/{{$tag->name}}">{{$tag->name}}</A></li>
                     @endforeach
             </ul>
             @endif
     </div>
        <!-- Add Comment Area-->
        <div class="col-sm-12">
            <div class="card-block">
                <form action="/posts/{{$post->id}}/comments" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <textarea name="body" id="body" placeholder="Your comment here" required rows="10" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Add Comment</button>
                    </div>
                </form>
            </div>
@include('layouts.errors')
        </div>
    </div>

    @endsection