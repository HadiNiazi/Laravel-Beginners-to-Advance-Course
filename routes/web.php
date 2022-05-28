<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Models\Image;
use App\Models\Post;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

// Route::get('/greeting', function() {
//     return 'Hello World';
// });

// Route::get('/greeting/{id}', function($id) {
//     return 'User id is ' .$id;
// });

// Route::get('user/{name}', function($name) {
//     return 'Test';
// })->where('name', '[A-Za-z]+');

// Route::get('user/{id}/{name}', function($id) {
//     return 'Test';
// })->where(['id' => '[0-9]+', 'name' => '[A-Z]+']);

// Route::get('/', function() {
//     return 'Home';
// });

// Route::redirect('/', 'login');

// Route::get('/login', function() {
//     return '<a href="/about">About</a>';
// });

// Route::get('about', function() {
//     return 'About page';
// });


// Route::view('greeting', 'greeting');

// Route::get('greeting', function() {
//     $name = 'Hadayat Niazi';

//     return View::make('greeting', ['name' => $name]);
//     // return view('greeting')->with('name', $name);
// });

// Route::get('/test', function() {
//     return view('admin.profile');
// });

// Route::get('users', [UserController::class, 'index']);
// Route::get('users/show/{id}', [UserController::class, 'show']);

// Route::resource('posts', PostController::class);


// Route::view('user', 'user');
// Route::view('post', 'post');

// Route::get('/connection', function() {
//     try {
//         DB::connection()->getPdo();
//         return 'connected successfully';
//     }
//     catch(\Exception $ex)
//     {
//         dd($ex->getMessage());
//     }
// });

Route::get('test', function() {

    // Post::create([
    //     'title' => 'PHP 8',
    //     'description' => 'PHP 8 is very cool',
    //     'is_publish' => false,
    //     'is_active' => false
    // ]);

    // $post = Post::where(['title' => 'Laravel 9', 'description' => 'Laravel 9 is very cool'])->get();
    // if(! $post){
    //     return "Post not found";
    // }
    // return $post;

    // return 'Inserted successfully';

    // $post = Post::where('title', 'Laravel 9.1.3')->first();

    // $post = Post::find(2);
    // if(! $post){
    //     return "Post not found";
    // }
    // $post->update([
    //     'title' => 'Laravel 9.1.3',
    //     'description' => 'Laravel 9.1.3 Desc'
    // ]);

    // return 'Updated successfully';


    // $post = Post::find(2);
    // if(! $post){
    //     echo "Post not found";
    // }
    // else {
    //     $post->delete();
    //     return 'Deleted successfully';
    // }
});



// Route::get('posts', [PostController::class, 'index']);
// Route::get('posts/store', [PostController::class, 'store']);
// Route::get('posts/update', [PostController::class, 'update']);
// Route::get('posts/destroy', [PostController::class, 'destroy']);


// Route::get('/admin/test-11', function() {
//  return 'test 1';
// })->name('test.1');

// Route::get('/test-2', function() {
//     return 'test 2';
// })->name('test.2');

// Route::get('test', function(Request $request) {

// Session::flash('login', 'You are logged in');

// // Session::flush();

// if(Session::has('login')) {
//     return 'session set';
// }
// else
// {
//     return 'not set';
// }

// });



Route::resource('posts', PostController::class);
// Route::get('posts/soft-delete/{id}', [PostController::class, 'softDelete'])->name('posts.soft-delete');

// Route::get('get/posts', [PostController::class, 'getPosts'])->name('get.posts');

Route::get('test', function() {

    // $user = User::first();
    // return $user->post;

    // $post = Post::first();
    // return $post->user;

    // $user = User::first();
    // return $user->posts; 

    // $post = Post::first();
    // return $post->user;

    // $user = User::first();
    // return $user->post;

    // $user = User::first();
    // return $user->postComment;

    // $user = User::first();
    // return $user->postComments;

    $user = User::first();
    $role = Role::first();

    // return $user->roles()->attach($role);

    // $user->roles()->detach($role);

    // $role->users()->attach($user->id);

    // return $user->roles;

    // $user = User::fphp arirst();

    // $user->roles()->attach([1, 2, 3]);
    
    // $user->roles()->detach([1, 2]);

    // $user->roles()->sync([3]);

    // return 'detached';

    // $user = User::first();
    // return $user->image;

    // $post = Post::first();

    // return $post->image;

    // $image = Image::first();
    // return $image->imageable;

    // $image = Image::find(2);
    // return $image->imageable;

    // $user = User::first();
    // return $user->images;

    // $post = Post::first();

    // return $post->image;

    $post = Post::first();

    return $post->tags;



    
    

});






