var app;

app = angular.module('KeepIt', ['ngRoute']);/*, function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});*/

app
    .directive('selectpicker', function () {
        return {
            restrict: 'C',
            link: function (scope, element) {
                $(element).selectpicker({
                    style: 'btn-default',
                    size: false
                });
            }
        };
    });

app
    .config(function($routeProvider) {
        $routeProvider
            .when("/", {
                templateUrl : "home.htm",
                controller: "HomeCtrl"
            })
            .when("/home", {
                templateUrl : "home.htm",
                controller: "HomeCtrl"
            })
            .when("/about", {
                templateUrl : "about.htm",
                controller: "AboutCtrl"
            })
            .otherwise({ redirectTo: "/" });
    });