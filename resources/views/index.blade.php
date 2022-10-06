@extends('layouts.app')

@section('content')
<!-- Page header with logo and tagline-->
<header class="py-5 bg-light border-bottom mb-4">
    <div class="container">
        <div class="text-center my-5">
            <h1 class="fw-bolder">Welcome to Blog Home!</h1>
            <p class="lead mb-0">A Bootstrap 5 starter layout for your next blog homepage</p>
        </div>
    </div>
</header>

<!-- Related Posts -->

<h3>Related Posts</h3>
<div class="row">
    @foreach ($postz as $post)
        <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="{{ asset('images/' .$post->image_path) }}" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">
                        {{ $post->user->name }}, Created On {{ date('jS M Y', strtotime($post->updated_at)) }}
                        {{ substr($post->description, 0,  220)  }}
                        {{-- {{ Str::limit(strip_tags($post->description), 100, '...') }}</p> --}}
                    </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            {{-- {{ route('post.show', ['slug' => $post->slug]) }} --}}
                            <a href="/blog/{{ $post->slug }}"
                                class="btn btn-sm btn-outline-secondary">Read More
                                →</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

@endsection