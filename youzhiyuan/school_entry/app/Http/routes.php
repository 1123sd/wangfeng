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

/*Route::get('/', function () {
    return view('index');
});*/
Route::get('/', "IndexController@index");
/*Route::get('/', function () {
    return view('index');
});*/
Route::get('login.html', function () {
    return view('login');
});
//Route::group(['middleware' => 'login'], function () {
	Route::get('self-report.html', function () {
	    return view('self-report');
	});
	Route::get('green.html', function () {
	    return view('green');
	});
	Route::get('arrive.html', function () {
	    return view('arrive');
	});
	Route::get('delay.html', function () {
	    return view('delay');
	});
	Route::get('must-know.html', function () {
	    return view('must-know');
	});
	Route::get('notice.html', function () {
	    return view('notice');
	});
	Route::get('data.html', function () {
	    return view('data');
	});
	Route::get('ask.html', function () {
	    return view('ask');
	});
	Route::get('entrance.html', function () {
	    return view('entrance');
	});
	Route::get('user-center.html', function () {
	    return view('user-center');
	});
	Route::get('route.html', function () {
	    return view('route');
	});
	Route::get('adress.html', function () {
	    return view('adress');
	});
	Route::get('user-info.html', function () {
	    return view('user-info');
	});
	Route::get('dorm-book.html', function () {
	    return view('dorm-book');
	});
	Route::get('dorm-book.html', function () {
	    return view('dorm-book');
	});
	Route::get('reportCard.html', function () {
	    return view('reportCard');
	});
	Route::get('commonquestion.html', function () {
	    return view('commonquestion');
	});
	Route::get('answer.html', function () {
	    return view('answer');
	});
	Route::get('myanswer.html', function () {
	    return view('myanswer');
	});
	Route::get('tiwen.html', function () {
	    return view('tiwen');
	});
	Route::get('uploaDate.html', function () {
	    return view('uploaDate');
	});
//});