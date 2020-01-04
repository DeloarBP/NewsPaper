<?php

namespace App\Models\News;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $filable = [
        'name',
        'description',
        'parent_id',
        'created_by',
        'updated_by'
     ];

    public function childs() {
        return $this->hasMany('App\Models\News\Category','parent_id','id') ;
    }
}
