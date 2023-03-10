<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
use App\Models\Post;


class PostCommentController extends Controller
{
    public function store($community_slug, Post $post)
    {
        $post->comments()->create([
            'user_id' => auth()->id(),
            'content' => Request::input('content')
        ]);

        return back();
    }
}
