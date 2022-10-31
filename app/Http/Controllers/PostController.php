<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;
class PostController extends Controller
{
    public function index(){

        return view('posts', [

            'posts' =>  Post::latest()->filter(request(['search','category', 'author']))->paginate(10),
            'categories' => Category::all(),
            'users' => User::all(),

        ]);
    }

    public function show(Post $post)   {
        return view('post', [
            'post' => $post,
            'categories' => Category::all(),
            'comments' => Comment::all()

        ]);
    }

   public function create()

   {

       return view('posts.create',[
           'categories' => Category::all(),
       ]);
   }
    public function store(StorePostRequest $request)

    {

        $request->validated();



        if($request->hasFile('image_url')){
            $image = $request->file('image_url')->store('image_url','public');
            $file = $request->file('image_url');
            $size = Storage::size($image);
            $extension = $file->getClientOriginalExtension();
        }
        Post::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'user_id' => Auth::user()->id,
//            'excerpt' => $request->excerpt,
            'category_id' => $request->category_id,
            'body' => $request->body,
            'image_url' => $image,
            'image_extension' => $extension,
        ]);


        return redirect('/')->with('success', 'Post created successfully');
    }


}
