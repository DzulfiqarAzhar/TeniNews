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
    }
}
