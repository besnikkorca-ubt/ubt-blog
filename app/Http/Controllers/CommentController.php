<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store (Post $post) {
        $post->comments()->create([
            'user_id' => 1,
            'body' => request('body')
        ]);

        return back();
    }
}
