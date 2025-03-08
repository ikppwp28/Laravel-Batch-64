<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, $book_id)
    {
        $request->validate([
            'content' => 'required',
        ]);

        $userId = Auth::id();

        $comment = new Comment;
        $comment->content = $request->input('content');
        $comment->book_id = $book_id;
        $comment->user_id = $userId;

        $comment->save();

        return redirect('/books/' . $book_id);
    }
}
