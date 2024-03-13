<div class="content" style="min-height: 450px">
            <?php 
                $ct = 0;
                foreach($_SESSION['mycart'] as $cart) {
                $img_path = "upload/".$cart[1];
                echo '
                    <div class="cart">
                        <img src="'.$img_path.'" alt="">
                        <div class="cartinfo">
                            <h1>'.$cart[2].'</h1>
                            <div class="price">'.$cart[3].' đ</div>
                            <div class="option">
                                <span>MÀU: '.$cart[5].'</span><span>SIZE: '.$cart[6].'</span>
                            </div>
                            <strong style="display: none;" id="displayQuantity"></strong>
                            <div class="remote_ct quantity-container">
                                <button class="decrease"><i class="fa fa-minus"></i></button>
                                <input type="text" name="soluong" class="quantitybtn" value="'.(($cart[7] == "") ? (int)$cart[7] = 1 : (int)$cart[7]).'">
                                <button class="increase"><i class="fa fa-plus"></i></button>
                            </div>
                        </div>
                        <div class="icon_canxel">
                            <a href="index.php?act=delcart&idcart='.($ct).'"><i class="fa-solid fa-xmark"></i></a>
                        </div>
                    </div>
                ';
                $ct+=1;
            }
            ?>
            <?php if ($_SESSION['mycart'] == []) {
                echo '
                 <div class="h2cter">
                        <h2 class="thongbao">Chưa có sản phẩm nào trong giỏ hàng</h2>
                        <div class="btn_action">
                            <a href="index.php">
                                <input type="button" value="Tiếp tục mua hàng">
                            </a>
                        </div>
                 </div>
                ';
            } else {
                echo '
                    <div class="btn_action">
                        <a href="index.php?act=delall">
                            <input type="button" value="Xóa giỏ hàng">
                        </a>
                        <a href="index.php">
                            <input type="button" value="Tiếp tục mua hàng">
                        </a>
                        <a href="index.php?act=thanhtoan">
                            <input type="button" value="Mua ngay">
                        </a>
                    </div>
                ';
            }
            ?>
        </div>