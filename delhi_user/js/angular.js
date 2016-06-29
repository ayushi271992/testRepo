
var app= angular.module('myApp', []);
app.controller("MyCtrl", ['$scope','$http',function($scope,$http)
{

 
  $scope.Heritage_Seeker = function () 
  {
    $http.post('database/Heritage_Seeker_Leftpanel_Load.php').success(function(data)
    {
      $scope.content2=data;
      //$scope.msg="something something went wrong";
    });
  }; 

  $scope.Heritage_Seeker_openinfo=function(image)
  {  
    $('#container1').css('display','block');
    $http.post('database/Heritage_Seeker_Info_Load.php',{"Heritage_Seeker_Image_Name1":image.name}).success(function(data)
    {
      $scope.content1=data;
    });
  };



  $scope.Food_Fanatic = function ()
  {
    $http.post('database/Food_Fanatic_Leftpanel_Load.php').success(function(data)
    {
      $scope.content2=data;
    });
  }; 

  $scope.Food_Fanatic_openinfo=function(image)
  {  
    $http.post('database/Food_Fanatic_Info_Load.php',{"Food_Fanatic_Image_Name1":image.name}).success(function(data)
    {
      $scope.content1=data;
    });
  };



  $scope.Fun_Lovers = function ()
  {
    $http.post('database/Fun_Lovers_Leftpanel_Load.php').success(function(data)
    {
      $scope.content2=data;
    });
  }; 

  $scope.Fun_Lovers_openinfo=function(image)
  {  
    $http.post('database/Fun_Lovers_Info_Load.php',{"Fun_Lovers_Image_Name1":image.name}).success(function(data)
    {
      $scope.content1=data;
    });
  };



$scope.Music_Mania = function ()
  {
    $http.post('database/Music_Mania_Leftpanel_Load.php').success(function(data)
    {
      $scope.content2=data;
    });
  }; 

  $scope.Music_Mania_openinfo=function(image)
  {  
    $http.post('database/Music_Mania_Info_Load.php',{"Music_Mania_Image_Name1":image.name}).success(function(data)
    {
      $scope.content1=data;
    });
  };



$scope.Shopaholic = function ()
  {
    $http.post('database/Shopaholic_Leftpanel_Load.php').success(function(data)
    {
      $scope.content2=data;
    });
  }; 

  $scope.Shopaholic_openinfo=function(image)
  {  
    $http.post('database/Shopaholic_Info_Load.php',{"Shopaholic_Image_Name1":image.name}).success(function(data)
    {
      $scope.content1=data;
    });
  };



$scope.Spiritual_Divine = function ()
  {
    $http.post('database/Spiritual_Divine_Leftpanel_Load.php').success(function(data)
    {
      $scope.content2=data;
    });
  }; 

  $scope.Spiritual_Divine_openinfo=function(image)
  {  
    $http.post('database/Spiritual_Divine_Info_Load.php',{"Spiritual_Divine_Image_Name1":image.name}).success(function(data)
    {
      $scope.content1=data;
    });
  };

}]);