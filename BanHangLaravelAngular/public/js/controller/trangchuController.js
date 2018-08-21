var countslide = 0;
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
        $scope.loaisanphamall = response.data['loaisanphamall'];
        console.log(response.data['trangchu']);
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

    $scope.$on('ngRepeatDanhMucFinished', function (ngRepeatFinishedEvent) {
        $('.search-panel .dropdown-menu').find('a').click(function (e) {
            e.preventDefault();
            var param = $(this).attr("href").replace("#", "");
            var concept = $(this).text();
            $('.search-panel span#search_concept').text(concept);
            $('.input-group #search_param').val(param);
        });
        console.log(2);
    });

    $scope.$on("$viewContentLoaded", function () {
        var script = document.createElement('script');
        script.type = 'text/javascript';
        script.src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js";
        document.body.appendChild(script);
    });

    if ($scope.slide !== undefined) {
        var slideImages = [];
        for (var i = 0; i < $scope.slide.length; i++) {
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
