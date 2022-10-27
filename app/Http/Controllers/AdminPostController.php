<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
class AdminPostController extends Controller
{
    public function index()
    {


        return view('posts.posts',[
            'posts' => Post::paginate(20)
        ]);
    }

    public function edit(Post $post)
    {
        return view('posts.edit',[
            'post' => $post
        ]);
    }

    public function update( Post $post)
    {

        $attributes = request()->validate([
            'title' => 'required',
            'image_url' => 'image',

            'body' => 'required',
            'category_id' => ['required', Rule::exists('categories', 'id')]
        ]);

        if (isset($attributes['image_url'])) {
            $attributes['image_url'] = request()->file('image_url')->store('thumbnails');
        }

        $post->update($attributes);

        return back()->with('success', 'Post Updated!');
    }
    public function destroy(Post $post)
    {
        $post->delete();

        return back()->with('message', 'Post Deleted!');
    }
}
