<?php

use App\Models\Article;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Support\Facades\Route;

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

Route::get('/user/{user}', function (User $user) {

   // dd($user);
    //step 3
    // $user->loadCount([
    //     'articles' => fn ($query) => $query->Published(),
    //     'comments',
    //     'comments as comments_deleted_count' => fn ($query) => $query->onlyTrashed()
    // ])
    //     ->loadSum('articles', 'votes');


     //step 2
    // $user = User::withCount([
    //     'articles' => fn ($query) => $query->Published(),
    //     'comments',
    //     'comments as comments_deleted_count' => fn ($query) => $query->onlyTrashed()
    // ])
    //     ->withSum('articles', 'votes')
    //     ->find(1);

    // dd($user);
      //step 1
 // dd(Article::published()->get());
    // $user = User::withCount(['articles'=>function($query){
    //     $query->Published();
    // }])->find(1);

    // $user = User::withCount(['articles'=>fn($query) => $query->Published()])->find(1);



    return view('welcome', [
        'user' => $user
    ]);
});
