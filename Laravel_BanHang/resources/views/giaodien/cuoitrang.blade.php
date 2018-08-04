<!-- phần cuối trang -->
<footer>
        <div id="phanCuoi" class="row">
            <div class="footer" id="footer">
                <div class="container">
                    <div class="row">
                        @foreach($loaisanphamshare as $lsps)
                        <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                            <h3> Danh mục {{$lsps->ten}} </h3>
                            <ul>
                                    <?php $i =0;?> 
                                @foreach($sanphamshare as $sps)
                                @if($sps->id_loaisanpham == $lsps->id)
                                <?php if($i == 4) break;?> 
                                <?php $i++;?> 
                                <li>
                                    <a href="#"> {{$sps->ten}} </a>
                                </li>
                                <li>
                                @endif
                                @endforeach
                            </ul>
                        </div>
                        @endforeach
                        <div style="text-align: center;" class="col-lg-3  col-md-3 col-sm-6 col-xs-12 ">
                            <h3> Liên hệ với chúng tôi </h3>
                            <ul>
                                <li>
                                    <div class="input-append newsletter-box text-center">
                                        <input type="text" class="full text-center" placeholder="Email ">
                                        <button class="btn  bg-gray" type="button"> Đi tới
                                            <i class="fa fa-long-arrow-right"> </i>
                                        </button>
                                    </div>
                                </li>
                            </ul>
                            <ul class="social">
                                <li>
                                    <a href="javascript:void(0)">
                                        <i class=" fa fa-facebook">   </i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i class="fa fa-twitter">   </i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i class="fa fa-google-plus">   </i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i class="fa fa-pinterest">   </i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i class="fa fa-youtube">   </i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--/.row-->
                </div>
                <!--/.container-->
            </div>
            <!--/.footer-->
    
            <div class="footer-bottom">
                <div class="container">
                    <p class="pull-left"> Thiết kế bởi © Trần Quang Tân - Huỳnh Văn Thùy. </p>
                    <div class="pull-right">
                        <ul class="nav nav-pills payments">
                            <li>
                                <i class="fa fa-cc-visa"></i>
                            </li>
                            <li>
                                <i class="fa fa-cc-mastercard"></i>
                            </li>
                            <li>
                                <i class="fa fa-cc-amex"></i>
                            </li>
                            <li>
                                <i class="fa fa-cc-paypal"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Xong phần cuối -->