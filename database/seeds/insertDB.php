<?php

use Illuminate\Database\Seeder;

class insertDB extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts=new \App\Post();
        $posts->title='newPost';
        $posts->url='http//:localhost';
        $posts->body='welcome from seeder';
        $posts->user_id='1';
        $posts->save();


    }
}
