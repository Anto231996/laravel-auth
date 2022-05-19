@extends('layouts.app')

@section('content')
<section class="container pt-5">
    <div class="row">
        @foreach ($posts as $post)
        <div class="items d-flex align-items-center flex-column col-4 mb-4">
            <a href="{{Route('admin.posts.show', $post)}}">
                <img src="{{ $post->image_url }}" alt="{{ $post->author }}</">
            </a>
            <div class="item-description text-center">
                <h2>{{ $post->title }}</h2>
                <h4>{{ $post->author }}</h4>
                <h6>{{ $post->created_at }}</h6>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection