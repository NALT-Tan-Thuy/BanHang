app.controller('trangchuController', function ($scope, $http) {

    $http({
        method: 'get',
        url: 'trangchu/getAllData'
    }).then(function (response) {
        $scope.trangchu = response.data['trangchu'];
        $scope.loaisanpham = response.data['loaisanpham'];
        $scope.loaisanphamkhac = response.data['loaisanphamkhac'];
        $scope.sanpham = response.data['sanpham'];
        $scope.slide = response.data['slide'];
        a = 1;
        // console.log(response.data['loaisanpham']);


    }, function (error) {
        console.log(error, 'không có dữ liệu');
    });

    $scope.$on('ngRepeatFinished', function (ngRepeatFinishedEvent) {
        $('ul.nav li.dropdown').hover(function () {
            $(this).find('.dropdown-menu').stop(true, true).delay(0).fadeIn(0);
        }, function () {
            $(this).find('.dropdown-menu').stop(true, true).delay(0).fadeOut(0);
        });

        $('ul.nav li.dropdown').on('click', function (event) {
            event.stopPropagation();
        });
    });

    if ($scope.slide !== undefined) {
        var slideImages = [];
        for(var i = 0; i < $scope.slide.length; i++){
            var b = {};
            b.src = 'uploads/slide/' + $scope.slide[i].img;
            slideImages.push(b);
        }
        jR3DCarousel = $('.jR3DCarouselGallery').jR3DCarousel({
            width: 1140,
            height: 418,
            slides: slideImages
        });

        function slideShownCallback($slide) {
            console.log("Slide shown: ", $slide.find('img').attr('src'))
        }
    }
});
