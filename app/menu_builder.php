<?php

if (! function_exists('load_menu')) {
    function load_menu()
    {
        $items = [
            [
                'link' => 'adminkit/pages/dashboard',
                'text' => 'Dashboard',
                'icon' => 'sliders'
            ],
            [
                'link' => 'adminkit/pages/profile',
                'text' => 'Profile',
                'icon' => 'user'
            ],
            [
                'link' => 'adminkit/pages/blank',
                'text' => 'Blank',
                'icon' => 'book'
            ],
            [
                'link' => 'adminkit/pages/chart',
                'text' => 'Chart',
                'icon' => 'bar-chart-2'
            ],
            [
                'link' => '#',
                'text' => 'Nested Menu Lv. 1',
                'icon' => 'corner-right-down',
                'children' => [
                    [
                        'link' => 'adminkit/pages/subnestedlv1',
                        'text' => 'Sub Nested Menu Lv. 1'
                    ],
                ]
            ],
            [
                'link' => '#',
                'text' => 'Nested Menu Lv. 2',
                'icon' => 'corner-right-down',
                'children' => [
                    [
                        'link' => '#',
                        'text' => 'Two Levels',
                        'children' => [
                            [
                                'link' => 'adminkit/pages/subnestedlv2',
                                'text' => 'Item 1'
                            ],
                            [
                                'link' => '#',
                                'text' => 'Item 2'
                            ]
                        ]
                    ]
                ]
            ],
            [
                'link' => '#',
                'text' => 'Nested Menu Lv. 3',
                'icon' => 'corner-right-down',
                'children' => [
                    [
                        'link' => '#',
                        'text' => 'Y Two Levels',
                        'children' => [
                            [
                                'link' => 'adminkit/pages/subnestedlv3_item3',
                                'text' => 'Y Item 1'
                            ],
                            [
                                'link' => '#',
                                'text' => 'Item 2'
                            ]
                        ]
                    ],
                    [
                        'link' => '#',
                        'text' => 'Three Levels',
                        'children' => [
                            [
                                'link' => '#',
                                'text' => 'X Item 1',
                                'children' => [
                                    [
                                        'link' => 'adminkit/pages/subnestedlv3',
                                        'text' => 'Item 1'
                                    ],
                                    [
                                        'link' => '#',
                                        'text' => 'Item 2'
                                    ]
                                ],
                            ],
                            [
                                'link' => 'adminkit/pages/subnestedlv3_item2',
                                'text' => 'Item 2'
                            ]
                        ]
                    ],
                    [
                        'link' => 'adminkit/pages/subnestedlv3_item1',
                        'text' => 'X Item 1'
                    ]
                ]
            ]
        ];

        update_level_items($items);
        return build_menu($items);
    }
}

if (! function_exists('update_level_items')) {
    function update_level_items(&$items, $level = 1)
    {
        foreach ($items as &$item) {
            if (array_key_exists('children', $item) && is_array($item['children'])) {
                $item['level'] = $level;
                update_level_items($item['children'], $level + 1);
            }
        }
    }
}

if (! function_exists('build_menu')) {
    function build_menu($items, $is_nested = false, $id = '')
    {
        $menu = '<ul '.set_sidebar_id($id).' '.set_sidebar_class($items, $is_nested).'>';

        foreach ($items as $item) {
            $menu .= '<li '.set_sidebar_item_class($item, $is_nested).'>
                <a '.set_sidebar_link_class($item).' '.set_data_bs_attr($item).' '.set_href($item['link']).' '.set_aria_expanded($item).'>
                    '.set_sidebar_link_text($item).'
                </a>
                '.(isset($item['children']) ? build_menu($item['children'], $is_nested = true, $id = $item['text']) : '').'
            </li>';
        }
        $menu .= '</ul>';
        return $menu;
    }
}

if (! function_exists('set_sidebar_id')) {
    function set_sidebar_id($id)
    {
        return ($id != '') ? 'id="'.preg_replace('/\s+/', '-', strtolower(str_replace('.', '', $id))).'"' : '';
    }
}

if (! function_exists('set_sidebar_class')) {
    function set_sidebar_class($items, $is_nested)
    {
        if (!$is_nested) {
            return 'class="sidebar-nav"';
        }
        
        $is_active_link = is_active_link_from_children($items);
        if ($is_active_link) {
            return 'class="sidebar-dropdown list-unstyled collapse show"';
        } else {
            return 'class="sidebar-dropdown list-unstyled collapse"';
        }
    }
}

if (! function_exists('set_sidebar_item_class')) {
    function set_sidebar_item_class($item, $is_nested)
    {
        if (isset($item['children']) && (int) $item['level'] === 1) {
            $is_active_link = is_active_link_from_children($item['children']);
            if ($is_active_link) {
                return 'class="sidebar-item active"';
            } else {
                return 'class="sidebar-item"';
            }
        } else {
            if ($item['link'] == request()->path()) {
                return 'class="sidebar-item active"';
            } else {
                return 'class="sidebar-item"';
            }
        }
    }
}

if (! function_exists('is_active_link_from_children')) {
    function is_active_link_from_children($items)
    {
        $result = false;
        $links = array();
        array_walk_recursive($items, function ($value, $key) use (&$links) {
            if ($key == 'link') {
                $links[] = $value;
            }
        });
        // print_r($links);
        if (in_array(request()->path(), $links)) {
            $result = true;
        }

        return $result;
    }
}

if (! function_exists('set_sidebar_link_class')) {
    function set_sidebar_link_class($item)
    {
        if (isset($item['children'])) {
            $is_active_link = is_active_link_from_children($item['children']);
            if ($is_active_link) {
                return 'class="sidebar-link"';
            } else {
                return 'class="sidebar-link collapsed"';
            }
        } else {
            return 'class="sidebar-link"';
        }
    }
}

if (! function_exists('set_href')) {
    function set_href($link)
    {
        return 'href="'.url($link).'"';
    }
}

if (! function_exists('set_data_bs_attr')) {
    function set_data_bs_attr($item)
    {
        return isset($item['children']) ? 'data-bs-target="#'.preg_replace('/\s+/', '-', strtolower(str_replace('.', '', $item['text']))).'" data-bs-toggle="collapse"' : '';
    }
}

if (! function_exists('set_aria_expanded')) {
    function set_aria_expanded($item)
    {
        $aria = '';
        if (isset($item['children'])) {
            $is_active_link = is_active_link_from_children($item['children']);
            if ($is_active_link) {
                $aria = 'aria-expanded="true"';
            }
        }

        return $aria;
    }
}

if (! function_exists('set_sidebar_link_text')) {
    function set_sidebar_link_text($item)
    {
        return isset($item['icon']) 
            ? '<i class="align-middle" data-feather="'.$item['icon'].'"></i> <span class="align-middle">'.$item['text'].'</span>'
            : $item['text'];
    }
}