<div class="blog-main-slider color-white text-center" style="background-image:url('{$base_url}assets/img/b15.jpg'); no-repeat">
    <div class="overlay"></div>
    <div class="container">
        <h1>Giỏ hàng</h1>
        <p>Tận hưởng niềm vui khi mua sắm dễ dàng và nhanh chóng</p>
    </div>
</div>
<div class="container">
    <div class="xv-cart pt-60">
        <div class="xv-cart-top pb-45">
            <div class="table-responsive cart-cal  text-center">
                <table class="table">
                    <thead>
                        <tr class="table-head">
                            <th>Hình ảnh</th>
                            <th>Mô tả</th>
                            <th>&nbsp;</th>
                            <th>&nbsp;</th>
                            <th>Số lượng</th>
                            <th>Đơn giá</th>
                            <th>Tổng giá</th>
                            <th>Tác vụ</th>
                        </tr>
                    </thead>
                    {if count($donhang) != 0}
                    <tbody class="shadow-around">
                        {$tong_gia = 0}
                        {foreach $donhang as $sanpham}
                        <tr class="table-body">
                            <td>
                                <figure class="img_giohang"><img src="{$base_url}{$dir_anh}{$sanpham['sPK_Ma_SP']}/{$sanpham['sPimage']}" alt="" /></figure>
                            </td>
                            <td>
                                <div class="cart-wrappper text-left">
                                    <h6>{$sanpham['sTen_SP']}</h6>
                                    <p><span>Loại sản phẩm</span>: {$sanpham['sTenPL']}</p>
                                </div>
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>
                                <div class="quantity-control">
                                    <span class="btn-cart btn-square btn-plus btn-qty"><i class="fa fa-plus"></i></span>
                                    <input type="text" value="{$sanpham['soluong_gh']}" data-min="1" data-minalert="Đã đạt tối thiểu" data-max="{$sanpham['iSoLuong']}" data-maxalert="Đã đạt tối đa" data-invalid="Enter valid quantity">
                                    <span class="btn-cart btn-square btn-minus btn-qty"><i class="fa fa-minus"></i></span>
                                </div>
                            </td>
                            <td><span class="cart-price">{number_format($sanpham['sGiaSP'], 0, '', '.')}</span></td>
                            <td><span class="cart-price">{number_format($sanpham['sGiaSP'] * $sanpham['soluong_gh'], 0, '', '.')}</span></td>
                            <td>
                                <ul class="cart-action">
                                    <!-- <li><a href="#" class="btn-cart btn-square style"><i class="fa fa-repeat"></i></a></li> -->
                                    <!-- <li><a href="#" class="btn-cart btn-square btn-pink"><i class="fa fa-cog"></i></a></li> -->
                                    <li><a href="#" class="btn-cart btn-square btn-blue"><i class="fa fa-trash-o"></i></a></li>
                                </ul>
                            </td>
                        </tr>
                        {$tong_gia = $tong_gia + ($sanpham['sGiaSP'] * $sanpham['soluong_gh'])}
                        {/foreach}
                    </tbody>
                    <tr class="table-body">
                        <td></td>
                        <td></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td></td>
                        <td></td>
                        <td class="tongso">{number_format($tong_gia, 0, '', '.')} VNĐ</td>
                        <td><button class="btn btn-send btn-pink">Mua</button></td>
                    </tr>
                    {else}
                    <tbody class="shadow-around">
                        <tr class="table-body">
                            <td colspan="12"><h1>Quý khách vui lòng thêm sản phẩm</h1></td>
                        </tr>
                    </tbody>
                    {/if}
                </table>
                 
            </div>
        </div>
        <!--xv-cart-top-->
    </div>
</div>