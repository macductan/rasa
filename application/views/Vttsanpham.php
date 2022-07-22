<div class="container">
    <div class="single-product-detail pt-60 pb-30">
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <div class="product-slider-wrap text-center shadow-around">
                    <div class="product-slide">
                        <figure>
                            <img id="img_goc" src="{$base_url}{$dir_anh}{$sanpham['sPK_Ma_SP']}/{$sanpham['sPimage']}" alt="" width="70%">
                        </figure>
                    </div>
                    <!--product-slide-->
                    <div class="product-slider styleDetail">
                        <div class="detail-slider">
                            <div class="owl-carousel slider_controls5" data-dots="false" data-prev="fa fa-angle-left" data-next="fa fa-angle-right" data-margin="20" data-slides="4" data-slides-md="3" data-slides-sm="1" data-loop="false" data-nav="true">
                                {foreach $sanpham['dir_img'] as $dir}
                                <figure class="border-around">
                                    <a class=""><img class="img_phu" src="{$base_url}{$dir}" alt=""></a>
                                </figure>
                                {/foreach}
                                <!-- <figure class="border-around">
                                    <a href="#"><img src="{$base_url}upload\sanpham\thanglong\anh_phu_2.png" alt=""></a>
                                </figure>
                                <figure class="border-around">
                                    <a href="#"><img src="{$base_url}upload\sanpham\thanglong\anh_phu_3.jpg" alt=""></a>
                                </figure>
                                <figure class="border-around">
                                    <a href="#"><img src="{$base_url}upload\sanpham\thanglong\anh_phu_4.jpg" alt=""></a>
                                </figure> -->
                            </div>

                        </div>
                        <!--product-slider-->
                    </div>
                </div>
                <!--column-6-->

            </div>
            <!--column-6-->
            <div class="col-xs-12 col-md-6">
                <div class="single-product-overview">
                    <h2>{$sanpham['sTen_SP']}</h2>
                    <div class="">&nbsp;</div>
                    <!-- <ul class="review">
                            <li>15 Review(s)&emsp;</li>
                            <li><a href="#">Make a Review</a></li>
                        </ul> -->
                    <p class="no-mar">{$sanpham['sMota']}</p>
                    <ul class="product-description mt-35 mb-35">
                        <li><span>Hãng sản xuất</span>: {$sanpham['sHangSX']}</li>
                    </ul>
                    <div class="cart-options">
                        <p class="price"><span>{number_format($sanpham['sGiaSP'], 0, '', '.')} VNĐ</span>
                            <!-- <del>350.000đ</del> -->
                        </p>
                        <ul class="cart-buttons mt-45 clearfix">
                            <li class="btn-color-opt">

                                <div class="custome-select">
                                    <b class="fa fa-caret-down"></b>
                                    <span>Chọn loại sản phẩm</span>
                                    <select id="phanloai">
                                        <option value="khac">Chọn màu sắc</option>
                                        {foreach $sanpham['phanloai'] as $key => $ten}
                                        <option value="{$key}">{$ten['sTenPL']}</option>
                                        {/foreach}
                                    </select>
                                </div>

                            </li>
                            <li>
                                {foreach $sanpham['phanloai'] as $key => $ten}
                                <div class="quantity-control hidden soluong" id="phanloai_{$key}">
                                    <span class="btn-cart btn-square btn-plus btn-qty"><i class="fa fa-plus"></i></span>
                                    <input type="text" data-invalid="Giá trị nhập chưa chính xác" data-maxalert="Số lượng đạt tối đa" data-max="{$ten['iSoLuong']}" data-minalert="Số lượng đạt tối thiểu" data-min="1" value="1">
                                    <span class="btn-cart btn-square btn-minus btn-qty"><i class="fa fa-minus"></i></span>
                                </div>
                                {/foreach}
                            </li>
                            <!-- <li>
                                <a href="#" class="btn-cart btn-square">
                                    <i class="fa fa-heart"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="btn-cart btn-square">
                                    <i class="fa fa-exchange"></i>
                                </a>
                            </li> -->
                        </ul>
                        <!--cart-buttons-->
                        <a class="btn btn-continue">Thêm vào giỏ hàng</a>
                    </div>
                    <!--cart-options-->
                </div>
                <!--single-product-overview-->
            </div>
            <!--column-6-->
        </div>
        <!--single-product-detail-->
        <div class="tabs-pane mt-60">
            <ul class="tab-sections">
                <!-- <li class="active"><a href="#tab01" class="btn-cart">Mô tả</a></li> -->
                <!-- <li><a href="#tab02" class="btn-cart">Specification</a></li>
                <li><a href="#tab03" class="btn-cart">Return Info</a></li>
                <li><a href="#tab04" class="btn-cart">Review</a></li> -->
            </ul>
            <!-- <div class="tab-panels"> -->
            <!-- <div id="tab01" class="tab-content active"> -->
            <!-- <p>Mô tả sản phẩm

                        Thông số kĩ thuật :

                        Thương hiệu Thiên Long

                        Xuất xứ: Việt Nam

                        Kích thước : 20 x 6 mm( tùy đóng gói)

                        Đường kính viên bi 0.6 mm

                        Đóng gói 20 cây / hộp

                        Trọng lượng 8 gram

                        Bút có cấu tạo khác hoàn toàn với các dạng bút truyền thống. Mực được bơm thẳng vào thân bút để sử dụng.Bút đùn là dạng bút không ruột, mực được bơm thẳng vào vỏ bút (hay nói cách khác là ruột bút cũng chính là thân bút). Chính vì thế mà trọng lượng của bút nhẹ hơn, phù hợp những người cần viết nhiều, tốc ký, ít gây mỏi tay.
                    </p> -->
            <!-- <ul>
                        <li>5.5-inch (diagonal) LED-backlit widescreen Multi-Touch</li>
                        <li>A8 chip with 64-bit architecture</li>
                        <li>1080p HD video recording (30 fps or 60 fps)</li>
                        <li>M8 motion coprocessor</li>
                        <li>Full sRGB standard</li>
                        <li>Slo-mo video (120 fps or 240 fps)</li>
                        <li>Touch ID fingerprint identity sensor built into the Home button</li>
                    </ul> -->
            <!-- </div> -->
            <!--tab content-->
            <!-- <div id="tab02" class="tab-content">
                    <ul>
                        <li>5.5-inch (diagonal) LED-backlit widescreen Multi-Touch</li>
                        <li>A8 chip with 64-bit architecture</li>
                        <li>1080p HD video recording (30 fps or 60 fps)</li>
                        <li>M8 motion coprocessor</li>
                        <li>Full sRGB standard</li>
                        <li>Slo-mo video (120 fps or 240 fps)</li>
                        <li>Touch ID fingerprint identity sensor built into the Home button</li>
                    </ul>
                </div> -->
            <!--tab content-->
            <!-- <div id="tab03" class="tab-content">
                    <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, nec sagittis sem lorem quis bibe dum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a nec sagittis sem sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, nec sagittis sem lorem quis bibe dum auctor.
                    </p>
                    <ul>
                        <li>5.5-inch (diagonal) LED-backlit widescreen Multi-Touch</li>
                        <li>A8 chip with 64-bit architecture</li>
                        <li>1080p HD video recording (30 fps or 60 fps)</li>
                        <li>M8 motion coprocessor</li>
                        <li>Full sRGB standard</li>
                        <li>Slo-mo video (120 fps or 240 fps)</li>
                        <li>Touch ID fingerprint identity sensor built into the Home button</li>
                    </ul>
                </div> -->
            <!--tab content-->
            <!-- <div id="tab04" class="tab-content">
                    <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, nec sagittis sem lorem quis bibe dum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a nec sagittis sem sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, nec sagittis sem lorem quis bibe dum auctor.
                    </p>
                </div> -->
            <!--tab content-->
            <!-- </div> -->

        </div>
        <!--tabs pane-->
    </div>
    <!--container-->
</div>

<!--========================================
related products
===========================================-->

<div class="container">
    <div class="xv-featured pt-25 ">
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
            <h2><span>Sản phẩm liên quan</span></h2>
            <!-- <span>{$sanpham['sTen_SP']}</span> -->
        </header>
        <!--header-->
        <div class="xv-product-slides mt-25 mb-25">
            <div class="owl-carousel slider_controls1" data-dots="false" data-prev="fa fa-angle-left" data-next="fa fa-angle-right" data-slides="4" data-slides-md="2" data-slides-sm="1" data-margin="24" data-loop="true" data-nav="true">
            {foreach $sp_lienquan as $sanpham}
                <div class="xv-product-unit">
                    <div class="xv-product shadow-around">
                        <figure>
                            <a href="#"><img class="xv-superimage" src="{$base_url}{$dir_anh}{$sanpham['sPK_Ma_SP']}/{$sanpham['sPimage']}" alt="" /></a>
                        </figure>
                        <div class="xv-product-content">
                            <h3><a href="detail1.html">{$sanpham['sTen_SP']}</a></h3>
                            <div class="">
                                &nbsp;
                            </div>
                            <div class="row">
                                <span class="xv-price col-sm-6 text-center">{number_format($sanpham['sGiaSP'], 0, '', '.')} VNĐ</span>
                            </div>

                        </div>
                        <!--xv-product-content-->
                    </div>
                    <!--xv-product(list-view)-->
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