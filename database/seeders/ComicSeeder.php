<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;
use Illuminate\Support\Str;
use App\Functions\Helper;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            $arr_comics = config('comic');

            if (is_null($arr_comics)) {
                // Gestisci l'errore o imposta un array vuoto
                $arr_comics = [];
            }
            
            foreach ($arr_comics as $comic){
                $new_comics = new Comic();
                $new_comics->title = $comic['title'];
                $new_comics->slug = Helper::generateSlug($new_comics->title, Comic::class);
                $new_comics->description = $comic['description'];
                $new_comics->thumb = $comic['thumb'];
                $new_comics->price = $comic['price'];
                $new_comics->series = $comic['series'];
                $new_comics->sale_date = $comic['sale_date'];
                $new_comics->type = $comic['type'];
                $new_comics->save();
            }
    }

    // private function generateSlug($string,){
    //     $slug = Str::slug($string, '-');
    //     $original_slug = $slug;

    //     $exists = Comic::where('slug', $slug)->first();
    //     $c = 1;

    //     while($exists){
    //         $slug = $original_slug . '-' . $c;
    //         $exists = Comic::where('slug', $slug)->first();
    //         $c++;
    //     }

    //     return $slug;
    // }
}
