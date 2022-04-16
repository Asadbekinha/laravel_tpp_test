<?php

namespace Database\Seeders;

use App\Models\PowerStatistic;
use Illuminate\Database\Seeder;

class PowerStatisticSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0;$i<12;$i++){
            PowerStatistic::create([
                'quantity' => 5,
                'region_id' => $i
            ]);

        }
    }
}
