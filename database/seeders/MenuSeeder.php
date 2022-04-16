<?php

namespace Database\Seeders;

use App\Domain\Menus\Models\Menu;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::create([
            'name' => 'Phone',
            'parent_id' => 11
        ]);
        Menu::create([
            'name' => 'Location',
            'parent_id' => 11
        ]);
//        Menu::create([
//            'name' => 'About company',
//            'parent_id' => null
//        ]);
//        Menu::create([
//            'name' => 'Activity',
//            'parent_id' => null
//        ]);
//        Menu::create([
//            'name' => 'Investment policy',
//            'parent_id' => null
//        ]);
//        Menu::create([
//            'name' => 'Press service',
//            'parent_id' => null
//        ]);
//        Menu::create([
//            'name' => 'Control',
//            'parent_id' => null
//        ]);
//        Menu::create([
//            'name' => 'Contact',
//            'parent_id' => null
//        ]);
    }
}
