<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Task;

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
