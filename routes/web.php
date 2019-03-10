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

Route::get('/users', 'UsersController@index')->name('users.index');

Route::get('/users/create', 'UsersController@create')->name('users.create');

Route::post('/users/store', 'UsersController@store')->name('users.store');

Route::get('/users/edit/{id}', 'UsersController@edit')->name('users.edit');

Route::put('/users/update/{id}', 'UsersController@update')->name('users.update');

Route::get('/users/show/{id}', 'UsersController@show')->name('users.show');

Route::delete('/users/destroy/{id}', 'UsersController@destroy')->name('users.destroy');

Route::get('/events', 'EventsController@index')->name('events.index');

Route::get('/events/create', 'EventsController@create')->name('events.create');

Route::post('/events/store', 'EventsController@store')->name('events.store');

//Route::get('/hello', function () {
//	return view('hello', [
//		'name' => 'Ihar'
//	]);

//	return view('hello')->with('name', 'Laravel');

//	$name = 'Figoro';
//	return view('hello', [
//		'name'=>$name
//	]);

//	$name = 'Igor';
//	return view('hello', compact('name'));
//});

//Route::get('/tasks', function (){
//		$tasks = [
//			'add task',
//			'find task',
//			'review task'
//		];
//		return view('tasks', compact('tasks'));
//});
//
//Route::get('/tasksdb', 'TasksController@index');
//Route::get('/tasksdb/{task}', 'TasksController@show');

//Route::get('/tasksdb', function (){
//	$tasks = DB::table('tasks')->get();
//	return view('tasksdb', compact('tasks'));
//	$tasks = App\Task::all();
//	$tasks = App\Task::incomplete();
//	return view('tasks.index', compact('tasks'));
//});

//Route::get('/tasksdb/{task}', function ($id){
//	$task = DB::table('tasks')->find($id);
//	return view('tasksdb', compact('tasks'));
//	$task = App\Task::find($id);
//	return view('tasks.show', compact('task'));
//});