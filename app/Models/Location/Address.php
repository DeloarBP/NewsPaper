<?php

namespace App\Models\Location;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'address_type',
        'post_code',
        'house',
        'flat_no',
        'street',
        'building_name',
        'town_or_city',
        'country'
     ];


    //---------------------------Relationships--------------------------------
    public function addressable()
    {
    return $this->morphTo();
    }
}
