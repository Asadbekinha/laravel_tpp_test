<?php

namespace Database\Seeders;

use App\Domain\Banners\Models\Banner;
use Illuminate\Database\Seeder;

class BannersSeeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i<10; $i++){
            Banner::create([
                'title' => 'Example title',
                'image' => 'images/banners/example.jpg'
            ]);
        }

    }
}
