<?php


namespace App\Repository\User;

use App\Repository\Repository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use App\Models\User\User;



class UserRepository extends Repository
{

    public function modal()
    {
        return User::all();
    }

}
