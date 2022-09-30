@extends('layouts.app')

@section('isi')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <h1>Halaman Posts</h1>
        </div>
    </div>
    <div class="row">
      <div class="col">
        @foreach($posts as $post)
        <article class="border-bottom my-4">
          <h4>{{ $post->title }}</h4>
          <p>{{ $post->image }}</p>
          <p>{{ $post->content }}</p>
        </article>
        @endforeach
      </div>
    </div>
</div>
@endsection
