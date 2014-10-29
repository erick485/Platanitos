define(['angular'], function (angular) {
    'use strict';

    angular.module('quipuApp.controllers.HomeCtrl', [])
        .controller('HomeCtrl', function ($scope) {
            $scope.awesomeThings = [
                'HTML5 Boilerplate',
                'AngularJS',
                'Karma'
            ];

            $scope.evento= function () {
                alert("evento hecho")
            }
        });
});
