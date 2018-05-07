@extends('layout')

@section('content')
    <div class="col-sm-10">
    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">My blog</h1>
            <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
            <p>
                <a href="#" class="btn btn-primary my-2">Main call to action</a>
                <a href="#" class="btn btn-secondary my-2">Secondary action</a>
            </p>
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row">
                @foreach($posts as $post)
@include('posts.post')
                    @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection


