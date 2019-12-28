<?php

namespace App\Models\News;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $filable = [
        'name',
        'description',
        'created_by',
        'updated_by'
     ];
}
