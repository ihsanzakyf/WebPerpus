<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category()
    {

        $kategori = Category::all();
        return view('category', [
            'kategori' => $kategori,
        ]);
    }

    public function add()
    {
        return view('category-add', []);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:categories'
        ], [
            'name.required' => 'Nama Kategori Wajib Diisi !',
            'name.unique' => 'Nama Kategori Tidak Boleh Sama !',
        ]);

        $kategori = Category::create($request->all());
        return redirect('category')->with('tambah', 'Kategori baru ditambahkan !');
    }

    public function edit($slug)
    {
        $category = Category::where('slug', $slug)->first();
        return view('/category-edit', [
            'category' => $category
        ]);
    }

    public function update(Request $request, $slug)
    {
        $validated = $request->validate([
            'name' => 'required|unique:categories'
        ]);

        $category = Category::where('slug', $slug)->first();
        $category->slug = null;
        $category->update($request->all());
        return redirect('category')->with('update', 'Update Kategori berhasil!');
    }

    public function delete($slug)
    {
        // $category = Category::where('slug', $slug)->first();
        // $category->delete();
        // return redirect('category')->with('delete', 'Hapus Kategori berhasil!');

        $category = Category::where('slug', $slug)->first();
        return view('/category-delete', [
            'category' => $category
        ]);
    }

    public function destroy($slug)
    {
        $category = Category::where('slug', $slug)->first();

        if ($category) {
            $category->delete();
            return redirect('/category')->with('hapus', 'Data berhasil dihapus');
        } else {
            return redirect('/category')->with('error', 'Data kategori tidak ditemukan');
        }
    }


    public function deleted()
    {
        $deleted = Category::onlyTrashed()->get();

        return view('deleted-list', [
            'deleted' => $deleted
        ]);
    }

    public function restore($slug)
    {
        $category = Category::withTrashed()->where('slug', $slug)->first();
        $category->restore();
        return redirect('/category')->with('restore', 'Data berhasil dikembalikan');
    }
}
