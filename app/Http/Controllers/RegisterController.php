<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(Request $request)
    {
        $user = User::create([
            'login' => $request->login,
            'password' => Hash::make($request->password),
        ]);
        if ($user)
            return redirect(route('admin.login'));
        return redirect()->back();
    }
}
