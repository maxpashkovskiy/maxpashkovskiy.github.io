(function(ang){
  'use strict';

  /**
   * @ngdoc overview
   * @name blogApp
   * @description
   * # blogApp
   *
   * Main module of the application.
   */
  ang
    .module('blogApp', [
      'ngAnimate',
      'ngResource',
      'ngRoute'
    ])    
    .config(function ($locationProvider, $routeProvider) {
      // don't use # sign in URL
      $locationProvider.html5Mode({
        enabled: true,
        requireBase: false
      });
      $routeProvider
        .when('/', {
          templateUrl: 'views/main.html',
          controller: 'MainCtrl',
          controllerAs: 'main'
        })
        .when('/blog', {
          templateUrl: 'views/blog.html',
          controller: 'BlogCtrl',
          controllerAs: 'blog'
        })
        .when('/portfolio', {
          templateUrl: 'views/portfolio.html',
          controller: 'PortfolioCtrl',
          controllerAs: 'portfolio'
        })
        .when('/useful', {
          templateUrl: 'views/useful.html',
          controller: 'UsefulCtrl',
          controllerAs: 'useful'
        })
        .when('/about', {
          templateUrl: 'views/about.html',
          controller: 'AboutCtrl',
          controllerAs: 'about'
        })
        .when('/login', {
          templateUrl: 'views/login.html',
          controller: 'LoginCtrl',
          controllerAs: 'login'
        })        
        .otherwise({templateUrl: '404.html'});
      });
})(angular);

(function($){
  'use strict';
  
  $(document).ready(function() {
    var menuToggle = $('#js-centered-navigation-mobile-menu').unbind();
    $('#js-centered-navigation-menu').removeClass('show');
    
    menuToggle.on('click', function(e) {
      e.preventDefault();
      $('#js-centered-navigation-menu').slideToggle(function(){
        if($('#js-centered-navigation-menu').is(':hidden')) {
          $('#js-centered-navigation-menu').removeAttr('style');
        }
      });
    });
  });
})(jQuery);