<?php

namespace Database\Seeders;

use App\Domain\Banners\Models\Banner;
use App\Domain\News\Models\News;
use App\Domain\News\Models\NewsCategory;
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
        NewsCategory::create(["title" => 'News']);
        NewsCategory::create(["title" => 'Videos']);
        NewsCategory::create(["title" => 'Infographics']);

        for($i = 0; $i<10; $i++){
            News::create([
                'title' => 'Example title',
                'image' => 'images/banners/example.jpg',
                'category_id' => ($i%3==0) ? (($i%3==0) ? '1' : '2') : '3',

            ]);
        }
    }
}
