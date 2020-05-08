<?php

use Illuminate\Database\Seeder;
use App\Tag;


class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tag = new Tag([
            'name' => 'Programming'
        ]);
        $tag->save();

        $tag = new Tag([
            'name' => 'Medicine'
        ]);
        $tag->save();

        $tag = new Tag([
            'name' => 'Education'
        ]);
        $tag->save();

        $tag = new Tag([
            'name' => 'Others'
        ]);
        $tag->save();
    }
}
