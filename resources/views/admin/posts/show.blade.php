@extends('layouts.app')

@section('content')
<section class="container pt-5">
    <div class="row">
        <div class="items col col-md-6 col-lg-4 mb-4">
            <img src="{{ $post->image_url }}" alt="">
            <div class="item-description text-center">
                <h3>{{ $post->title }}</h3>
                <h4>{{ $post->author }}</h4>
                <h5>{{ $post->created_at }}</h5>
            </div>
        </div>
    </div>
</section>
@endsection