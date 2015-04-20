angular.module('catsapp', [])
	.controller('catsctrl', ['$scope', '$http',
		function($scope, $http){
			$http.get('/mancats/lst').success(
				function(data){
					$scope.cats = data;
				}
			);
		}
	]);