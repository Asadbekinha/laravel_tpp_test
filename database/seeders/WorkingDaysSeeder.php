<?php

namespace Database\Seeders;

use App\Domain\Persons\Models\WorkingDays;
use Illuminate\Database\Seeder;

class WorkingDaysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0;$i<5;$i++){
            WorkingDays::create([
                'from' => date('H:m', '09:00'),
                'to' => date('H:m', '18:00'),
                'dayofweek' => $i,
                'person_id' => $i

            ]);
        }

    }
}
