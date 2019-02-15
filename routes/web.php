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

Route::get('/hello', function () {
//	return view('hello', [
//		'name' => 'Ihar'
//	]);

//	return view('hello')->with('name', 'Laravel');

//	$name = 'Figoro';
//	return view('hello', [
//		'name'=>$name
//	]);

	$name = 'Igor';
	return view('hello', compact('name'));
});

Route::get('/tasks', function (){
		$tasks = [
			'add task',
			'find task',
			'review task'
		];
		return view('tasks', compact('tasks'));
});

Route::get('/tasksdb', function (){
	$tasks = DB::table('tasks')->get();
//	return view('tasksdb', compact('tasks'));
	return view('tasks.index', compact('tasks'));
});

Route::get('/tasksdb/{task}', function ($id){
	$task = DB::table('tasks')->find($id);
//	return view('tasksdb', compact('tasks'));
	return view('tasks.show', compact('task'));
});