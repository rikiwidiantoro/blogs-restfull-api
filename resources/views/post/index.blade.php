@extends('layouts.app')

@section('isi')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <h2>Halaman Posts</h2>
        </div>
    </div>
    <div class="row justify-content-center mt-3">
      <div class="col-md-10">
        <a href="/posts/create">
          <button type="button" class="btn btn-primary btn-sm">Tambah Post</button>
        </a>
        <table class="table mt-2">
          <tr>
            <th>Id</th>
            <th>Post Title</th>
            <th>Post Image</th>
            <th colspan="2">Aksi</th>
          </tr>
          @foreach($posts as $post)
          <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->image }}</td>
            <td>
              <a href="/posts/<?=$post->id?>/edit">
                <button type="button" class="btn btn-warning btn-sm">Edit</button>
              </a>
            </td>
            <td>
              <form action="/posts/<?=$post->id?>" method="POST">
                @csrf
                @method('delete')
                <input type="submit" class="btn btn-danger btn-sm" value="Hapus">
              </form>
            </td>
          </tr>
          @endforeach
        </table>
        {{-- @foreach($posts as $post)
        <article class="border-bottom my-3">
          <h4>{{ $post->title }}</h4>
          <p>kategori : <a href="#">{{ $post->category->name }}</a></p>
          <p>{{ $post->image }}</p>
          <p>{{ $post->content }}</p>
          <a href="#" class="btn btn-secondary btn-sm mb-3">show detail</a>
        </article>
        @endforeach --}}
      </div>
    </div>
</div>
@endsection
