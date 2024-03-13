        <?php
            include "slider.php";
        ?>
        <div class="content_trangchu_sp">
            <?php 
                include "boxcate.php";
            ?>
         
            <div class="boxright">
                <div class="kind_pro">
                    <div class="title">
                        <p>Sản phẩm</p>
                    </div>
                    <div class="product">
                        <?php foreach($dssp as $sanpham) {
                            extract($sanpham);
                            $link = "index.php?act=sanphamct&id=".$id;
                        ?>
                                <div class="box_pro">
                                    <div class="img_pro">
                                        <a href="<?=$link?>">
                                            <img src="<?=$img_path.$img?>">
                                        </a>
                                    </div>
                                    <div class="remote">
                                        <div class="rm"><a href="<?=$link?>"><?=$namepro?></a></div>
                                        <div class="price flex_c">
                                            <p><?=$price?><u>đ</u></p>
                                            <?php if ($discount > 0) {
                                                echo '
                                                    <div class="old_price">
                                                        <del>'.$discount.'đ</del>
                                                    </div>
                                                ';
                                            }
                                            ?>
                                        </div>
                                        <a href="index.php?act=addgiohang">
                                            <input type="button" value="Thêm vào giỏ hàng">
                                        </a>
                                    </div>
                                </div>
                        <?php } ?>
                        <!-- <div class="box_pro">
                            <div class="img_pro">
                                <a href="sanphamct.html">
                                    <img src="assets/images/giay-adidas-galaxy-star-nam-den-trang-01-800x800.png" alt="">
                                </a>
                                <div class="sm_img">
                                    <img src="assets/images/Asset_4.png" alt="">
                                </div>
                            </div>
                            <div class="remote">
                                <a href="sanphamct.html">Name</a>
                                <div class="price flex_c">
                                    <p>10000<u>đ</u></p>
                                    <div class="old_price">
                                        <del>29999đ</del>
                                    </div>
                                </div>
                                <a href="giohang.html">
                                    <input type="button" value="Thêm vào giỏ hàng">
                                </a>
                            </div>
                        </div>
                        <div class="box_pro">
                            <div class="img_pro">
                                <a href="sanphamct.html">
                                    <img src="assets/images/giay-adidas-galaxy-star-nam-den-trang-01-800x800.png" alt="">
                                </a>
                                <div class="sm_img">
                                    <img src="assets/images/Asset_4.png" alt="">
                                </div>
                            </div>
                            <div class="remote">
                                <a href="sanphamct.html">Name</a>
                                <div class="price flex_c">
                                    <p>10000<u>đ</u></p>
                                    <div class="old_price">
                                        <del>29999đ</del>
                                    </div>
                                </div>
                                <a href="giohang.html">
                                    <input type="button" value="Thêm vào giỏ hàng">
                                </a>
                            </div>
                        </div>
                        <div class="box_pro">
                            <div class="img_pro">
                                <a href="sanphamct.html">
                                    <img src="assets/images/giay-adidas-galaxy-star-nam-den-trang-01-800x800.png" alt="">
                                </a>
                                <div class="sm_img">
                                    <img src="assets/images/Asset_4.png" alt="">
                                </div>
                            </div>
                            <div class="remote">
                                <a href="sanphamct.html">Name</a>
                                <div class="price flex_c">
                                    <p>10000<u>đ</u></p>
                                    <div class="old_price">
                                        <del>29999đ</del>
                                    </div>
                                </div>
                                <a href="giohang.html">
                                    <input type="button" value="Thêm vào giỏ hàng">
                                </a>
                            </div>
                        </div> -->
                     
                    </div>
                </div>
            </div>
        </div>