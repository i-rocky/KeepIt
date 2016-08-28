var app;

app = angular.module('KeepIt', ['ngRoute'], function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
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