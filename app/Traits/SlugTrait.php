<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait SlugTrait
{
    public static function uniqueSlug($string)
    {
        $baseSlug = Str::slug($string, '-');

        if (static::where('slug', $baseSlug)->count() == 0) {
            return $baseSlug;
        }

        for ($i = 1; $i > 0; $i++) {
            $slug = $baseSlug . '-' . $i;

            if (static::where('slug', $slug)->count() == 0)
                return $slug;
        }

        return $slug;
    }
}
