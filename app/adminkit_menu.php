<?php

if (! function_exists('load_menu')) {
    function load_adminkit_menu()
    {
        $items = [
            [
                'header' => 'Pages'
            ],
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
            ],
            [
                'header' => 'Tools & Component'
            ],
            [
                'link' => 'adminkit/ui/buttons',
                'text' => 'Buttons',
                'icon' => 'square'
            ],
            [
                'link' => 'adminkit/ui/forms',
                'text' => 'Forms',
                'icon' => 'check-square'
            ],
            [
                'link' => 'adminkit/ui/cards',
                'text' => 'Cards',
                'icon' => 'grid'
            ],
            [
                'link' => 'adminkit/ui/typography',
                'text' => 'Typography',
                'icon' => 'align-left'
            ],
            [
                'link' => 'adminkit/ui/icons',
                'text' => 'Icons',
                'icon' => 'coffee'
            ]
        ];

        update_level_items($items);
        return build_menu($items);
    }
}