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
        $setting = new Settings;
        $setting->label = $request->label;
        $setting->name = $request->name;
        $setting->value = $request->value;
        $setting->group = $request->group;
        $setting->is_active = $request->is_active;
        $setting->is_api_accessibility = $request->is_api_accessibility;
        $setting->description = $request->description;
        $setting->save();

        return "hellow success";

       // return view("{$this->viewPath}.index");

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
