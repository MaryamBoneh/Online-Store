<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentContriller extends Controller
{

    function send_comment(Request $request){
        $new_comment = new Comment();
        $user_id = Session::get("user_id");
        $new_comment->user_id = $user_id;
        $new_comment->text = $request["text"];
        $new_comment->product_id = $request["product_id"];
        $new_comment->save();
    }

    function get_all()
    {
        $comments = Comment::all();
        return view("admin.comments", [
            "comments"=>$comments
        ]);
    }
}