<?php

use App\Models\Menu;

if (! function_exists('load_app_menu')) {
    function load_app_menu()
    {
        $arr_menus = Menu::orderBy('order')->get()->toArray();

        $menu = build_tree($arr_menus);
        update_level_items($menu);
        
        return build_menu($menu);
    }
}