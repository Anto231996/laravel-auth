@extends('layouts.app')

@section('content')
<section class="container pt-5">
    <div class="row">
        @foreach ($posts as $post)
        <div class="items col col-md-6 col-lg-4 mb-4">
            <a href="{{Route('admin.posts.show', $post)}}">
                <img src="{{ $post->image_url }}" alt="">
            </a>
            <div class="item-description text-center">
                <h3>{{ $post->title }}</h3>
                <h4>{{ $post->author }}</h4>
                <h5>{{ $post->created_at }}</h5>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection