<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comic_data = config('comics');
        
        foreach ($comic_data as $comic) {
            $new_comic = new Comic();
            $new_comic->fill($comic);
            
            $new_comic->save();
        }
    }
}
