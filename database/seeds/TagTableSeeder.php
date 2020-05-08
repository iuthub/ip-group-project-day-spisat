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
        //

        $tag = new Tag([
            'name' => 'Technology'
        ]);
        $tag->save();

        $tag = new Tag([
            'name' => 'Information'
        ]);
        $tag->save();

        $tag = new Tag([
            'name' => 'World'
        ]);
        $tag->save();
    }
}
