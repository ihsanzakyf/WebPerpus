<?php

namespace App\Http\Controllers;

use App\Models\RentLogs;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function profile()
    {
        $rentlog = RentLogs::with(['user', 'book'])->where('user_id', Auth::user()->id)->get();
        return view('/profile', [
            'rentlog' => $rentlog
        ]);
    }

    public function user()
    {
        $user = User::where('role_id', 2)->where('status', 'active')->get();
        return view('/user', [
            'user' => $user,

        ]);
    }

    public function registeredUser()
    {
        $registered = User::where('status', 'inactive')->where('role_id', 2)->get();
        return view('registered-user', [
            'registered' => $registered
        ]);
    }

    public function show($slug)
    {

        $user = User::where('slug', $slug)->first();
        $rentlog = RentLogs::with(['user', 'book'])->where('user_id', $user->id)->get();
        return view('user-detail', [
            'user' => $user,
            'rentlog' => $rentlog
        ]);
    }

    public function approve($slug)
    {
        $user = User::where('slug', $slug)->first();
        $user->status = 'active';
        $user->save();

        return redirect('/user-detail/' . $slug)->with('done', 'User berhasiil di ACC !');
    }

    public function delete($slug)
    {
        $user = User::where('slug', $slug)->first();
        return view('user-delete', [
            'user' => $user
        ]);
    }

    public function destroy($slug)
    {
        $user = User::where('slug', $slug)->first();
        $user->delete();
        return redirect('user')->with('delete', 'User berhasil dihapus');
    }

    public function banned()
    {
        $banneduser = User::onlyTrashed()->get();
        return view('user-banned', [
            'banneduser' => $banneduser
        ]);
    }

    public function restore($slug)
    {
        $user = User::withTrashed()->where('slug', $slug)->first();
        $user->restore();
        return redirect('user')->with('restore', 'User berhasil dikembalikan !');
    }
}
