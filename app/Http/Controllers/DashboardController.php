<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use App\Models\Category;
use App\Models\RentLogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $rentlog = RentLogs::with(['user', 'book'])->get();
        $jumlahbuku = Book::count();
        $kategori   = Category::count();
        $user       = User::count();
        return view('/dashboard', [
            'jumlahbuku' => $jumlahbuku,
            'kategori'   => $kategori,
            'user'       => $user,
            'rentlog'    => $rentlog
        ]);
    }
}
