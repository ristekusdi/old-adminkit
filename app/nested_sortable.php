<?php

use App\Models\Menu;

if (! function_exists('load_nested_sortable')) {
    function load_nested_sortable()
    {
        $raw_menu = Menu::orderBy('order')->get()->toArray();

        $menu = build_tree($raw_menu);
        update_level_items($menu);
        
        return build_nested_sortable($menu);
    }
}

if (! function_exists('build_nested_sortable')) {
    function build_nested_sortable($items, $is_nested = false, $parent_id = 0)
    {
        $sortable = '<ol '.set_sortable_attribute($is_nested, $parent_id).'>';
        foreach ($items as $item) {
            $sortable .= '<li data-id="'.$item['id'].'">
                <div>'.$item['text'].'</div>
                '.(isset($item['children']) ? build_nested_sortable($item['children'], $is_nested = true, $item['id']) : '').'
            </li>';
        }
        $sortable .= '</ol>';

        return $sortable;
    }
}

if (! function_exists('set_sortable_attribute')) {
    function set_sortable_attribute($is_nested, $parent_id)
    {
        if (!$is_nested) {
            return 'id="draggable" class="nested-sort nested-sort--enabled"';
        } else {
            return 'data-id="'.$parent_id.'"';
        }
    }
}