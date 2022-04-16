<?php

namespace Database\Seeders;

use App\Domain\Persons\Models\Person;
use App\Domain\Persons\Models\WorkingDays;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            DocumentSeeder::class
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
