myApp.controller('TodoCtrl', function($scope, $http) {
    var serviceUrl = 'http://localhost/laravel-angular-crud/public/todo-list';
    $scope.init = function() {
        $http.get(serviceUrl).success(function(data) {
            $scope.todos = data;
        })
    }

    $scope.init();
})