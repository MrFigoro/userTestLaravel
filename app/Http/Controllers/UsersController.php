<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\User;
use App\Http\Requests\createUserRequest;


class UsersController extends Controller
{

	use ValidatesRequests;

	public function index()
	{
		$users = User::all();
		return response()
			->json([
				$users->all()
			])
//		return view('users.index', ['users' => $users])
		;
	}

	public function create()
	{
		return view('users.create');
	}

	public function store(createUserRequest $request)
	{
		$myUser = User::create($request->all());
		return response()
			->json([
				$myUser
//				'firstName' => 'firstName',
//				'secondName' => 'secondName',
//				'age' => 'age'
			])
		;
		//return redirect()->route('users.index');
	}

	public function edit($id)
	{
		$myUser = User::find($id);
		if ($myUser instanceof User) {
			return view('users.edit', ['user' => $myUser]);
		}
		else {
			return response()->json(['errors' => ['Not found user with given ID.']], 404);
		}
	}

	public function update(Request $request, $id)
	{
		$myUser = User::find($id);
		if ($myUser instanceof User) {
			$this->validate($request, [
				'firstName' => 'required',
				'secondName' => 'required',
				'age' => 'required'
			]);
			$myUser->fill($request->all());
			$myUser->save();
			return response()
				->json([
					$myUser
				]);
		}
		else {
			return response()->json(['errors' => ['Not found user with given ID.']], 404);
		}
//		return redirect()->route('users.index');
	}

	public function show($id)
	{
		$myUser = User::findOrFail($id);

		return view('users.show', ['user' => $myUser]);
	}

	public function destroy($id)
	{
		$myUser = User::find($id);
		if ($myUser instanceof User) {
			$myUser->delete();
			return response()->json(['success' => ['User with given ID successful deleted.']], 200);
		}
		else{
			return response()->json(['errors' => ['Not found user with given ID.']], 404);
		}
//		return redirect()->route('users.index');
	}
}
