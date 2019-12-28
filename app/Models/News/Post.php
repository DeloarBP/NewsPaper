<?php

namespace App\Models\News;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $filable = [
        'category_id',
        'subcategory_id',
        'title',
        'description',
        'publish_date',
        'created_by',
        'updated_by',
        'headline',
        'visit_count'
    ];
}
