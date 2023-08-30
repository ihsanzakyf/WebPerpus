<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Book;
use App\Models\RentLogs;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class BookRentController extends Controller
{
    public function index()
    {
        $user = User::where('id', '!=', 1)->where('status', '!=', 'inactive')->get();
        $books = Book::all();
        return  view('/books-rent', [
            'user' => $user,
            'books' => $books
        ]);
    }

    public function store(Request $request)
    {
        $request['rent_date'] = Carbon::now()->toDateString();
        $request['return_date'] = Carbon::now()->addDay(3)->toDateString();

        $books = Book::findOrFail($request->book_id)->only('status');

        if ($books['status'] != 'in stock') {
            Session::flash('message', 'Tidak bisa, lagi gak bersedia !');
            Session::flash('alert-class', 'alert-danger');
            return redirect('/books-rent');
        } else {
            $count =  RentLogs::where('user_id', $request->user_id)->where('actual_return_date', null)->count();
            if ($count >= 3) {
                Session::flash('message', 'Peminjam sudah melebihi batas pinjaman !');
                Session::flash('alert-class', 'alert-danger');
                return redirect('/books-rent');
            } else {
                try {
                    DB::beginTransaction();
                    RentLogs::create($request->all());
                    $book = Book::findOrFail($request->book_id);
                    $book->status = 'not available';
                    $book->save();
                    DB::commit();

                    Session::flash('berhasil', 'Berhasil pinjam!');
                    Session::flash('alert-class', 'alert-success');
                    return redirect('/books-rent');
                } catch (\Throwable $th) {
                    DB::rollBack();
                }
            }
        }
    }

    public function returnBook()
    {
        $user = User::where('id', '!=', 1)->where('status', '!=', 'inactive')->get();
        $books = Book::all();
        return view('/books-return', [
            'user' => $user,
            'books' => $books
        ]);
    }

    public function pengembalian(Request $request)
    {
        $rent = RentLogs::where('user_id', $request->user_id)->where('book_id', $request->book_id)->where('actual_return_date', null);
        $rentData = $rent->first();
        $countData = $rent->count();
        if ($countData == 1) {
            // Mengembalikan buku
            $rentData->actual_return_date = Carbon::now()->toDateString();
            $rentData->save();
            // Mengubah status buku menjadi 'in stock'
            $book = Book::find($request->book_id);
            $book->status = 'in stock';
            $book->save();
            Session::flash('message', 'Berhasil mengembalikan buku');
            Session::flash('alert-class', 'alert-success');
            return redirect('/books-return');
        } else {
            Session::flash('message', 'Ada Kesalahan Saat Process');
            Session::flash('alert-class', 'alert-danger');
            return redirect('/books-return');
        }
    }
}
