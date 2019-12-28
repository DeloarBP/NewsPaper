<?php

namespace App\Models\Media;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $fillable = ['src', 'type', 'mediable_id', 'mediable_type'];

    public function __toString()
    {
        return $this->src;
    }

    public function mediable()
    {
        return $this->morphTo();
    }
}
