<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();

        return view('books', [
            'books' => $books
        ]);
    }

    public function add()
    {
        $categories = Category::all();
        return view('books-add', [
            'categories' => $categories
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'book_code' => 'required|unique:books',
            'title' => 'required'
        ], [
            'book_code.required' => 'Kode buku wajib diisi !',
            'book_code.unique' => 'Kode tidak boleh sama !',
            'title.required' => 'Judul wajib diisi !',
        ]);

        $newName = '';
        if ($request->file('image')) {
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->title . '-' . now()->timestamp . '.' . $extension;
            $request->file('image')->storeAs('cover', $newName);
        }

        $request['cover'] = $newName;
        $books = Book::create($request->all());
        $books->categories()->sync($request->categories);
        return redirect('books')->with('status', 'Buku Berhasil Ditambahkan !');
    }

    public function edit($slug)
    {
        $books = Book::where('slug', $slug)->first();
        $categories = Category::all();
        return view('/books-edit', [
            'categories' => $categories,
            'books' => $books
        ]);
    }

    public function update(Request $request, $slug)
    {
        if ($request->file('image')) {
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->title . '-' . now()->timestamp . '.' . $extension;
            $request->file('image')->storeAs('cover', $newName);
            $request['cover'] = $newName;
        }

        $books = Book::where('slug', $slug)->first();
        $books->update($request->all());

        if ($request->categories) {
            $books->categories()->sync($request->categories);
        }

        return redirect('/books')->with('update', 'Update Kategori berhasil!');
    }

    public function delete($slug)
    {
        $books = Book::where('slug', $slug)->first();
        return view('/books-delete', [
            'books' => $books
        ]);
    }

    public function destroy($slug)
    {
        $books = Book::where('slug', $slug)->first();
        $books->delete();
        return redirect('/books')->with('hapus', 'Data berhasil dihapus');
    }

    public function deleted()
    {
        $delBook = Book::onlyTrashed()->get();
        return view('/deleted-book', [
            'delBook' => $delBook
        ]);
    }

    public function restore($slug)
    {
        $books = Book::withTrashed()->where('slug', $slug)->first();
        $books->restore();
        return redirect('books')->with('restore', 'Buku berhasil dikembalikan');
    }
}
