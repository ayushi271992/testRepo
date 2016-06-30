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


// $scope.changedValue=function(item)
// {
// 	$scope.selectedElement=item;
// }


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

$scope.select_subCategory=function(info)
{
	
	$scope.content1=info;
	getSubCategoryDetails(info);
	$('#SubcategoryForm').css('display','block');
}
function getSubCategoryDetails(info){
$http.post('DataBaseFiles/subcategoryDetails.php',{"SubCategoryName":info}).success(function(data){
// Stored the returned data into scope
$('#subcategory_table').css('display','block');
$('#editSubcategoryForm').css('display', 'none');
$scope.subDetails = data;
//$('#SubcategoryForm').css('display','block');
});
}

$scope.insertInfoSubCategory = function(info,SubCategoryName){

$http.post('DataBaseFiles/insertSubcategoryDetails.php',{"name":info.Subcategory_name,"url1":info.Subcategory_url1,
	"url2":info.Subcategory_url2,"url3":info.Subcategory_url3,"desc":info.Subcategory_desc,"metro":info.Subcategory_metro,"destination_To":info.Subcategory_dest_to,
	"opening_time":info.Subcategory_openingTime,"closing_time":info.Subcategory_closingTime,"cost":info.Subcategory_cost,
	"daysClosed":info.Subcategory_daysClosed,"subcategoryName":SubCategoryName}).success(function(data)
{
if (data == true) {
// Hide details insertion form
$('#SubcategoryForm').css('display','none');
getSubCategoryDetails(SubCategoryName);
//console.log("data inserted successfully");
}
});
}


$scope.editSubcategoryInfo=function(info)
{
	$scope.currentSubcategory=info;
	$('#editSubcategoryForm').css('display', 'block');
}

$scope.updateSubcategoryInfo=function(info,SubCategoryName)
{
	// $http.post('DataBaseFiles/updateSubcategoryDetails.php',{"id":info.id,"url":info.Image_Url,"subcategoryName":SubCategoryName}).success(function(data)
	// {
	$http.post('DataBaseFiles/updateSubcategoryDetails.php',{"id":info.id,"name":info.Image_Name,"url1":info.Image_Url1,
	"url2":info.Image_Url2,"url3":info.Image_Url3,"desc":info.Desc,"metro":info.Metro,"destination_To":info.Destination_to,
	"opening_time":info.OpeningTime,"closing_time":info.ClosingTime,"cost":info.Cost,
	"daysClosed":info.DaysClosed,"subcategoryName":SubCategoryName}).success(function(data)
{
if (data == true) {
	
// // Hide details insertion form
	
	 
	 $('#editSubcategoryForm').css('display','none');

	 //$('#subcategory_table').css('display','block');
//console.log("data inserted successfully");
//$scope.something1=SubCategoryName;
}
});

}

$scope.deleteSubcategoryInfo = function(info,SubCategoryName){
$http.post('DataBaseFiles/deleteSubcategoryDetails.php',{"id":info.id,"subcategoryName":SubCategoryName}).success(function(data){
 if (data == true) {
 getSubCategoryDetails(SubCategoryName);
 }
});
}

}]);



