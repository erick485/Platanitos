define(['angular', 'controllers/home', 'controllers/mensajes']/*deps*/, function (angular, HomeCtrl, MensajesCtrl)/*invoke*/ {
    'use strict';

    return angular.module('quipuApp', ['quipuApp.controllers.HomeCtrl',
            'quipuApp.controllers.MensajesCtrl',
            /*angJSDeps*/
            'ngCookies',
            'ngResource',
            'ngSanitize',
            'ngRoute',
            'ngAnimate',
            'ngTouch'
        ])
        .config(function ($routeProvider) {
            $routeProvider
                .when('/home', {
                    templateUrl: 'resources/views/home.html',
                    controller: 'HomeCtrl'
                })
                .when('/mensajes', {
                    templateUrl: 'resources/views/mensajes.html',
                    controller: 'MensajesCtrl'
                })
                .otherwise({
                    redirectTo: '/home'
                });
        });
});
