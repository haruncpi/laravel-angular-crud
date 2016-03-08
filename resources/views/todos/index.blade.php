@extends('app')

@section('content')
    <div class="container" ng-controller="TodoCtrl">
        <div class="row">
            <div class="col-md-12">
                <h3>Laravel Angular CRUD</h3>
                <hr>
                <div class="col-md-3">

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Add Task</h3>
                        </div>
                        <div class="panel-body">
                            <p>Enter a task name</p>

                            <p><input class="form-control input-sm" type="text" name="name" ng-model="Todo.name"></p>
                            <input type="hidden" ng-model="Todo.status" value="0">

                            <p>
                                <button class="btn btn-sm btn-success" ng-click="create(Todo)">Save</button>
                            </p>
                        </div>
                    </div>


                </div>
                <div class="col-md-9">
                    <table class="table table-striped table-bordered">
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
                                <a href="#edit-modal" data-toggle="modal" ng-click="edit(todo.id)"
                                   class="btn btn-warning btn-xs">Edit</a>
                                <a href="#" class="btn btn-danger btn-xs" ng-click="delete(todo.id)">Delete</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>


        {{-- update modal --}}
        <div class="modal fade" id="edit-modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Edit task</h4>
                    </div>
                    <div class="modal-body">

                        <label for="name">Task name</label>
                        <input class="form-control" type="text" ng-model="todo.name" value="@{{ todo.name }}">

                        <label>Status</label>
                        <select class="form-control" ng-model="todo.status">
                            <option value="1" ng-selected="todo.status">Complete</option>
                            <option value="0" ng-selected="todo.status==0" }}>Incomplete</option>
                        </select>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" ng-click="update(todo)">Save</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- end update modal --}}


    </div>
@endsection
