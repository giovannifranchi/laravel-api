<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCommentRequest;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(StoreCommentRequest $request){

        $data = $request->validated();

        $comment = new Comment();
        $comment->author = $data['author'];
        $comment->content = $data['content'];
        $comment->project_id = $data['project_id'];
        $comment->save();
        return $comment;
    }
}
