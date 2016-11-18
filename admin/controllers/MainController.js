(function(){
"use strict"
angular.module('SELTEX',['vcRecaptcha'])
.controller("MainController", function ($scope,$http, vcRecaptchaService) {
	$scope.user={};
	$scope.test=[];
	$scope.key='6LecUQUTAAAAAN49g1x5t4Oz7r65ZTNbMUMs28AN';
	$scope.showForm=false;
	$scope.setResponse = function (response) {
		$scope.user.response = response;
		$scope.showForm=true;
	};
	$scope.checkUser = function () {
			mySpin.start();
			$scope.showForm=false;
			$http({
					method: 'POST',
					url: 'data/checkUser.php',
					data: $scope.user,
					headers: {'Content-Type': 'application/x-www-form-urlencoded'}
				}).
				success(function(data){
					$scope.user={};
					$scope.user.name=data.name;
					mySpin.stop();
				});
	};
	$scope.getVisitors = function () {
		$http.get('data/getLogs.php').success(function(data) {
			$scope.logs = data;
		});
	};
});
})();
