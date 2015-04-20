var myApp = angular.module('PostsApp',[], function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});


myApp.controller('PostController', function($scope, $http) {

    $scope.posts = []
    $scope.loading = false;

    $scope.init = function() {
        $scope.loading = true;
        $http.get('/api/v0/posts').
        success(function(data, status, headers, config) {
            $scope.posts = data;
                $scope.loading = false;
 
        });
    }


    $scope.addPost = function() {
        var post = {
            body: $scope.newPostBody,
            title: $scope.newPostTitle,
            post_type_id: $scope.newPostType,
            user_id: 1,
            lat: $scope.newLatitude,
            long: $scope.newLongitude
        };
        console.log(post);

        $scope.posts.push(post);

        $http.post('/api/v0/posts', post);
    };

    $scope.init();
});