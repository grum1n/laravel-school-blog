<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Idea;
use App\Models\User;
use Illuminate\Http\Request;

class IdeaController extends Controller
{

    public function show(Idea $idea)
    {
        $show_images_box = false;
        $last_three_ideas_comments = Comment::latest()->take(3)->get();
        $last_three_registered_users = User::latest()->take(3)->get();
        
        return view('ideas.show', [
            'idea' => $idea,
            'ideas_comments' => $last_three_ideas_comments,
            'last_three_registered_users' => $last_three_registered_users,
            'show_images_box' =>  $show_images_box,
        ]);
    }

    public function edit(Idea $idea)
    {
        if(auth()->id() !== $idea->user_id){
            abort(404);
        }
        
        return view('ideas.edit', compact('idea'));
    }

    public function store()
    {
        $validated = request()->validate([
            'content' => 'required|min:2|max:240',
        ]);

        $validated['user_id'] = auth()->id();
       
        // Idea::create([
        //     'content' => $validated['content'],
        // ]);

        Idea::create($validated);

        return redirect()->route('dashboard')->with('success', 'Idea created successfully!');

    }

    public function update(Idea $idea)
    {
        if(auth()->id() !== $idea->user_id){
            abort(404);
        }

        $validated = request()->validate([
            'content' => 'required|min:2|max:240',
        ]);
        
        $idea->update($validated);

        return redirect()->route('ideas.show', $idea->id)->with('success', 'Idea updated successfully!');
    }

    public function destroy(Idea $idea)
    {
        if(auth()->id() !== $idea->user_id){
            abort(404);
        }

        $idea->delete();

        return redirect()->route('dashboard')->with('success', 'Idea deleted successfully!');
    }
}
