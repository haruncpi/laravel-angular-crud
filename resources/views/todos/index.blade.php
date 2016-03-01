@extends('app')

@section('content')
	<div class="container" ng-controller="TodoCtrl">
		<div class="row">
			<div class="col-md-12">
				<h3>Laravel Angular CRUD <a href="#modal-id" data-toggle="modal" class="btn btn-success btn-sm">Create New Task</a></h3>
				
				<table class="table">
					<thead>
						<tr>
							<th>ID</th>
							<th>TASK</th>
							<th>STATUS</th>
							<th>ACTION</th>
						</tr>
					</thead>
					<tbody>

						<tr ng-repeat="todo in todos">
							<td>@{{todo.id}}</td>
							<td>@{{todo.name}}</td>
							<td>@{{todo.status==1? 'Completed':'Incomplete'}}</td>
							<td>
								
								<a href="#" class="btn btn-warning btn-xs">Edit</a>
								<a href="#" class="btn btn-danger btn-xs">Delete</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		
		{{-- insert modal --}}
			<div class="modal fade" id="modal-id">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title">Add a task</h4>
						</div>
						<div class="modal-body">
							
								<label for="name">Enter a task name</label>
								<input class="form-control" type="text" name="name" ng-model="Todo.name">
							
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary" ng-click="create(Todo.name)">Add</button>
							
						</div>
					</div>
				</div>
			</div>
		{{-- end insert modal --}}


	</div>
@endsection
