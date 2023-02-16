<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::create([
            'name'          =>  'Tester',
            'news_id'         =>  1,
            'comment'      =>  'test dulu lah',
            'locked'    =>  0,
        ]);

        Comment::create([
            'name'          =>  'Test Dulu',
            'news_id'         =>  1,
            'comment'      =>  'test juga lah',
            'locked'    =>  0,
        ]);

        Comment::create([
            'name'          =>  'Test Bentar',
            'news_id'         =>  2,
            'comment'      =>  'test bentar dah',
            'locked'    =>  0,
        ]);

        Comment::create([
            'name'          =>  'Test Lagi',
            'news_id'         =>  3,
            'comment'      =>  'test lagi deh',
            'locked'    =>  0,
        ]);
    }
}
