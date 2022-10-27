<?php

use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PostController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Models\Category;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('newsletter', NewsletterController::class );
Route::get('/', [PostController::class, 'index']);

Route::get('posts/{post}', [PostController::class, 'show']);
Route::get('posts/{post}/comments', [CommentController::class,'store']);
Route::get('/create', [PostController::class, 'create']);;
Route::post('/createPost', [PostController::class, 'store']);;
Route::get('/posts', [AdminPostController::class, 'index']);
Route::get('/about',function (){
    return view('pages.about');
});
Route::get('posts/{post}/edit', [AdminPostController::class, 'edit']);
Route::patch('{post}/edit', [AdminPostController::class, 'update']);
Route::delete('admin/posts/{post}', [AdminPostController::class, 'destroy']);

Route::get('categories/{category:slug}', fn(Category $category) => view('posts',[
    'posts' => $category->posts,
    'currentCategory' => $category,
    'categories' => Category::all()
]));
Route::get('authors/{author:username}', function (User $author) {

    return view('posts', [
        'posts' => $author->posts,
        'comments' => $author->posts,

    ]);
});




Route::get('/dashboard', fn() => view('dashboard'))->middleware(['auth'])->name('dashboard');




require __DIR__.'/auth.php';
