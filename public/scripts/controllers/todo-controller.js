myApp.constant('SERVICEURL', 'http://localhost/laravel-angular-crud/public');

myApp.controller('TodoCtrl', function ($scope, $http, SERVICEURL) {
    // for fetch all data
    $scope.init = function () {
        $http.get(SERVICEURL + '/todo-list').success(function (data) {
            $scope.todos = data;
        })
    }

    // for create a task
    // POST request to todos
    $scope.create = function (todo) {
        $http.post(SERVICEURL + '/todos', todo)
            .success(function (data) {
                $scope.init();
                $scope.Todo = null;
            })
    }

    // edit section here we show the edit values
    // GET request to todos/{editId}/edit
    $scope.edit = function (id) {
        $http.get(SERVICEURL + '/todos/' + id + '/edit').success(function (data) {
            $scope.todo = data;
        })
    }

    // update section,here we update the value which is edited
    // PUT request to todos/{updateId}
    $scope.update = function (todo) {
        $http.put(SERVICEURL + '/todos/' + todo.id + '', todo)
            .success(function (data) {
                $scope.init();
                $('#edit-modal').modal('hide');
            })
    }
    $scope.init();
})