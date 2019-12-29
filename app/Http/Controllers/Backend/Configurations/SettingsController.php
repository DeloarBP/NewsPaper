<?php

namespace App\Http\Controllers\Backend\Configurations;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Configuration\Settings;


class SettingsController extends Controller
{

    private $viewPath = 'backend.pages.configuration';


    public function index()
    {
        return view("{$this->viewPath}.index");
    }

    public function create()
    {
        return view("{$this->viewPath}.create");
    }

    public function store(Request $request)
    {

    }

    public function edit(Settings $setting)
    {

    }

    public function update(Request $request, Settings $setting)
    {

    }

    public function approveToggle(Settings $setting)
    {

    }

    public function delete(Settings $setting)
    {

    }
}
