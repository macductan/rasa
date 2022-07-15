{$dir_anh = 'upload/sanpham/'}
<div class="xv-slider-wrap">
    <div class="owl-carousel slider_controls1" data-dots=true data-slides="1" data-slides-md="1" data-slides-sm="1" data-margin="0" data-loop="true" data-prev="fa fa-angle-left" data-next="fa fa-angle-right" data-nav="false">
        {foreach $top_3_sp as $sanpham}
        <div class="xv-slide" style="background-image:url({$base_url}assets/img/home1-slider.png);">
            <div class="container">
                <div class="row">
                    <div class="hidden-xs hidden-sm col-md-6">
                        <img src="{$base_url}{$dir_anh}{$sanpham['sPK_Ma_SP']}/{$sanpham['sPimage']}" alt="">
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="xv-slider-content clearfix color-white">
                            <h1>{$sanpham['sTen_SP']}</h1>
                            <p>{$sanpham['sMota']}</p>
                            <a href="#" class="btn btn-grey btn-price">Từ {number_format($sanpham['sGiaSP'], 0, '', '.')} VNĐ</a>
                            <a href="#" class="btn btn-grey">Mua ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {/foreach}
    </div>
</div>
<!--slider Wrap-->

<!--=================================
Benifits
=================================-->

<section class="xv-benefits pt-30 pb-30 shadow-bottom">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="xv-benefit">
                    <i class="fa fa-plane"></i>
                    <div class="content">
                        <h5>Miễn phí vận chuyển</h5>
                        <p>Khi mua hóa đơn trên 1 triệu VNĐ</p>
                    </div>
                    <!--content-->
                </div>
                <!--xv-benefit-->
            </div>
            <!--column-4-->
            <div class="col-sm-4">
                <div class="xv-benefit">
                    <i class="fa fa-undo"></i>
                    <div class="content">
                        <h5>Chính sách 1 đổi 1 trong 30 ngày</h5>
                        <p>Trong 30 ngày đầu nếu có lỗi xảy ra cửa hàng sẽ tiền hành 1 đổi 1</p>
                    </div>
                    <!--content-->
                </div>
                <!--xv-benefit-->
            </div>
            <!--column-4-->
            <div class="col-sm-4">
                <div class="xv-benefit">
                    <i class="fa fa-credit-card"></i>
                    <div class="content">
                        <h5>Thanh toán bằng ví điện tử</h5>
                        <p>Thanh toán trực tuyến dễ dàng và chính xác</p>
                    </div>
                    <!--content-->
                </div>
                <!--xv-benefit-->
            </div>
            <!--column-4-->
        </div>
        <!--row-->
    </div>
    <!--container-->
</section>
<!--xv-benefits-->

<!--=================================
new items
=================================-->

<div class="container">
    <div class="product-overview pt-25 pb-45">
        <div class="row">
            <div class="col-xs-12 col-sm-3 hidden-xs">
                <nav class="secondary-nav">
                    <form class="search-form">
                        <input type="text" placeholder="Tìm kiếm">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                    <!--search form-->
                    <ul>
                        <li><a href="#"><span class="p-count">225</span>Bút</a></li>
                        <li><a href="#"><span class="p-count">100</span>Bàn</a></li>
                        <li><a href="#"><span class="p-count">105</span>Máy tính</a></li>
                        <li><a href="#"><span class="p-count">357</span>Headphones</a></li>
                        <li><a href="#"><span class="p-count">400</span>Gaming Gear</a></li>
                        <li><a href="#"><span class="p-count">500</span>Accessories</a></li>
                        <li><a href="#"><span class="p-count">248</span>Other</a></li>
                    </ul>
                </nav>
                <!--secondary nav-->
            </div>

            <div class="col-xs-12 col-sm-9">
                <section class="new-product">
                    <header class="sec-heading text-center">
                        <h2><span>Mới</span></h2>
                        <span>Cập nhật vào {date("d/m/Y")}</span>
                    </header>
                    <!--header-->
                    <div class="xv-product-slides mt-25 mb-25">
                        <div class="owl-carousel slider_controls1 products" data-thumbnail="figure .xv-superimage" data-product=".xv-product" data-dots="false" data-prev="fa fa-angle-left" data-next="fa fa-angle-right" data-slides="3" data-slides-md="2" data-slides-sm="1" data-margin="24" data-loop="true" data-nav="true">
                            {foreach $sp_moi as $sanpham}
                            <div data-pid="xyz100" data-name="Smartphone Apple iPhone 5 64GB" data-category="mobiles" data-price="250" class="xv-product style shadow-around">
                                <figure>
                                    <a href="#"><img class="xv-superimage" src="{$base_url}{$dir_anh}{$sanpham['sPK_Ma_SP']}/{$sanpham['sPimage']}" alt="" /></a>
                                    <figcaption>
                                        <ul>
                                            <li><a data-qv-tab="#qvt-wishlist" class="btn-cart flytoQuickView btn-square btn-blue" href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a data-qv-tab="#qvt-compare" class="btn-cart flytoQuickView btn-square btn-blue" href="#"><i class="fa fa-exchange"></i></a></li>
                                            <li><a class="btn-cart btn-square btn-blue" href="#"><i class="fa fa-expand"></i></a></li>
                                        </ul>
                                    </figcaption>
                                </figure>
                                <div class="xv-product-content">
                                    <h3><a href="detail1.html">{$sanpham['sTen_SP']}</a></h3>
                                    <!-- <ul class="color-opt">
                                        <li><a href="#">White</a></li>
                                        <li><a href="#">Black</a></li>
                                        <li><a href="#">Gold</a></li>
                                    </ul> -->
                                    <ul class="color-opt">
                                        <li> </li>
                                    </ul>

                                    <div class="xv-rating stars-5"></div>
                                    <span class="xv-price">{number_format($sanpham['sGiaSP'], 0, '', '.')} VNĐ</span>
                                    <a data-qv-tab="#qvt-cart" href="#" class="product-buy flytoQuickView">Mua</a>
                                </div>
                            </div>
                            {/foreach}
                        </div>
                    </div>
                </section>
            </div>
            <!--co-->
        </div>
        <!--row-->
    </div>
    <!--product-overview -->
</div>
<!--container-->

<!--========================================================================
hot deal / No fly to cart when clicked on "buy now", instead open deal page.
===========================================================================-->
<!--========================================
featured
===========================================-->

<div class="container">
    <div class="xv-featured pt-25 pb-30">

        <header class="sec-heading text-center">
            <!-- <div class="category-wrap style">
                <span class="categorise"><i class="fa fa-bars"></i>All Categories<i class="fa style fa-caret-down"></i></span>
                <ul class="cat-dropDown">
                    <li><a href="#">Smart Phones</a></li>
                    <li><a href="#">Tablets</a></li>
                    <li><a href="#">Cameras</a></li>
                    <li><a href="#">Headphones</a></li>
                    <li><a href="#">Gaming Gear</a></li>
                </ul>
            </div> -->
            <h2><span>Nổi bật</span></h2>
            <span>Cập nhật vào {date("d/m/Y")}</span>
        </header>
        <!--header-->

        <div class="xv-product-slides mt-25 mb-25">
            <div class="owl-carousel slider_controls1 products" data-thumbnail="figure .xv-superimage" data-product=".xv-product" data-dots="false" data-prev="fa fa-angle-left" data-next="fa fa-angle-right" data-slides="4" data-slides-md="2" data-slides-sm="1" data-margin="24" data-loop="true" data-nav="true">

                {foreach $sp_moi as $sanpham}
                <div data-pid="xyz200" data-name="Smartphone Apple iPhone 5 64GB" data-category="mobiles" data-price="250" class="xv-product style shadow-around">
                    <figure>
                        <a href="#"><img class="xv-superimage" src="{$base_url}{$dir_anh}{$sanpham['sPK_Ma_SP']}/{$sanpham['sPimage']}" alt="" /></a>
                        <figcaption>
                            <ul>
                                <li><a data-qv-tab="#qvt-wishlist" class="btn-cart flytoQuickView btn-square btn-blue" href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a data-qv-tab="#qvt-compare" class="btn-cart flytoQuickView btn-square btn-blue" href="#"><i class="fa fa-exchange"></i></a></li>
                                <li><a class="btn-cart btn-square btn-blue" href="#"><i class="fa fa-expand"></i></a></li>
                            </ul>
                        </figcaption>
                    </figure>
                    <!--figure-->
                    <div class="xv-product-content">
                        <h3><a href="detail1.html">{$sanpham['sTen_SP']}</a></h3>
                        <!-- <ul class="color-opt">
                            <li><a href="#">White</a></li>
                            <li><a href="#">Black</a></li>
                            <li><a href="#">Gold</a></li>
                        </ul> -->
                        <ul class="color-opt">
                            <li> </li>
                        </ul>
                        <div class="xv-rating stars-5"></div>
                        <span class="xv-price">{$sanpham['sGiaSP']}</span>
                        <a data-qv-tab="#qvt-cart" href="#" class="product-buy flytoQuickView">Mua</a>
                    </div>
                </div>
                {/foreach}
                <!--xv-product-->
            </div>
            <!--owl carousel-->
        </div>
    </div>
    <!--xv-featured-->
</div>
<!--container-->

<!--========================================
watches
===========================================-->

<!--=================================
Testimonial
=================================-->

<div class="xv-testimonial pb-15">
    <div class="container">
        <div class="owl-carousel slider_controls1" data-dots="true" data-slides="1" data-slides-md="1" data-slides-sm="1" data-margin="0" data-loop="true" data-nav="false">
            <div class="testi-slide text-center">
                <figure>
                    <img src="{$base_url}assets/img/marketing_1.jpg" alt="">
                </figure><br><br>
                <q>Tiếp cận với mỗi khách hàng với ý tưởng giúp họ giải quyết một vấn đề hoặc giúp họ đạt được mục tiêu, không phải là bán một sản phẩm hoặc dịch vụ.</q><br><br>
                <!-- <cite>John Doe</cite> -->
            </div>
            <!--testiSlide-->
            <div class="testi-slide text-center">
                <figure>
                    <img src="{$base_url}assets/img/marketing_1.jpg" alt="">
                </figure><br><br>
                <q>Người bán hàng tuyệt vời không phải tự nhiên sinh ra hay tạo ra. Họ phát triển dần dần qua thời gian dựa vào những cống hiến hướng tới sự hoàn hảo và tinh thần luôn sẵn sàng phục vụ của họ.</q><br><br>
                <!-- <cite>John Doe</cite> -->
            </div>
            <!--testiSlide-->
            <div class="testi-slide text-center">
                <figure>
                    <img src="{$base_url}assets/img/marketing_1.jpg" alt="">
                </figure><br><br>
                <q>Giữ cho mình tích cực, vui vẻ và luôn có mục tiêu. Bán hàng thành công là 80% thái độ và chỉ 20% năng khiếu.</q><br><br>
                <!-- <cite>John Doe</cite> -->
            </div>
            <!--testiSlide-->
        </div>
        <!--testiSlider-->
    </div>
    <!--container-->
</div>
<br>