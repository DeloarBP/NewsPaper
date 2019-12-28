<?php

namespace App\Models\News;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    //
    protected $filable = [
        'name',
        'category_id',
        'created_by',
        'updated_by'
     ];
}
