<?php

use Illuminate\Database\Seeder;
use Laracasts\TestDummy\Factory as TestDummy;

// composer require laracasts/testdummy
use App\User;

class UsersTableSeeder extends Seeder {

    public function run()
    {
        // TestDummy::times(20)->create('App\Post');
        User::create(['name'=>'Alasdair Watson','email'=>'alasdair@alasdair.biz','password'=>bcrypt('inhifkub')]);

    }

}