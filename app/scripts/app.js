'use strict';

/**
 * @ngdoc overview
 * @name testApp
 * @description
 * # testApp
 *
 * Main module of the application.
 */
angular
  .module('testApp', [
    'ngAnimate',
    'ngCookies',
    'ngResource',
    'ngRoute',
    'ngSanitize',
    'ngTouch'
  ])
  .config(function ($routeProvider) {
    $routeProvider
      .when('/', {
        templateUrl: 'views/main.html',
        controller: 'MainCtrl',
        controllerAs: 'main'
      })
      .when('/about', {
        templateUrl: 'views/about.html',
        controller: 'AboutCtrl',
        controllerAs: 'about'
      })
      .when('/angul', {
        templateUrl: 'views/ang.html',
        controller: 'AboutCtrl',
        controllerAs: 'angul'
      })
         .when('/geomap', {
        templateUrl: 'views/geomap_min.html',
        controller: 'geoCtrl',
        controllerAs: 'geomap'
      })
      .otherwise({
        redirectTo: '/'
      });
  });
