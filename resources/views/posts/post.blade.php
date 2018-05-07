<div class="col-md-4">
    <div class="card mb-4 box-shadow">
        <div class="card-body">
            <div class="card-title">
                <a href="/posts/{{$post->id}}">
                <h4>{{$post->title}}</h4>
                </a>
            </div>
            <p class="card-text">{{ str_limit($post->body, $limit = 150, $end = '...') }}
            </p>
            <small class="text-muted">{{$post->created_at->toFormattedDateString()}}</small>
        </div>
    </div>
</div>