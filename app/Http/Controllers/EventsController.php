<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Event;
use App\Http\Requests\createEventRequest;


class EventsController extends Controller
{

	use ValidatesRequests;

	public function index()
	{
		$events = Event::all();
		return response()->json($events);
	}

	public function create()
	{
		return view('events.create');
	}

	public function store(createEventRequest $request)
	{
		$myEvent = Event::create($request->all());
		return response()
			->json($myEvent
//				'firstName' => 'firstName',
//				'secondName' => 'secondName',
//				'age' => 'age'
			)
			;
	}
}
