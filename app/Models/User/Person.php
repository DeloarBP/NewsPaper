<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    //

    protected $fillable = [
        'title',
        'first_name',
        'last_name',
        'gender',
        'phone',
        'designation',
        'dob',
        'marital_status'
    ];

    //---------------------------------->Relation<-------------------------------
    public function user()
    {
        return $this->hasOne(User::class);
    }
}
