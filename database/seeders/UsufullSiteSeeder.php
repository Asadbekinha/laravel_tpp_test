<?php

namespace Database\Seeders;

use App\Domain\UsefullSites\Models\UsufullSite;
use Illuminate\Database\Seeder;

class UsufullSiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<4;$i++){
            UsufullSite::create([
                "url" => 'www.yandex.ru',
                "title" => 'Yandex search',
            ]);
        }

    }
}
