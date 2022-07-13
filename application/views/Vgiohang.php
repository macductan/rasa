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
                            <th></th>
                        </tr>
                    </thead>
                    <tbody class="shadow-around">
                        {for $stt=1 to 2}
                        <tr class="table-body">
                            <td>
                                <figure class="img_giohang"><img src="{$base_url}upload\sanpham\thanglong\anh_chinh.png" alt="" /></figure>
                            </td>
                            <td>
                                <div class="cart-wrappper text-left">
                                    <h6>Sony Powershot G2530</h6>
                                    <div class="xv-rating stars-5"></div>
                                    <p><span>Availability</span>: Available in Stock</p>
                                    <p><span>Product Code</span>: CwT4a</p>
                                </div>
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>
                                <div class="quantity-control">
                                    <span class="btn-cart btn-square btn-plus btn-qty"><i class="fa fa-plus"></i></span>
                                    <input type="text" value="2" data-min="1" data-minalert="Minimum limit reached" data-max="5" data-maxalert="Maximum limit reached" data-invalid="Enter valid quantity">
                                    <span class="btn-cart btn-square btn-minus btn-qty"><i class="fa fa-minus"></i></span>
                                </div>
                            </td>
                            <td><span class="cart-price">$250</span></td>
                            <td><span class="cart-price">$500</span></td>
                            <td>
                                <ul class="cart-action">
                                    <li><a href="#" class="btn-cart btn-square style"><i class="fa fa-repeat"></i></a></li>
                                    <li><a href="#" class="btn-cart btn-square btn-pink"><i class="fa fa-cog"></i></a></li>
                                    <li><a href="#" class="btn-cart btn-square btn-blue"><i class="fa fa-trash-o"></i></a></li>
                                </ul>
                            </td>
                        </tr>
                        {/for}
                    </tbody>
                    <tr class="table-body">
                        <td></td>
                        <td></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td></td>
                        <td></td>
                        <td class="tongso">$2031</td>
                        <td><button class="btn btn-send btn-pink">Mua</button></td>
                    </tr>
                </table>
            </div>
        </div>
        <!--xv-cart-top-->
    </div>
</div>