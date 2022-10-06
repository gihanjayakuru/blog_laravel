@extends('layouts.app')

@section('content')

<div class="bg-dark text-sm-center text-white">
    <div class="">
        <h1 class="">
            Create Post
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

<div class="bg-dark">

<div class=" p-5 container-lg bg-dark bg-gradient">
    <form
    action="/blog"
    method="POST"
    enctype="multipart/form-data">
    @csrf

    <input 
        type="text"
        name="title"
        placeholder="Title..."
        class="mb-4 form-control">
    
        <textarea
            name="description"
            placeholder="Description..."
            class="p-5 mb-4 form-control"></textarea>


            <div class=" mb-4 container-sm">
                <div class="bg-success text-white " >               
                    Select a file :
                        <input 
                        type="file"
                        name="image"
                        >
                </div>
            </div>

            <button 
            type="submit" 
            class=" btn btn-lg btn-primary btn-block  ">
            Submit Post
        </button>
</form>
</div>

</div>

@endsection