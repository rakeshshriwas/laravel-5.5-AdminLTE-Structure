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
/*
Route::get('/home', function(){

	$student = ['Rakesh', 'Aman', 'Aditya', 'Gagan'];
	$age     = [25, 26, 32, 15];

	return view('dummy', compact('student'));
	return view('dummy', compact('student','age'));
	return view('dummy', [ 'student' => $student, 'age' => $age ]);
	return view('dummy')->with('student', $student)->with('age', $age);
});*/


Route::get('/home',      'adminController@home');
Route::get('/dashboard', 'dashboardController@dashboard');
Route::get('task',      'taskController@getAllTask');
Route::get('settings',   'settingsController@settings');
Route::get('profile',    'profileController@userProfile');