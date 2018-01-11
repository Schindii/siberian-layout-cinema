angular.module('starter').service('layout_cinema', function ($rootScope, HomepageLayout) {var service = {};service.getTemplate = function() {return "modules/layout/home/layout_cinema/view.html";};service.getModalTemplate = function() {};service.onResize = function() {};service.features = function (features, more_button) {return features;};return service;});

