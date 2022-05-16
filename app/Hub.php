<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hub extends Model
{
//    use HasFactory;
    use Sluggable;
    protected $guarded = [];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'hubSlug' => [
                'source' => 'hubTitle'
            ]
        ];
    }
}
