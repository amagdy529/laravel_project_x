<?php

$factory('App\Post', [
    'user_id' => rand(1,2), //Auth::id();
    'body' => "body of post with random number" . rand(1,5),
]);
