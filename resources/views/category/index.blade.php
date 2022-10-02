@extends('layouts.app')

@section('isi')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <h2>Halaman Category</h2>
        </div>
    </div>
    <div class="row justify-content-center mt-3">
      <div class="col-md-10">
        <a href="/category/create">
          <button type="button" class="btn btn-primary btn-sm">Tambah Category</button>
        </a>
        <table class="table mt-2">
          <tr>
            <th>Id</th>
            <th>Category Name</th>
            <th>User Id</th>
            <th colspan="2">Aksi</th>
          </tr>
          @foreach($categories as $category)
          <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->name }}</td>
            <td>{{ $category->user_id }}</td>
            <td>
              <a href="/category/<?=$category->id?>/edit">
                <button type="button" class="btn btn-warning btn-sm">Edit</button>
              </a>
            </td>
            <td>
              <form action="/category/<?=$category->id?>" method="POST">
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
