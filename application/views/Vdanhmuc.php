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
                        <form action="" method="post">
                            <h4>Danh mục</h4>
                            <ul class="customeField clearfix">
                                <li>
                                    <input name="chon_danhmuc" value="all" id="all" class="required-check" type="radio" 
                                    {if $chon_danhmuc == '' || $chon_danhmuc == 'all'}checked{/if}>
                                    <label for="all">
                                        Tất cả
                                        <span>
                                            <i></i>
                                        </span>
                                    </label>
                                </li>
                                {foreach $ds_danhmuc as $danhmuc}
                                <li>
                                    <input name="chon_danhmuc" value="{$danhmuc['sPK_Ma_DMSP']}" id="{$danhmuc['sPK_Ma_DMSP']}" class="required-check" type="radio" {if $chon_danhmuc == $danhmuc['sPK_Ma_DMSP']}checked{/if}>
                                    <label for="{$danhmuc['sPK_Ma_DMSP']}">
                                        {$danhmuc['sTen_DMSP']}
                                        <span>
                                            <i></i>
                                        </span>
                                    </label>
                                </li>
                                {/foreach}
                            </ul>
                            <section class="widget widget-category pb-30">
                                <button class="btn btn-primary" name="action" value="loc">Lọc</button>
                            </section>
                            <!--widget-->
                            <!--widget-->
                        </form>
                    </aside>
                </div>
                <div class="col-xs-12 col-sm-9">
                    <div class="xv-product-slides grid-view products" data-thumbnail="figure .xv-superimage" data-product=".xv-product-unit">
                        <div class="row">
                            {foreach $sanpham_theoloai as $sanpham}
                            <div class="xv-product-unit">
                                <div class="xv-product shadow-around">
                                    <figure>
                                        <a href="ttsanpham?masp={$sanpham['sPK_Ma_SP']}"><img class="xv-superimage" src="{$base_url}{$dir_anh}{$sanpham['sPK_Ma_SP']}/{$sanpham['sPimage']}" alt="" /></a>
                                    </figure>
                                    <div class="xv-product-content">
                                        <h3><a href="ttsanpham?masp={$sanpham['sPK_Ma_SP']}">{$sanpham['sTen_SP']}</a></h3>
                                        <div class="">
                                            {if $sanpham['iSoLuong'] > 0}
                                            <select name="" id="phanloai_{$sanpham['sPK_Ma_SP']}">
                                                    {foreach $sanpham['sTenPL'] as $tenpl}
                                                    <option value="{$tenpl}">{$tenpl}</option>
                                                    {/foreach}
                                            </select>
                                            {/if}
                                            &nbsp;
                                        </div>
                                        <div class="row">
                                            <span class="xv-price col-sm-6 text-center">{number_format($sanpham['sGiaSP'], 0, '', '.')} VNĐ</span>
                                            {if $sanpham['iSoLuong'] == 0}
                                            <!-- <div class="text-right col-sm-6 text-danger text-uppercase font-weight-bold">Hết hàng</div> -->
                                            <div class="text-right col-sm-6"><button class="btn btn-danger disabled">Hết</button></div>
                                            {elseif isset($user) && $user['quyen'] == 'khachhang'}
                                            <div class="text-right col-sm-6"><button class="btn btn-primary mua" type="button" data-masp="{$sanpham['sPK_Ma_SP']}">Mua</button></div>
                                            {/if}
                                        </div>
                                        
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
                            <li><a href="#">Trở về</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">Tiếp</a></li>
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