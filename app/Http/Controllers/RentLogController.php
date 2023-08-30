<?php

namespace App\Http\Controllers;

use App\Models\RentLogs;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RentLogController extends Controller
{
    public function rentlog()
    {
        $rentlog = RentLogs::with(['user', 'book'])->get();
        return view('/rentlog', [
            'rentlog' => $rentlog,
        ]);
    }
}
