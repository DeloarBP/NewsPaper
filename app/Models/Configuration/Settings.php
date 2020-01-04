<?php

namespace App\Models\Configuration;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    protected $fillable = ['label', 'name', 'value', 'group', 'is_active', 'is_api_accessible', 'description'];
}
