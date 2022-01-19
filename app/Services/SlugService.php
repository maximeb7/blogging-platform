<?php

namespace App\Services;

use Illuminate\Support\Str;
use App\Models\Post;


/**
 * SlugService
 */
class SlugService {


    /**
     * generateSlug
     *
     * @param  mixed $title
     * @param  mixed $author
     * @return void
     */
    public function generateSlug($title, $author)
    {
        $slug = Str::slug($title, '-');
        $is_user_slug_exist = Post::where([
            ['user_name','=',$author->slug_name],
            ['slug_title', '=', $slug]
        ])->first();

        if(!is_null($is_user_slug_exist))
        {
            $slug_number = explode('-',$is_user_slug_exist->slug_title);
            if (ctype_digit($slug_number[array_key_last($slug_number)])) {
                $number = (int)$slug_number[array_key_last($slug_number)];
                $number++;
                $slug_number[array_key_last($slug_number)] = $number;
                $slug = implode('-',$slug_number);
            } else {
                array_push($slug_number, 1);
                $slug = implode('-',$slug_number);
            }
        }

        return $slug;
    }

}
