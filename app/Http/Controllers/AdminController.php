<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        if ($request->login == 'hajime89' && $request->password == "qwerty"){
            return redirect(route('admin.panel'));
        }
        return redirect()->back()->with('error', "Неверный логин или пароль");
    }
}
