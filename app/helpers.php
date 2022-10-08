<?php

use Illuminate\Support\Facades\Route;

if (! function_exists('active_link')) {
    function active_link(string $name, string $active = 'active'): string
    {
        return Route::is($name) ? $active : '';
    }
}
if (! function_exists('alert')) {
//    $status может принимать следующие необязательное значения:
//    success
//    danger
//    warning
//    primary
//    info
//    light
//    dark

    function alert(string $value, string $status = 'success')
    {
        session([
            'alert' => $value,
            'status' => $status,
        ]);
    }
}


