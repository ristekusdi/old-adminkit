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
                        'text' => 'Three Levels',
                        'children' => [
                            [
                                'link' => '#',
                                'text' => 'Item 1',
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
                                'link' => '#',
                                'text' => 'Item 2'
                            ]
                        ]
                    ]
                ]
            ]
        ];
        return build_menu($items);
    }
}

if (! function_exists('build_menu')) {
    function build_menu($items, $is_nested = false, $id = '', $level = 0)
    {
        $menu = '<ul '.set_sidebar_id($id).' '.set_sidebar_class($is_nested).'>';

        foreach ($items as $item) {
            $menu .= '<li class="sidebar-item">
                <a '.set_sidebar_link_class($item).' '.set_data_bs_attr($item).' '.set_href($item['link']).' '.set_aria_expanded($item).'>
                    '.set_sidebar_link_text($item).'
                </a>
                '.(isset($item['children']) ? build_menu($item['children'], $is_nested = true, $id = $item['text'], $level += 1) : '').'
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
    function set_sidebar_class($is_nested)
    {
        return ($is_nested) ? 'class="sidebar-dropdown list-unstyled collapse"' : 'class="sidebar-nav"';
    }
}

if (! function_exists('set_sidebar_link_class')) {
    function set_sidebar_link_class($item)
    {
        return isset($item['children']) ? 'class="sidebar-link collapsed"' : 'class="sidebar-link"';
    }
}

if (! function_exists('set_href')) {
    function set_href($link)
    {
        return ($link !== '#') ? 'href="'.url($link).'"' : '';
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
        return isset($item['children']) ? 'aria-expanded="false"' : '';
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