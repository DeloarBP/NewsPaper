<?php

namespace App\Http\Controllers\Backend\Configurations;

use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Configuration\Settings;
use App\Traits\Configurations\SettingTraits;
use App\Http\Requests\Settings\SettingsValidations;


class SettingsController extends Controller
{
    use SettingTraits;

    private $viewPath = 'backend.pages.configuration';


    public function index()
    {
        $settings = Settings::all();
        return view("{$this->viewPath}.index", compact('settings'));
    }

    public function create()
    {
        return view("{$this->viewPath}.create");
    }

    public function store(SettingsValidations $request)
    {
        $setting = new Settings;
        $setting->label = $request->label;
        $setting->name = $request->name;
        $setting->value = $request->value;
        $setting->group = $request->group;
        $setting->is_active = $request->is_active;
        $setting->is_api_accessible = $request->is_api_accessibility;
        $setting->description = $request->description;
        $setting->save();

        if($setting){
            return $this->responseJson('Setting added successfully', route('settings.index'), Response::HTTP_OK);
        }
        return $this->responseJson('Operation failed', route('settings.create'), Response::HTTP_INTERNAL_SERVER_ERROR);
    }

    public function edit(Settings $setting)
    {
        // return view("{$this->viewPath}.index" );
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
