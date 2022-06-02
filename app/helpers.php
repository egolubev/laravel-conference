<?php
/**
 * Created by PhpStorm.
 * User: egolubev
 * Date: 02.06.2022
 * Time: 17:55
 */

use Illuminate\Support\Facades\Route;

if (! function_exists('active_link')) {
    function active_link(string $name, string $active = 'active'): string
    {
        return Route::is($name) ? $active : '';
    }
}
