<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as Factory_obj;

use App\Post ;

class PostTableSeeder extends Seeder {

    public function run()
    {
        /*
        DB::table('users')->insert([
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
        ]);
        */

        // DB::table('posts')->insert([
        //     'user_id' => str_random(3),
        //     'body' => "body of post with random number" . str_random(10),
        // ]);


      //
      // factory(App\User::class, 3)->create()->each(function ($u) {
      //   $u->posts()->save(factory(App\Post::class)->make());
      // });

        Factory_obj::times(3)->create('App\Post');

    }

}
