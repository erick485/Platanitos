define(['angular'], function (angular) {
    'use strict';

    angular.module('quipuApp.controllers.MensajesCtrl', [])
        .controller('MensajesCtrl', function ($scope) {
            $scope.awesomeThings = [
                'HTML5 Boilerplate',
                'AngularJS',
                'Karma'
            ];
        });
});
