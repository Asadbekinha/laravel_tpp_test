<?php

namespace Database\Seeders;

use App\Domain\Indicators\Models\Indicator;
use Illuminate\Database\Seeder;

class IndicatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<4;$i++){
            Indicator::create([
                'title' => 'Indicator '.$i,
                'amount' => $i*10000,
                'unit' => 'MBt',
                'icon_class' => 'icon.png'

            ]);
        }
    }
}
