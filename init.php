<?php
$init = function ($bootstrap) {
    Siberian_Assets::registerAssets(
        'LayoutCinema',
        '/app/local/modules/LayoutCinema/resources/var/apps/');

    Siberian_Assets::addJavascripts([
        'modules/layout/home/layout_cinema/hooks.js',
    ]);

    Siberian_Assets::addStylesheets([
        'modules/layout/home/layout_cinema/style.css',
    ]);

    // Register a custom form for the Layout Options!
    Siberian_Feature::registerLayoutOptionsCallbacks(
        'layout_cinema',
        'LayoutCinema_Form_LayoutCinemaOptions',
        function ($datas) {
            return [];
        });
};
