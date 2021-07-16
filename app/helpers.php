<?php

if (! function_exists('is_active_url')) {
    function is_active_url($path)
    {
        return request()->is($path) ? 'active' : '';
    }
}