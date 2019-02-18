<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\createUserRequest;
use Illuminate\Foundation\Validation\ValidatesRequests;

class UsersController extends Controller
{
	use ValidatesRequests;

	public function index()
	{
		$users = User::all();

		return view('users.index', ['users' => $users]);
	}

	public function create()
	{
		return view('users.create');
	}

	public function store(createUserRequest $request)
	{
		User::create($request->all());

		return redirect()->route('users.index');
	}

	public function edit($id)
	{
		$myUser = User::find($id);

		return view('users.edit', ['user' => $myUser]);
	}

	public function update(Request $request, $id)
	{
		$this->validate($request, [
			'firstName' => 'required',
			'secondName' => 'required',
			'age' => 'required'
		]);

		$myUser = User::find($id);

		$myUser->fill($request->all());
		$myUser->save();

		return redirect()->route('users.index');
	}

	public function show($id)
	{
		$myUser = User::find($id);

		return view('users.show', ['user' => $myUser]);
	}

	public function destroy($id)
	{
		User::find($id)->delete();
		return redirect()->route('users.index');
	}
}
