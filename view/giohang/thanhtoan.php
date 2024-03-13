        <?php if (isset($thongbao) && $thongbao != "") { ?>
        <div class="content" style="min-height: 450px">
            <div class="h2cter">
                <h2 class="complete"><?=$thongbao?></h2>
                <div class="btn_action">
                    <a href="index.php?act=yourorder">
                        <input type="button" value="Đơn hàng của tôi">
                    </a>
                    <a href="index.php">
                        <input type="button" value="Tiếp tục mua hàng">
                    </a>
                </div>
            </div>
        </div>
        <?php } else { ?>
        <div class="content">
            <div class="card_payinfo">
                <form action="index.php?act=confirm" method="post">
                    <div class="form_thanhtoan">
                        <div class="title_pay">
                            <h2>Thông tin vận chuyển</h2>
                        </div>
                        <?php if (isset($_SESSION['user'])) {
                            $user = $_SESSION['user']['username'];
                            $tel = $_SESSION['user']['tel'];
                            $email = $_SESSION['user']['email'];
                            $address = $_SESSION['user']['address'];
                        } else {
                            $user = "";
                            $tel = "";
                            $email = "";
                            $address = "";
                        }
                        ?>
                        <div class="form-field">
                            <label for="">Họ tên <span class="required">*</span></label><br>
                            <input type="text" name="username" value="<?=$user?>">
                        </div>
                        <div class="form-field">
                            <label for="">Số điện thoại <span class="required">*</span></label><br>
                            <input type="text" name="tel" value="<?=$tel?>">
                        </div>
                        <div class="form-field">
                            <label for="">Email <span class="required">*</span></label><br>
                            <input type="text" name="email" value="<?=$email?>">
                        </div>
                        <div class="form-field">
                            <label for="">Địa chỉ <span class="required">*</span></label><br>
                            <input type="text" name="address" value="<?=$address?>">
                        </div>
                    </div>
                    <div class="your_order">
                        <div class="title_pay">
                            <h2>Đơn hàng của bạn</h2>
                        </div>
                        <div class="card_title">
                            <p>Sản phẩm</p>
                            <p>Total</p>
                        </div>
                        <?php if(isset($_SESSION['mycart'])) {
                            $total = 0;
                            foreach($_SESSION['mycart'] as $cart) {
                                echo '
                                
                                <div class="card_product">
                                    <img class="i_p" src="upload/'.$cart[1].'" alt="">
                                    <div class="nsc_p">
                                        <p>'.$cart[2].'</p>
                                        <span>Màu: '.$cart[5].'|</span><span>Size: '.$cart[6].'|</span><span>Số lượng: '.$cart[7].'</span>
                                    </div>
                                    <p class="total_pay">'.$cart[3].' đ</p>
                                </div>
                                ';
                                $total += $cart[3] * $cart[7];
                            }
                        }
                        ?>
                        <!-- <div class="card_product">
                            <img class="i_p" src="assets/images/giay-adidas-galaxy-star-nam-den-trang-01-800x800.png" alt="">
                            <div class="nsc_p">
                                <p>Giày Adidas</p>
                                <span>Màu: Black</span><span>Size: L</span>
                            </div>
                            <p class="total_pay">193898 đ</p>
                        </div> -->
                        <div class="card_pay">
                            <div class="card_title mb">
                                <p>Total</p>
                                <p><?=$total?> đ</p>
                            </div>
                            <span>Phương thức thanh toán</span>
                            <div class="pay_method">
                                <input type="radio" name="bill_pttt" id="" value="Trả tiền khi nhận hàng" checked>
                                <label for="">Trả tiển khi nhận hàng</label>
                                <input type="radio" name="bill_pttt" id="" value="Chuyển khoản ngân hàng">
                                <label for="">Chuyển khoản ngân hàng</label>
                                <input type="radio" name="bill_pttt" id="" value="Thanh toán online">
                                <label for="">Thanh toán online</label>
                            </div>
                            <div class="btn">
                                <input type="submit" name="order" value="Đặt hàng">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <?php } ?>