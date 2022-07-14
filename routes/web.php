<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get("ID/{id}", function($id) {
    echo "ID: ".$id;
});

Route::get("name/{name?}", function($name = "KJH") {
    echo "Your name is ".$name;
});

Route::get("user/profile", function() {
    echo "User has no profile";
})->name("profile");

Route::get("role", [
    "middleware" => "Role:editor",
    "uses" => "App\Http\Controllers\TestController@index",
]);

// Route::get("terminate", [
//     "middleware" => "App\Http\Middleware\TerminateMiddleware",
//     "uses" => "App\Http\Controllers\ABCController@index",
// ]);

Route::get("terminate", [
    "uses" => "App\Http\Controllers\ABCController@index",
]);

Route::get("usercontroller/path", [
    "middleware" => "First",
    "uses" => "App\Http\Controllers\UserController@showPath",
]);

Route::resource("my", "App\Http\Controllers\MyController");

Route::controller("implicit", "App\Http\Controllers\ImplicitController");

class MyClass {
   public $foo = 'bar';
}

Route::get('/myclass','App\Http\Controllers\ImplicitController@index');

Route::get('/foo/bar', 'App\Http\Controllers\UriController@index');

Route::get('/register', function() {
    return view('register');
});

Route::post('/user/register', array('uses'=>'App\Http\Controllers\UserRegistration@postRegister'));

Route::get('/cookie/set', 'App\Http\Controllers\CookieController@setCookie');

Route::get('/cookie/get', 'App\Http\Controllers\CookieController@getCookie');

Route::get('/basic_response', function() {
    return "Hello World!";
});

Route::get('/header', function() {
    return response("Hello", 200)->header("Content-Type", "text/html")->withCookie('name', 'virat');
});

Route::get('json', function() {
    return response()->json(['name' => "Gahndi", "state" => "Gujarat"]);
});

Route::get("/test", function() {
    return view('anotherTest');
});

Route::get("/anotherTest", function() {
    return view("anotherTest", ["name"=>"virat Gahndi"]);
});

Route::get('/test2', function() {
    return view('test2');
});

Route::get('/test_redirect', ['as'=>'testing', function() {
    return view('redirect');
}]);

Route::get('/redirect', function() {
    return redirect()->route('testing');
});

Route::get('rr', "App\Http\Controllers\RedirectController@index");
Route::get('/redirectcontroller', function () {
    return redirect()->action('App\Http\Controllers\RedirectController@index');
});

Route::get('insert', 'App\Http\Controllers\StudInsertController@insertform');
Route::post('create', 'App\Http\Controllers\StudInsertController@insert');

Route::get("view_records", "App\Http\Controllers\StudViewController@view");

Route::get("edit-records", "App\Http\Controllers\StudUpdateController@index");
Route::get("edit/{id}", "App\Http\Controllers\StudUpdateController@show");
Route::post("edit/{id}", "App\Http\Controllers\StudUpdateController@edit");

Route::get('delete-records','App\Http\Controllers\StudDeleteController@index');
Route::get('delete/{id}','App\Http\Controllers\StudDeleteController@destroy');