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

app.config(($routeProvider, $locationProvider, $compileProvider) => {

    $routeProvider.when('/', {
        templateUrl: 'giaodien/templates/trangchu.html',
        controller: 'trangchuController'
    });

    $routeProvider.when('/sanphamtheoloai', {
        templateUrl: 'giaodien/templates/sanphamtheoloai.html',
        controller: 'sanphamtheoloaiController'
        // authenticated : true
    });

    $routeProvider.when('/sanpham', {
        templateUrl: 'giaodien/templates/sanpham.html',
        controller: 'sanphamController'
        // authenticated : true
    });

    $routeProvider.when('/dathang', {
        templateUrl: 'giaodien/templates/dathang.html',
        controller: 'dathangController'
        // authenticated : true
    });

    $routeProvider.otherwise('/');

    //Xóa ! trên link (đường dẫn)
	$locationProvider.hashPrefix('');
	//Xóa #! trên link (đường dẫn)
    // $locationProvider.html5Mode(true);

    //Xóa ng-binding và ng-scope khing-repeat
    $compileProvider.debugInfoEnabled(false);
});


// app.config(['$locationProvider', function ($locationProvider) {
// 	//Xóa ! trên link (đường dẫn)
// 	$locationProvider.hashPrefix('');
// 	//Xóa #! trên link (đường dẫn)
//     // $locationProvider.html5Mode(true);
// }]);


app.controller('sanphamtheoloaiController', function ($scope) {
    console.log(1);
    $scope.trangchu = "aaaaaaa";
});

app.controller('sanphamController', function ($scope) {
    console.log(1);
});

app.controller('dathangController', function ($scope) {
    console.log(1);
});

// app.controller('trangchuNavBarController', function ($scope, $http) {

//     $http({
//         method: 'get',
//         url: 'trangchu/getAllData'
//     }).then(function (response) {
//         $scope.trangchu = response.data['trangchu'];
//         $scope.loaisanpham = response.data['loaisanpham'];
//         $scope.loaisanphamkhac = response.data['loaisanphamkhac'];
//         $scope.sanpham = response.data['sanpham'];
//         $scope.slide = response.data['slide'];
//         // console.log(response.data['trangchu']);
//     }, function (error) {
//         console.log(error, 'không có dữ liệu');
//     });

//     $scope.$on('ngRepeatFinished', function (ngRepeatFinishedEvent) {
//         $('ul.nav li.dropdown').hover(function () {
//             $(this).find('.dropdown-menu').stop(true, true).delay(0).fadeIn(0);
//         }, function () {
//             $(this).find('.dropdown-menu').stop(true, true).delay(0).fadeOut(0);
//         });

//         $('ul.nav li.dropdown').on('click', function (event) {
//             event.stopPropagation();
//         });
//     });

//     if ($scope.slide !== undefined) {
//         var slideImages = [];
//         for (var i = 0; i < $scope.slide.length; i++) {
//             var b = {};
//             b.src = 'uploads/slide/' + $scope.slide[i].img;
//             slideImages.push(b);
//         }
//         jR3DCarousel = $('.jR3DCarouselGallery').jR3DCarousel({
//             width: 1140,
//             height: 418,
//             slides: slideImages
//         });

//         function slideShownCallback($slide) {
//             console.log("Slide shown: ", $slide.find('img').attr('src'))
//         }

//         // countslide++;
//     }
// });

