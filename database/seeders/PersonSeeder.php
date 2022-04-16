<?php

namespace Database\Seeders;

use App\Domain\Persons\Models\Person;
use Illuminate\Database\Seeder;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0;$i<5;$i++){
            Person::create([
                'firstname' => 'Firstname',
                'lastname' => 'Lastname',
                'fathersname' => 'Fathersname',
                'image' => 'image url',
                'bio' => 'This is text about person',
                'location' => 'location',
                'phone' => '+99899123456789',
                'email' => 'example@gmail.com',
                'activity' => 'Родился 23 февраля 1982 года в г. Фергана. В 2007 году окончил Ферганский политехнический институт. Трудовая деятельность: Родился 23 февраля 1982 года в г. Фергана. В 2007 году окончил Ферганский политехнический институт. 2004-2004 гг. – Аппаратчи',

            ]);
        }
    }
}
