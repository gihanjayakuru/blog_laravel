@extends('layouts.app')

@section('content')

<div class="">
    <div class="">
        <h1 class="">
            Update Post
        </h1>
    </div>
</div>

@if ($errors->any())
    <div class="  ">
        <ul>
            @foreach ($errors as $error)
                <li class="  ">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
    
@endif

<div class="">
    <form 
    action="/blog/{{ $post->slug }}"
    method="POST"
    enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <input 
        type="text"
        name="title"
        value="{{ $post->title }}"
        class="  ">

        <textarea
            name="description"
            placeholder="Description..."
            class="  ">{{ $post->description }}</textarea>



            <button 
            type="submit" 
            class="btn btn-lg btn-primary btn-block">
            Submit Post
        </button>
</form>
</div>



@endsection