// create the module and name it appX
var appX = angular.module('appX', ['ngRoute'],function($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    });
//var appX = angular.module('appX',[]);


appX.controller('controllerX' , ['$scope' , '$http' , function($scope,$http){
  $scope.test ="ASDAS";
        $scope.reposFlag = false ;
        $scope.usersFlag = false ;
        $scope.username  = 'amagdy529' ;

        http://localhost:8000/api/posts
        $http.get("/api/posts")
            .success(function(data){
              $scope.posts = data.data ;
              //getRepos();
        });

        var getRepos = function(){
          $http.get($scope.userData.repos_url)
              .success(function (data){
                $scope.repoData = data ;
              });
        };

        $scope.predicate = '-updated_at';

    }]);
