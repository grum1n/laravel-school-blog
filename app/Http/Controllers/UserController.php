<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Image;

class UserController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        $ideas = $user->ideas()->paginate(5);
        return view('users.show', compact('user', 'ideas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(User $user)
    {
        $WIDTH = 200;
        $THUMBNAIL_WIDTH = 30;

        $validated = request()->validate(
            [
                'name' => 'required|min:3|max:40',
                'email' => 'required|email',
                'bio' => 'nullable|min:2|max:255',
                'image' => 'image',
            ]
        );

        // if(request()->has('image')){
        //     $imagePath = request()->file('image')->store('profile', 'public');
        //     $validated['image'] = $imagePath;

        //     Storage::disk('public')->delete($user->image ?? '');
        // }

        if (request()->has('image')) {
            $image = request()->file('image');
            $image_name = time().'.'.$image->getClientOriginalExtension();
            $image->move(\public_path('images/profile/'), $image_name);
            $validated['image'] = $image_name;
        }

        $user->update($validated);

        return redirect()->route('profile')->with('success', 'Profile updated successfully!');
    }

    public function profile()
    {
        return $this->show(auth()->user());
    }
}
