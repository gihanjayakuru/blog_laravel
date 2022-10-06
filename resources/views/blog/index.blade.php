@extends('layouts.app')

@section('content')

@if (session()->has('message'))
    <div class="  ">
        <p class="  ">
            {{ session()->get('message') }}
        </p>
    </div>
@endif


@if (Auth::check())
    <div class="btn btn-primary btn-lg btn-block">
        <a href="/blog/create"
        class="btn btn-primary btn-lg btn-block">
        Create Post</a>
    </div>
@endif



<div class="row">
    @foreach ($posts as $post)
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
                    @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                        <span class="">
                            <a href="/blog/{{ $post->slug }}/edit"
                                class="col-sm-3 col-sm-offset-3 btn btn-success">
                            Edit
                            </a>
                        </span>
                        
                        <span class="p-2">
                            <form action="/blog/{{ $post->slug }}"
                                method="POST">
                                @csrf
                                @method('delete')
                            
                                <button class="col-sm-3 col-sm-offset-3 btn btn-danger"
                                    type="submit">
                                    Delete
                                </button>
                            
                            </form>
                        </span>


                    @endif
                </div>
            </div>
        </div>
    @endforeach
</div>





{{-- </div> --}}
{{-- </div> --}}



@endsection