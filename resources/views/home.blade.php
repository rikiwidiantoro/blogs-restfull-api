@extends('layouts.app')

@section('isi')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <h2>Halaman Home</h2>
        </div>
    </div>
    <div class="row">
        @foreach($posts as $post)
        <div class="col-md-6">
            <div class="card my-3">
                <img src="#" class="card-img-top" alt="{{ $post->image }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <span><em><a href="#">{{ $post->category->name }}</a></em></span>
                    <p class="card-text">{{ $post->content }}</p>
                    <a href="#" class="btn btn-primary">show detail</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    {{-- <div class="row">
        <div class="col">
            @foreach($posts as $post)
            <article class="border-bottom my-3">
                <h4>{{ $post->title }}</h4>
                <p>kategori : <a href="#">{{ $post->category->name }}</a></p>
                <p>{{ $post->image }}</p>
                <p>{{ $post->content }}</p>
                <a href="#" class="btn btn-secondary btn-sm mb-3">show detail</a>
            </article>
            @endforeach
        </div>
    </div> --}}
</div>
@endsection
