<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert Data Into Database using Angular JS with PHP Mysql</title>
<!-- Bootstrap --> 
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #e3f2fd;">
<div class="container">
    <h3 align="center">Fill In Patient Records</h3>
    <div ng-app="sa_insert" ng-controller="controller">
        <label>Patient ID</label><input type="text" name="Patient_id" ng-model="Patient_id" class="form-control" autofocus autocomplete="on"><br/>
        <label>Patient Name</label><input type="text" name="Patient_name" ng-model="Patient_name" class="form-control" autocomplete="on"><br/>
        <label>Drug Name</label><input type="text" name="Drug_name" ng-model="Drug_name" class="form-control" autocomplete="on"><br/>
        <label>Number Issued</label><input type="text" name="Number_issued" ng-model="Number_issued" class="form-control" autocomplete="on"><br/>
        <label>Cost Per Item</label><input type="text" name="Cost_per_item" ng-model="Cost_per_item" class="form-control" autocomplete="on"><br/>
        <input type="submit" name="Submit" class="btn btn-success" ng-click="insert()" value="Submit" align="center">
    </div>
</div>
<!-- Script -->
<script>
var app = angular.module("sa_insert", []);
app.controller("controller", function($scope, $http) {
    $scope.insert = function() {
        $http.post(
            "enterdata.php", {
                'Patient_id': $scope.Patient_id,
                'Patient_name': $scope.Patient_name,
                'Drug_name': $scope.Drug_name,
                'Number_issued': $scope.Number_issued,
                'Cost_per_item': $scope.Cost_per_item
            }
        ).success(function(data) {
            alert(data);
            $scope.Patient_id = null;
            $scope.Patient_name= null;
            $scope.Drug_name= null;
            $scope.Number_issued= null;
            $scope.Cost_per_item= null;
        });
    }
});
</script>
</form>
</body>
</html>