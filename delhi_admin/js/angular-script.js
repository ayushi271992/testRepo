// Application module
var crudApp = angular.module('crudApp',[]);
crudApp.controller("DbController",['$scope','$http', function($scope,$http){
getInfo();
function getInfo(){
$http.post('DataBaseFiles/categoryDetails.php').success(function(data){
// Stored the returned data into scope
$scope.details = data;
});
}

$scope.insertInfo = function(info){
$http.post('DataBaseFiles/insertDetails.php',{"category_name":info.category_name}).success(function(data)
{
if (data == true) {
getInfo();
// Hide details insertion form
$('#categoryForm').css('display', 'none');
//console.log("data inserted successfully");
}});
}

$scope.currentUser={};
$scope.editInfo=function(info){
	$scope.currentUser=info;
	$(#categoryForm).slideUp();
	$(#editForm).slideToggle();
}
}]);



