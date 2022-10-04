@extends('layouts.app')

@section('content')

@foreach ($posts as $post)
<div class="col-md-7 blogShort">
    <h1>{{ $post->title }}</h1>
    <img class="card-img-top" src="https://dummyimage.com/850x350/dee2e6/6c757d.jpg" alt="..." />
    
        <span class="text-bold">by {{ $post->user->name }} Created On {{ date('jS M Y', strtotime($post->updated_at)) }}</a></em>
    <article><p>
        {{ $post->description }}    
        </p></article>
    <a class="btn btn-success" href="/blog/{{ $post->slug }}">READ MORE</a> 
</div>

@endforeach




@endsection