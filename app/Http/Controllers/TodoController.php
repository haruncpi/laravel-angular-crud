<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Task;
use Response;
use Input;

class TodoController extends Controller {

	public function getTodos()
	{
		$todos=Task::all();
		return $todos;
	}

	public function index()
	{
		return view('todos.index');
	}

	
	public function create()
	{
		
	}

	public function store()
	{
		$input=[
			'name'=>Input::get('name'),
			'status'=>0,
		];
		Task::create($input);
		$data = ['success' => false, 'msg' => 'Delete fail'];
        return Response::json($data, 200);
	}

	
	public function show($id)
	{
		
	}

	
	public function edit($id)
	{
		
	}

	
	public function update($id)
	{
		
	}


	public function destroy($id)
	{
		
	}

}
