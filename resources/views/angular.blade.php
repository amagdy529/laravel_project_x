@extends('layout')

@section('content')
    inside angular page {{5+2}}

  <div>
    <div class="row" ng-controller="controllerX">
      <div class="col-lg-4">
          <ul>
            <li ng-repeat="post in posts"><a href="" ng-click=""><% post.body %></a></li>
          </ul>
      </div>
    </div>
  </div>
@endsection
