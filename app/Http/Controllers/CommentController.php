<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Idea;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Idea $idea)
    {
        $validated = request()->validate([
            'content' => 'required|min:2|max:240',
        ]);

        $userID = auth()->id();
       
        Comment::create([
            'idea_id' => $idea->id,
            'content' => $validated['content'],
            'user_id' => $userID,
        ]);

    //    $comment = new Comment();
    //    $comment->idea_id = $idea->id;
    //     //    $comment->content = request()->get('content');
    //     //    $comment->content = request()->content;
    //    $comment->content = request('content');
    //    $comment->save();

       return redirect()->route('ideas.show', $idea->id)->with('success', 'Comment posted successfully !');
    }
}
