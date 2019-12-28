<?php

use App\Models\Configuration\Settings;
use Illuminate\Support\Facades\Cache;

function setting_get($key, $default = null)
{
    $value = Cache::get('setting:' . $key);
    if($value === null) {
        $setting = Settings::where('name', $key)->first();
        $value = $setting ? $setting->value : $default;
        Cache::set('setting:' . $key, $value);
    }
    return $value;
}

function setting_set($key, $value)
{
    $setting = Settings::where('name', $key)->first();
    if($value === null) {
        $setting = new Settings();
        $setting->name = $key;
    }
    $setting->value = $value;
    $setting->save();

    return $value;
}
