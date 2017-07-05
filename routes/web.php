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

use Illuminate\Http\RedirectResponse;

// Basic Routing

Route::get('/', function () {
    return view('welcome');
});

Route::get('foo', function () {
    return 'Hello World';
//    return ["k1"=>"v1","k2"=>"v2"];
});

// Restfull verbs

$uri = '/bar';
//$callback = function (){
//  return "foo bar forever";
//};

Route::get($uri, function (){
    return "Get";
});
Route::post($uri, function (){
    return "Post";
});
Route::put($uri, function (){
    return "Put";
});
Route::patch($uri, function (){
    return "Patch";
});
Route::delete($uri, function (){
    return "delete";
});
Route::options($uri, function (){
    return "options";
});


Route::get('restfull', function() {
    return view('restfullVerbs.restfull');
});

// clumping verbs together

//Route::match(['get', 'post'], $uri, $callback);

//Route::any($uri, $callback);


// Passing parameters

Route::get('user/{id}', function ($id) {
    return 'User '.$id;
});

Route::get('posts/{post}/comments/{comment}', function ($postId, $commentId) {
    //
    return "$postId : $commentId";
});

// optional parameters

Route::get('username/{name?}', function ($name = null) {
    return $name;
});

// Regular Expression Constraints

Route::get('uservalidate/{name}', function ($name) {
    //
    return $name;
})->where('name', '[A-Za-z]+');

Route::get('userID/{id}', function ($id) {
    //
    return $id;
})->where('id', '[0-9]+');

Route::get('userMulti/{id}/{name}', function ($id, $name) {
    //
    return "$id : $name";
})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

// universal validation

Route::get('dog/{idValid}', function($idValid){
    return $idValid;
});

Route::get('cat/{idValid}', function($idValid){
    return $idValid;
});

// named routes
Route::get('user/profile', function () {
    //
    return "userProfile";
})->name('profile');


Route::get('user/profileRedirect', function () {
    //
    return redirect('bar');
});

// sub Domain

Route::domain('{account}.myapp.com')->group(function () {
    Route::get('user/{id}', function ($account, $id) {
        //
    });
});

// Route Prefixes
Route::prefix('admin')->group(function () {
    Route::get('users', function () {
        // Matches The "/admin/users" URL
        return 'admin users';
    });
    Route::get('administrators', function () {
        // Matches The "/admin/users" URL
        return 'admin admin';
    });
});

Route::get('routeInfo', function(){
    $route = Route::current();
    dd($route);
});




