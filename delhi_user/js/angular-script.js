
var app = angular.module("myApp",["ngRoute"]);

app.config(function($routeProvider){
	$routeProvider
	.when('/gourmet',{
		templateUrl: 'templates/gourmet.html',
		controller: "gourmetCntrl"
	})
	.when('/shopping',{
		templateUrl: 'templates/shopping.html',
		controller: "shoppingCntrl"
	})
	.when('/funlovers',{
		templateUrl: 'templates/funlovers.html',
		controller: "funloversCntrl"
	})
	.when('/temples',{
		templateUrl: 'templates/temples.html',
		controller: "templesCntrl"
	})
	.when('/music',{
		templateUrl: 'templates/music.html',
		controller: "musicCntrl"
	})
	.when('/heritage',{
		templateUrl: 'templates/heritage.html',
		controller: "heritageCntrl"
	})
	.otherwise({redirectTo: './index'});

	// $locationProvider.html5Mode(true);

});

app.controller("gourmetCntrl",function($scope){
	$scope.message="yipeeee";
});

app.controller("shoppingCntrl",function($scope){
	$scope.message="yipeeeeesss";
});

app.controller("funloversCntrl",function($scope){
	$scope.message="aaaaaa";
});

app.controller("templesCntrl",function($scope){
	$scope.message="bbbbbaaaaaa";
});

app.controller("musicCntrl",function($scope){
	$scope.message="ccccccaaaaaa";
});

app.controller("heritageCntrl",function($scope){
	$scope.message="ccccccaaaadsadaaa";
});