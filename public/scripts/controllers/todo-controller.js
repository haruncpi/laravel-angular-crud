myApp.constant('SERVICEURL', 'http://localhost/laravel-angular-crud/public');

myApp.controller('TodoCtrl', function($scope, $http, SERVICEURL) {
    // for fetch all data
    $scope.init = function() {
        $http.get(SERVICEURL + '/todo-list').success(function(data) {
            $scope.todos = data;
        })
    }

    // for create a task
    $scope.create = function(name) {
        $http.post(SERVICEURL + '/todos', {
            name: name
        }).success(function(data) {
            $scope.init();
            $('#modal-id').modal('hide');
        })
    }

    $scope.init();
})