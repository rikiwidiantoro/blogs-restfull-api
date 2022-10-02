@extends('layouts.app')

@section('isi')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <h2>Halaman Post Detail</h2>
        </div>
    </div>
    {{-- <div class="row">
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
    </div> --}}
    <div class="row">
        <div class="col">
            {{-- @foreach($posts as $post) --}}
            <article class="border-bottom my-3">
                <h4>{{ $detail->title }}</h4>
                <p>Author by <span>{{ $detail->user->name }}</span> | <span>category : <a href="#"><em>{{ $detail->category->name }}</em></a></span></p>
                <p>{{ $detail->image }}</p>
                <p>{{ $detail->content }}</p>
                {{-- <a href="#" class="btn btn-secondary btn-sm mb-3">show detail</a> --}}
            </article>
            {{-- @endforeach --}}
            <a href="/home">back to home</a>
        </div>
    </div>
</div>
@endsection