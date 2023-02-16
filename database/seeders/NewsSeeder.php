<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        News::create([
            'category_id'          =>  1,
            'title'         =>  'test dulu bentar',
            'news_content'  =>  'ini hanya test',
            'content_file'      =>  NULL,
            'release_date'  =>  '2023-01-18'
        ]);

        News::create([
            'category_id'          =>  1,
            'title'         =>  'test asik',
            'news_content'  =>  'ini hanya test saja',
            'content_file'      =>  NULL,
            'release_date'  =>  '2023-01-18'
        ]);

        News::create([
            'category_id'          =>  1,
            'title'         =>  'test gokil',
            'news_content'  =>  'ini hanya test doang',
            'content_file'      =>  NULL,
            'release_date'  =>  '2023-01-18'
        ]);
    }
}
