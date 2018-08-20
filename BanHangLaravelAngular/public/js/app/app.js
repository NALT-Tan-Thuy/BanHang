var app = angular.module('TrangChu', ['ngRoute'])
    .directive('onFinishRender', function ($timeout) {
        return {
            restrict: 'A',
            link: function (scope, element, attr) {
                if (scope.$last === true) {
                    $timeout(function () {
                        scope.$emit(attr.onFinishRender);
                    });
                }
            }
        }
    });
// var app = angular.module('TrangChu', ['ngRoute'], function ($interpolateProvider) {
//     $interpolateProvider.startSymbol('<%');
//     $interpolateProvider.endSymbol('%>');
// });
app.config(($routeProvider) => {

    $routeProvider.when('/', {
        templateUrl: 'giaodien/templates/trangchu.html',
        controller: 'trangchuController'
    });

    $routeProvider.when('/demo', {
        templateUrl: 'giaodien/demo.html',
        controller: 'demoController'
        // authenticated : true
    });

    $routeProvider.otherwise('/');
});


app.config(['$locationProvider', function ($locationProvider) {
	//Xóa ! trên link (đường dẫn)
	$locationProvider.hashPrefix('');
	//Xóa #! trên link (đường dẫn)
    // $locationProvider.html5Mode(true);
}]);

//Xóa ng-binding và ng-scope khing-repeat
app.config(['$compileProvider', function ($compileProvider) {
    $compileProvider.debugInfoEnabled(false);
}]);


app.controller('demoController', function ($scope) {

});
