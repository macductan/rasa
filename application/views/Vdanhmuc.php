<main id="pageContentArea">
    <!--========================================
        Page Head
        ===========================================-->
    <!--========================================
        grid and list view
        ===========================================-->
    <div class="container pt-10">
        <div class="product-overview pt-50 pb-50">
            <div class="row">
                <div class="col-xs-12 col-sm-3 hidden-xs">
                    <aside class="sidebar">
                        <!-- <form class="search-form">
                            <input type="text" placeholder="Search...">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form> -->
                        <h4>Brands</h4>
                        <ul class="customeField clearfix">
                            <li>
                                <input name="brandFilter-radio" id="pcheck6" class="required-check" type="radio">
                                <label for="pcheck6">
                                    All brands
                                    <span>
                                        <i></i>
                                    </span>
                                </label>
                            </li>
                            <li>
                                <input name="brandFilter-radio" id="pcheck7" class="required-check" type="radio">
                                <label for="pcheck7">
                                    Apple
                                    <span>
                                        <i></i>
                                    </span>
                                </label>
                            </li>
                            <li>
                                <input name="brandFilter-radio" id="pcheck8" class="required-check" type="radio">
                                <label for="pcheck8">
                                    Nokia
                                    <span>
                                        <i></i>
                                    </span>
                                </label>
                            </li>
                            <li>
                                <input name="brandFilter-radio" id="pcheck9" class="required-check" type="radio">
                                <label for="pcheck9">
                                    Sony
                                    <span>
                                        <i></i>
                                    </span>
                                </label>
                            </li>
                            <li>
                                <input name="brandFilter-radio" id="pcheck10" class="required-check" type="radio">
                                <label for="pcheck10">
                                    Google
                                    <span>
                                        <i></i>
                                    </span>
                                </label>
                            </li>
                            <li>
                                <input name="brandFilter-radio" id="pcheck11" class="required-check" type="radio">
                                <label for="pcheck11">
                                    Samsung
                                    <span>
                                        <i></i>
                                    </span>
                                </label>
                            </li>
                            <li>
                                <input name="brandFilter-radio" id="pcheck12" class="required-check" type="radio">
                                <label for="pcheck12">
                                    HTC
                                    <span>
                                        <i></i>
                                    </span>
                                </label>
                            </li>
                            <li>
                                <input name="brandFilter-radio" id="pcheck13" class="required-check" type="radio">
                                <label for="pcheck13">
                                    Other
                                    <span>
                                        <i></i>
                                    </span>
                                </label>
                            </li>
                        </ul>
                        <section class="widget widget-category pb-30">
                            <button class="btn btn-primary">Lọc</button>
                        </section>
                        <!--widget-->
                        <!--widget-->
                    </aside>
                </div>
                <div class="col-xs-12 col-sm-9">
                    <div class="xv-product-slides grid-view products" data-thumbnail="figure .xv-superimage" data-product=".xv-product-unit">
                        <div class="row">
                            {foreach $sanpham_theoloai as $sanpham}
                            <div class="xv-product-unit">
                                <div class="xv-product shadow-around">
                                    <figure>
                                        <a href="#"><img class="xv-superimage" src="{$base_url}{$dir_anh}{$sanpham['sPK_Ma_SP']}/{$sanpham['sPimage']}" alt="" /></a>
                                        <figcaption>
                                            <ul class="style1">
                                                <li><a data-qv-tab="#qvt-wishlist" class="btn-cart flytoQuickView btn-square btn-blue" href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a data-qv-tab="#qvt-compare" class="btn-cart flytoQuickView btn-square btn-blue" href="#"><i class="fa fa-exchange"></i></a></li>
                                                <li><a class="btn-cart btn-square btn-blue" href="#"><i class="fa fa-expand"></i></a></li>
                                            </ul>
                                        </figcaption>
                                    </figure>
                                    <div class="xv-product-content">
                                        <h3><a href="detail1.html">{$sanpham['sTen_SP']}</a></h3>
                                        <ul class="color-opt">
                                            <li><a href="#"> </a></li>
                                            <!-- <li><a href="#">Trắng</a></li>
                                            <li><a href="#">Đen</a></li>
                                            <li><a href="#">Vàng</a></li> -->
                                        </ul>
                                        <div class="xv-rating stars-5"></div>
                                        <span class="xv-price">{$sanpham['sGiaSP']} VNĐ</span>
                                        <a data-qv-tab="#qvt-cart" href="#" class="product-buy flytoQuickView">Mua</a>
                                    </div>
                                    <!--xv-product-content-->
                                </div>
                                <!--xv-product(list-view)-->
                            </div>
                            {/foreach}
                        </div>
                    </div>
                    <div class="pagination text-center pt-10 pb-05">
                        <ul>
                            <li><a href="#">Prev</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">Next</a></li>
                        </ul>
                    </div>
                    <!--pagination-->
                </div>
            </div>
            <!--row-->
        </div>
        <!--product overview-->
    </div>
    <!--container-->
    <!--========================================
        Custom Block
        ===========================================-->
    <!--container-->
    <!--=================================
        Sales
        =================================-->

    <!--container-->
    <!--========================================
        sign up
        ===========================================-->

    <!--container-->

</main>