<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

use App\Post ;

class PostTableSeeder extends Seeder {

    public function run()
    {

      // DB::table('users')->insert([
      //     'name' => str_random(10),
      //     'email' => str_random(10).'@gmail.com',
      //     'password' => bcrypt('secret'),
      // ]);
      //
      //
      //
      // factory(App\User::class, 3)->create()->each(function ($u) {
      //   $u->posts()->save(factory(App\Post::class)->make());
      // });

        TestDummy::times(3)->create('App\Post');
        //$post = Factory::build('Post');
    }

}
