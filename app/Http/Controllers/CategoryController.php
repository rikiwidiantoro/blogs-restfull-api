<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        return view('category.index', [
            'title' => 'Category',
            'categories' => Category::all()
        ]);
    }
    public function create() {
        return view('category.tambah', [
            'title' => 'Category | Tambah'
        ]);
    }
    public function store(Request $request) {
        // dd($request->all());
        // dd($request->except('_token', 'submit'));
        Category::create($request->except(['_token', 'submit']));
        return redirect('/category');
    }
    public function edit($id) {
        // dd($id);
        $datas = Category::find($id);
        // dd($datas);
        return view('category.edit', compact(['datas']), ['title' => 'Category | Edit']);
    }
    public function update($id, Request $request) {
        // dd($id);
        $datas = Category::find($id);
        // dd($datas);
        $datas->update($request->except(['_token', 'submit']));
        return redirect('/category');
    }
    public function destroy($id) {
        $datas = Category::find($id);
        $datas->delete();
        return redirect('/category');
    }
}
