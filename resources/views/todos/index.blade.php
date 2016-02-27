@extends('app')

@section('content')
	<div class="container" ng-controller="TodoCtrl">
		<div class="row">
			<div class="col-md-12">
				<h3>Laravel Angular CRUD <a href="#" class="btn btn-success btn-sm">Create New Task</a></h3>
				
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
	</div>
@endsection
