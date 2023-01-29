<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
    public function register(Request $request)
    {
        $user = User::create([
            'login' => $request->login,
            'password' => Hash::make($request->password),
        ]);
        if ($user)
            return redirect(route('admin.login'));
        return redirect()->back();
    }

    public function auth(Request $request)
    {
        $formFields = $request->only(['login', 'password']);

        if (Auth::attempt($formFields)){
            return redirect(route('admin.panel'));
        }



//        $user = User::query()->first();
//
//        $formFields = ['login' => $request->login, 'password' => $request->password];
//
//        if (Auth::attempt($formFields)){
//            return redirect(route('admin.panel'));
//        }
//        var_dump($user->password);
//        var_dump($formFields['password']);
//        dd(Hash::check($request->password, $user->password));
//        dd(Auth::attempt($formFields));
//        dd($formFields);
//        return redirect()->back();
    }
}
