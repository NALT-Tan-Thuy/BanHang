<!DOCTYPE html>
<html lang="en" ng-app="TrangChu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="http://myphamfokin.com/thumbs/cart-mb.png">
    <title>@yield('title')</title>
    <base href="{{asset('')}}">
    <!-- Chữ cho "Thế giới mua sắm" -->
    <link href="https://fonts.googleapis.com/css?family=Bungee+Inline" rel="stylesheet">
    <!-- Font hiển thị "Tên của shop trên Menu chính" -->
    <link href="https://fonts.googleapis.com/css?family=Pattaya" rel="stylesheet">
    <!-- font khẩu hiệu " mua sắm thả ga" -->
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <!-- font cho thẻ a Menu chính -->
    <link href="https://fonts.googleapis.com/css?family=Cormorant+Upright|Dancing+Script" rel="stylesheet">
    <!-- font cho chữ trong thanh tìm kiếm hàng hóa tương ứng -->
    <link href="https://fonts.googleapis.com/css?family=Arima+Madurai" rel="stylesheet">
    <!-- font cho lời cảm ơn -->
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|VT323" rel="stylesheet">
    <!-- CSS bootstrap -->
    <link rel="stylesheet" href="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css')}}">
    <!-- font awesome cho các nút footer -->
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">
    <!-- animation -->
    <link rel="stylesheet" href="{{ asset('giaodien/css/animate.css')}}">
    <!-- Trở về đầu trang -->
    <link rel="stylesheet" href="{{ asset('giaodien/css/backToTop.min.css') }}">

    <!-- chèn link css trang chủ -->
    <link rel="stylesheet" href="{{ asset('giaodien/css/trangchu.css')}}">

    <!-- Chèn css cho nội dung show sản phẩm -->
    <!-- CSS Sản phẩm -->
    <link rel="stylesheet" href="{{ asset('giaodien/css/sanpham.css')}}">
	<script>
		var csrfToken = "{{ csrf_token() }}";
	</script>
</head>

<body>
    
    <div ng-include="'giaodien/templates/include/navbar.html'"></div>

    <div ng-controller="trangchuController">
		<div ng-view></div>
    </div>
    
    <div ng-include="'giaodien/templates/include/loicamon.html'"></div>
    <!-- Xong nội dung -->

    <div ng-include="'giaodien/templates/include/footer.html'"></div>

    <!-- jQuery library -->
    <script src="{{ asset('giaodien/js/jquery-v3.3.1.js') }}"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Slide -->
    <script src="{{ asset('giaodien/js/slide/jR3DCarousel.min.js') }}"></script>
    <!-- Trở về đầu trang -->
    <script src="{{ asset('giaodien/js/backgotop/jquery-backToTop.js') }}"></script>

    <script src="{{ asset('giaodien/js/_jquery.js') }}"></script>

    <script>
        $(document).ready(function (e) {
            $('.search-panel .dropdown-menu').find('a').click(function (e) {
                e.preventDefault();
                var param = $(this).attr("href").replace("#", "");
                var concept = $(this).text();
                $('.search-panel span#search_concept').text(concept);
                $('.input-group #search_param').val(param);
            });
        });

    </script>

    <!-- Angularjs -->
    <script src="{{ asset('bower_components/angular/angular.min.js') }}"></script>
    <script src="{{ asset('bower_components/angular-route/angular-route.min.js') }}"></script>
    <script src="{{ asset('js/app/app.js') }}"></script>
    <script src="{{ asset('js/controller/trangchuController.js') }}"></script>
</body>

</html>
