<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Comment;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'min:2', 'max:30'],
            'email' => ['required', 'string', 'email', 'max:100'],
            'comment' => ['required', 'string', 'min:10']
        ]);
        if ($validator->fails())
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();

        Comment::create($request->all());
        return redirect()->back()->with('success', 'Отзыв успешно добавлен');
    }
}
