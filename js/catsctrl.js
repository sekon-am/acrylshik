angular.module('catsapp', [])
	.controller('catsctrl', ['$scope', '$http',
		function($scope, $http){
			$http.get('/mancats/lst').success(
				function(data){
					$scope.cats = data.cats;
					$scope.rootcats = data.rootcats;
				}
			);
			$scope.cats_save = function () {
				$http.post('/mancats/save',{
						'cats':JSON.stringify($scope.cats)
						})
					.success(function(data){
						});
			}
		}
	]);