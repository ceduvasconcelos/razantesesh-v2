<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;

abstract class Controller
{
    public function getComponent(string $component)
    {
        $controllerNamespace = Str::beforeLast(get_class($this), '\\');
        $directoryName = Str::betweenFirst($controllerNamespace, 'App\\Http\\Controllers\\', '\\');

        return ucfirst($directoryName) . '/Pages/' . $component;
    }
}
