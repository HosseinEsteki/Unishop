<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $user = $request->user();
        $comment = new Comment();
        $comment->title = $request->title;
        $comment->description = $request->description;
        $comment->user_id = $user->id;
        $comment->product_id = $request->product_id;
        $comment->create();
        return back();
    }
}
