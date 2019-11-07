<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', function (){
   return view('about');
});


Route::get('/test', function (){
    $name = request ('name');

    return view('test', [
        'name' => $name
    ]);
});

Route::get('/posts/{post}','PostController@show');

Route::get('/aboutus', function (){
        return view('about', [
            'article'=> App\Article::take(3)->latest()->get()
    ]);
});

// / GET/articles (get all articles)
Route::get('/articles', 'ArticlesController@index');

// / GET/articles/:id (get one specific articles)
Route::get('/articles/{article}', 'ArticlesController@show');
Route::get('/articles/{article}/edit','ArticlesController@edit');
Route::get('/articles/{article}','ArticlesController@update');


// GET, POST, PUT, PATCH, DELETE
// POST / articles (create the new articles)
// PUT / articles/:id (update the articles)
// PATCH / articles/:id
// DELETE /articles/:id (delete the specific article)
