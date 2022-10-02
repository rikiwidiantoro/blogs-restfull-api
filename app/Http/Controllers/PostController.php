<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        return view('post.index', [
            'title' => 'Posts',
            'posts' => Post::all()
        ]);
    }
    public function create() {
        return view('post.tambah', [
            'title' => 'Posts | Tambah'
        ]);
    }
    public function store(Request $request) {
        // dd($request->all());
        // dd($request->except('_token', 'submit'));
        Post::create($request->except(['_token', 'submit']));
        return redirect('/posts');
    }
    public function edit($id) {
        // dd($id);
        $datas = Post::find($id);
        // dd($datas);
        return view('post.edit', compact(['datas']), ['title' => 'Posts | Edit']);
    }
    public function update($id, Request $request) {
        // dd($id);
        $datas = Post::find($id);
        // dd($datas);
        $datas->update($request->except(['_token', 'submit']));
        return redirect('/posts');
    }
    public function destroy($id) {
        $datas = Post::find($id);
        $datas->delete();
        return redirect('/posts');
    }
}
