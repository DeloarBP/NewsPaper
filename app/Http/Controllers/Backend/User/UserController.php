<?php

namespace App\Http\Controllers\Backend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User\User;

class UserController extends Controller
{
    private $viewPath = 'backend.pages.users';

    public function index()
    {

    }

    public function create()
    {
        return view("{$this->viewPath}.create");
    }

    public function edit(User $user)
    {

    }

    public function store(Request $request)
    {

    }
    public function update(Request $request, $user)
    {

    }
    public function show(User $user)
    {

    }
    public function delete(User $user)
    {

    }
}
