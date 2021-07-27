<?php

if (! function_exists('is_active_path')) {
    function is_active_path($path)
    {
        return request()->is($path) ? true : false;
    }
}