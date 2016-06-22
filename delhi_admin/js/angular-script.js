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

	//$(#categoryForm).slideUp();
	$('#editForm').css('display', 'block');
}
$scope.showInsertForm=function()
{
	$('#categoryForm').css('display', 'block');
}
$scope.updateInfo = function(info){
//$scope.content="somethhing went wrong"
$http.post('DataBaseFiles/updateDetails.php',{"category_id":info.category_id,"category_name":info.category_name}).success(function(data)
{
 $scope.show_form=true;
if (data == true) {
 	$scope.content=data;
 getInfo();
$('#editForm').css('display', 'none');
}
});
}

$scope.deleteInfo = function(info){
$http.post('DataBaseFiles/deleteDetails.php',{"del_category_id":info.category_id}).success(function(data){
if (data == true) {
getInfo();
}
});
}
}]);



