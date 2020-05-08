<?php

use Illuminate\Database\Seeder;
use App\Post;

class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $post = new Post([
            'title' => 'Lorem',
            'body' => 'heree'
        ]);
        $post->save();
    }
}
