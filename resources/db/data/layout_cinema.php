<?php
// LayoutCinema!
$defaultOptions = Siberian_Json::encode(
    [
        'menuposition' => 10,
        'positionleft' => 'right',
        'textTransform' => 'title-lowcase',
        'title' => 'titlevisible',
        'icon' => 'iconvisible',
        'height' => 50,
        'padding' => 0,
        'lineheight' => 50,
        'fontsize' => 28,
    ]
);

$defaultLayoutCategory = (new Application_Model_Layout_Category())
    ->find('default', 'code');

$datas = [
    'name' => 'Layout Cinema',
    'category_id' => $defaultLayoutCategory->getId(),
    'visibility' => Application_Model_Layout_Homepage::VISIBILITY_HOMEPAGE,
    'code' => 'layout_cinema',
    'preview' => '/customization/layout/homepage/layout_cinema.png',
    'preview_new' => '/customization/layout/homepage/layout_cinema_new.png',
    'use_more_button' => 0,
    'use_horizontal_scroll' => 0,
    'number_of_displayed_icons' => 4,
    'position' => 'bottom',
    'order' => 1,
    'can_uninstall' => 1,
    'is_active' => 1,
    'use_subtitle' => 1,
    'use_homepage_slider' => 0,
    'options' => $defaultOptions,
];

Siberian_Feature::installApplicationLayout($datas);