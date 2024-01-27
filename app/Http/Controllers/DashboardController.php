<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Idea;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $show_images_box = true;
        $ideas = Idea::orderBy('created_at', 'DESC');
        $last_three_ideas_comments = Comment::latest()->take(3)->get();
        $last_three_registered_users = User::latest()->take(3)->get();

        if(request()->has('search')){
            $ideas = $ideas->where('content', 'like', '%' . request()->get('search', '') . '%');
        }

        return view('dashboard', [
            'ideas' => $ideas->paginate(5),
            'ideas_comments' => $last_three_ideas_comments,
            'last_three_registered_users' => $last_three_registered_users,
            'show_images_box' =>  $show_images_box,
        ]);
    }
}
