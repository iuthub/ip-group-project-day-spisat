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
        // $post = new Post([
        //     'title' => 'Lorem',
        //     'body' => 'heree'
        // ]);
        // $post->save();


        DB::table('posts')->insert([
            'title' => 'Software Engineer',
            'body'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos laboriosam error blanditiis alias voluptatem, saepe sit quaerat ipsam qui ea magnam aliquid est, delectus vitae. Accusantium vero minima, voluptate aperiam.',
            'created_at' => '2012-12-12 12:12:12',
            'updated_at' => '2012-12-12 12:12:12'
        ]);

     DB::table('posts')->insert([
            'title' => 'Project Manager',
            'body'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos laboriosam error blanditiis alias voluptatem, saepe sit quaerat ipsam qui ea magnam aliquid est, delectus vitae. Accusantium vero minima, voluptate aperiam.',
            'created_at' => '2012-12-12 12:12:12',
            'updated_at' => '2012-12-12 12:12:12'
        ]);

      DB::table('posts')->insert([
            'title' => 'Teacher',
            'body'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos laboriosam error blanditiis alias voluptatem, saepe sit quaerat ipsam qui ea magnam aliquid est, delectus vitae. Accusantium vero minima, voluptate aperiam.',
            'created_at' => '2012-12-12 12:12:12',
            'updated_at' => '2012-12-12 12:12:12'
        ]);


    }
}
