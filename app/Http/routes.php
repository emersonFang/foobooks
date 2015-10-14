<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//get, post, put, delete

Route::get('/', function () {
	return view('welcome');
});

//Route::get('/books', 'BookController@getIndex');
//Route::get('/books/show/{title}', 'BookController@getShow');
//Route::get('/books/create', 'BookController@getCreate');
//Route::post('/books/create', 'BookController@postCreate');

#Route::get('books/foo', 'BookController@bar');
Route::controller('/books','BookController');


Route::get('/practice', function() {

    echo config('app.debug');

});

Route::get('/practice2', function() {

    echo '<h2> Foobooks! </h2>';

});

Route::get('/practice3', function() {

    $data = Array('foo' => 'bar');
    Debugbar::info($data);
    Debugbar::error('Error!');
    Debugbar::warning('Watch out…');
    Debugbar::addMessage('Another message', 'mylabel');

    return 'Practice';

});

Route::get('/practice4', function() {

    $random = new Rych\Random\Random();
    return $random->getRandomString(8);

});

Route::get('/books/show/{title?}', 'BookController@getShow');
