<?php

namespace Database\Seeders;

use App\Domain\Documents\Models\Document;
use Illuminate\Database\Seeder;

class DocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0;$i<5;$i++){
            Document::create([
                'name' => 'Document '.$i,
                'url' => asset('storage/docs/example.doc')
            ]);
        }
    }
}
