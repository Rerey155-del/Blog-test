<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    public function user()
    {
        $users = User::all();
        return view('admin.pengguna', compact('users'));
    }
}
