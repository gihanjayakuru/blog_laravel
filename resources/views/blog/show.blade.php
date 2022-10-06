@extends('layouts.app')

@section('content')

<div class="">
    <div class="">
        <h1 class="">
            {{ $post->title }}
        </h1>
    </div>
</div>

<span class="">
    <div class=" ">
        <img class="rounded mx-auto d-block "
        
        src="{{ asset('images/' .$post->image_path) }}"
        alt="Chania" width="460" height="345" />
    </div>
</span>


<div class="text-center">
<span class="  ">  
    By <span class="   ">
        {{ $post->user->name }}
    </span>, Created On {{ date('jS M Y', strtotime($post->updated_at)) }}
</span>
<p class="   ">
   {{  ($post->description) }}
   {{-- {{  substr($post->description, 0,  120) }}  this is use to litmit output srting --}}
</p>
</div>



@endsection