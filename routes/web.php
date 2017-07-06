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

Route::get('/', 'Basic\BasicController@basic');

Route::get('foo', 'BasicController@foo');

// Restfull verbs

$uri = '/bar';
//$callback = function (){
//  return "foo bar forever";
//};

Route::get($uri, 'RestfulController@get');
Route::post($uri, 'RestfulController@post');
Route::put($uri, 'RestfulController@put');
Route::patch($uri, 'RestfulController@patch');
Route::delete($uri, 'RestfulController@delete');
Route::options($uri, 'RestfulController@options');


Route::get('restfull', 'RestfulController@index');

// clumping verbs together

//Route::match(['get', 'post'], $uri, $callback);

//Route::any($uri, $callback);


// Passing parameters

Route::get('user/{id}', 'UserController@show');

Route::get('posts/{post}/comments/{comment}', 'UserController@postComments');

// optional parameters

Route::get('username/{name?}', 'UsernameController');


// resources
Route::get(     '/photos',               'PhotoController@index');
Route::get(     '/photos/create',        'PhotoController@create');
Route::post(    '/photos',               'PhotoController@store');
Route::get(     '/photos/{photo}',       'PhotoController@show');
Route::get(     '/photos/{photo}/edit',  'PhotoController@edit');
Route::put(     '/photos/{photo}',       'PhotoController@update');
Route::delete(  '/photos/{photo}',       'PhotoController@destroy');

Route::resource('photos', 'PhotoController');

// only certain methods
Route::resource('photo', 'PhotoController', ['only' => [
    'index', 'show'
]]);

Route::resource('photo', 'PhotoController', ['except' => [
    'create', 'store', 'update', 'destroy'
]]);

// change route names
Route::resource('photo', 'PhotoController', ['names' => [
    'create' => 'photo.build'
]]);

// change parameter names
Route::resource('user', 'AdminUserController', ['parameters' => [
    'user' => 'admin_user'
]]);

// change uri verbs


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
    return redirect('profile');
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
    dd($route->uri);
});




