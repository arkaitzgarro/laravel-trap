<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function show(string $id): View
    {
        $user = DB::table('users')
            ->whereRaw('id = ' . $id)
            ->get();
            
        return view('user.profile', [
            'user' => $user
        ]);
    }
}
