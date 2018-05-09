<div class="col-sm-2">
<div class="col-sm-12">
    @foreach($archives as $stats)
        <li>
            <a href="/?month={{$stats['month']}}&year={{$stats['year']}}">{{$stats['month'] .' ' . $stats['year']}}</a>
        </li>
        @endforeach
</div>
    <h4 class="col-sm-12">Tags</h4>
<div class="col-sm-12">
    @foreach($tags as $tag)
        <li>
            <a href="/posts/tags/{{$tag}}">{{$tag}}</a>
        </li>
    @endforeach
</div>
</div>
