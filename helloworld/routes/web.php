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

Route::get('/index', function () {
    return view('index');
});

Route::get('/helloworld', function () {
    return view('helloworld', ['name' => 'Sam']);
});

Route::get('/showgreetings', function () {
    $greetings = App\Models\Greeting::all();
    foreach ($greetings as $greeting) {
        echo $greeting->greeting . '<br>';
    }
    return view('showgreetings');
});

Route::get('/greetings2', function () {
    $greetings = App\Models\Greeting::all();
    echo '<h1>Lijst met Greetings</h1>';
    echo '<ul>';
    foreach ($greetings as $greeting) {
        echo '<li>'. $greeting->greeting . '</li>';
    }
    echo '</ul>';
    echo "Er zijn ". $greetings->count() .' greetings';
    return view('showgreetings');
});

Route::get("showgreetings2", 'App\Http\Controllers\HelloworldController@ShowGreetings');
Route::resource('greetings', 'App\Http\Controllers\GreetingController');
