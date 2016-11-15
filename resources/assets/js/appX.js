// create the module and name it appX
var appX = angular.module('appX', ['ngRoute'])
//var appX = angular.module('appX',[]);


appX.controller('controllerX' , ['$scope' , '$http' , function($scope,$http){
        // $scope.reposFlag = false ;
        // $scope.usersFlag = false ;
        // $scope.username  = 'amagdy529' ;

        //http://localhost:8000/api/posts
        $http.get("/api/posts")
            .success(function(data){
              alert(data);
              $scope.posts = data ;
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
