
//angular.module('myApplicationModule', ['uiGmapgoogle-maps']);

var myApp = angular.module('PostsApp',['uiGmapgoogle-maps'], function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});

myApp.config(function(uiGmapGoogleMapApiProvider) {
    uiGmapGoogleMapApiProvider.configure({
        //    key: 'your api key',
        v: '3.17',
        libraries: 'weather,geometry,visualization'
    });
})

myApp.controller('PostController', function($scope, $http,uiGmapGoogleMapApi) {

    $scope.posts = []
    $scope.loading = false;
    uiGmapGoogleMapApi.then(function(maps) {
        $scope.map = { center: { latitude: 53, longitude: 1 }, zoom: 8 };
    });

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