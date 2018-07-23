document.addEventListener("DOMContentLoaded", function() {
    var slideshow = document.getElementById('Slide');
    slideshow.classList.add('animated');
    slideshow.classList.add('zoomIn');
    slideshow.style.animationDelay = "0.1s";
    slideshow.style.animationDuration = "3s";

    var hieuunggiohang = document.getElementById('hieuunggiohang');
    hieuunggiohang.classList.add('animated');
    hieuunggiohang.classList.add('slideInRight');
    hieuunggiohang.style.animationDelay = "0.1s";
    hieuunggiohang.style.animationDuration = "3s";

    var searchForm = document.getElementById('searchForm');
    searchForm.classList.add('dichuyen');

    var thegioimuasam = document.getElementById('thegioimuasam');
    thegioimuasam.classList.add('animated');
    thegioimuasam.classList.add('slideInLeft');
    thegioimuasam.style.animationDelay = "0.1s";
    thegioimuasam.style.animationDuration = "3s";

    var khauHieuDau = document.getElementById('khauHieuDau');
    var trangthai = true;
    //bắt sự kiện khi người dùng cuộn chuột
    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 100) {
            if (trangthai == true) {
                khauHieuDau.classList.add('animated');
                khauHieuDau.classList.add('zoomIn');
                khauHieuDau.style.animationDuration = "3s";
            }
        }
    })

}, false);