<?php
# LayoutCinema
$default_options = Siberian_Json::encode(array(
    "menuposition" => 10,
    "positionleft" => "right",
    "textTransform" => "title-lowcase",
    "title" => "titlehidden",
    "icon" => "iconvisible",
    "height" => 50,
    "padding" => 0,
    "lineheight" => 50,
    "fontsize" => 28,
));

$layout_category = new Application_Model_Layout_Category();
$default_layout_category = $layout_category->find("default", "code");

# LayoutCinema
$datas = array(
    'name' => 'Layout Cinema',
    'category_id' => $default_layout_category->getId(),
    'visibility' => Application_Model_Layout_Homepage::VISIBILITY_HOMEPAGE,
    'code' => 'layout_cinema',
    'preview' => '/customization/layout/homepage/layout_cinema.png',
    'preview_new' => '/customization/layout/homepage/layout_cinema_new.png',
    'use_more_button' => 0,
    'use_horizontal_scroll' => 0,
    'number_of_displayed_icons' => 4,
    'position' => "bottom",
    "order" => 1,
    "can_uninstall" => 1,
    "is_active" => 1,
    "use_subtitle" => 1,
    "use_homepage_slider" => 0,
    "options" => $default_options,
);

Siberian_Feature::installApplicationLayout($datas);