<?php

use Illuminate\Database\Seeder;
use Laracasts\TestDummy\Factory as TestDummy;

// composer require laracasts/testdummy
use App\PostType;

class PostTypesTableSeeder extends Seeder {

    public function run()
    {
        // TestDummy::times(20)->create('App\Post');
        PostType::create(['name'=>'Text']);
        PostType::create(['name'=>'Photo']);
        PostType::create(['name'=>'Audio']);
        PostType::create(['name'=>'Video']);

    }

}