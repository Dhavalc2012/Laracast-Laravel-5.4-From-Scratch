<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;
class CommentController extends Controller
{
    public function store(Post $post){
$this->validate(request(),['body' => 'required|min:2']);
        //Add a comment to a post
        $post->addComment(request('body'));
        return back();
    }
}
