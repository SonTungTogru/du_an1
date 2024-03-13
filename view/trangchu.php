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
                        <p>Sản phẩm mới</p>
                    </div>
                    <div class="product">
                        <?php 
                            $hinhpath = "upload/";
                            foreach ($loadsp as $sanpham) {
                                extract($sanpham);
                                $link = "index.php?act=sanphamct&id=".$id;
                                $hinh = $hinhpath.$img;
                                echo '         
                                    <div class="box_pro">
                                        <div class="img_pro">
                                            <a href="'.$link.'">
                                                <img src="'.$hinh.'" alt="">
                                            </a>
                                            <div class="sm_img">
                                                <img src="assets/images/Asset_4.png" alt="">
                                            </div>
                                        </div>
                                        <div class="remote">
                                            <div class="rm"><a href="sanphamct.php">'.$namepro.'</a></div>
                                            <div class="price flex_c">
                                                <p>'.$price.'<u>đ</u></p>
                                                <div class="old_price">
                                                    <del>'.$discount.'đ</del>
                                                </div>
                                            </div>
                                            <a href="index.php?act=addgiohang">
                                                <input type="button" value="Thêm vào giỏ hàng">
                                            </a>
                                        </div>
                                    </div>';
                            }
                        ?>
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
                        </div> -->
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
                        </div> -->
                      
                    </div>
                </div>

                <!-- <div class="kind_pro">
                    <div class="title">
                        <p>Sản phẩm nổi bật</p>
                    </div>
                    <div class="product">
                        <div class="box_pro">
                            <div class="img_pro">
                                <a href="sanphamct.html">
                                    <img src="assets/images/giay-adidas-galaxy-star-nam-den-trang-01-800x800.png" alt="">
                                </a>
                            </div>
                            <div class="remote">
                                <a href="sanphamct.html">Name</a>
                                <div class="price">
                                    <p>10000<u>đ</u></p>
                                </div>
                                <a href="sanphamct.html">
                                    <input type="button" value="Thêm vào giỏ hàng">
                                </a>
                            </div>
                        </div>
                        <div class="box_pro">
                            <div class="img_pro">
                                <a href="sanphamct.html">
                                    <img src="assets/images/giay-adidas-galaxy-star-nam-den-trang-01-800x800.png" alt="">
                                </a>
                            </div>
                            <div class="remote">
                                <a href="sanphamct.html">Name</a>
                                <div class="price">
                                    <p>10000<u>đ</u></p>
                                </div>
                                <a href="sanphamct.html">
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
                                <a href="sanphamct.html">
                                    <input type="button" value="Thêm vào giỏ hàng">
                                </a>
                            </div>
                        </div>
                        <!-- <div class="box_pro">
                            <div class="img_pro">
                                <img src="assets/images/giay-adidas-galaxy-star-nam-den-trang-01-800x800.png" alt="">
                                <div class="sm_img">
                                    <img src="assets/images/Asset_4.png" alt="">
                                </div>
                            </div>
                            <div class="remote">
                                <a href="#">Name</a>
                                <p>10000đ</p>
                                <button>Thêm vào giỏ hàng</button>
                            </div>
                        </div> -->
                    </div>
                </div> 

                <!-- Tài liệu cần thiết
                float ceil( float value )
                float floor( float value )
                float round( float value [, int precision] ) -->


                <!-- <div class="kind_pro">
                    <div class="title">
                        <p>Sale đồng giá</p>
                    </div>
                    <div class="product">
                        <div class="box_pro">
                            <div class="img_pro">
                                <a href="sanphamct.html">
                                    <img src="assets/images/giay-adidas-galaxy-star-nam-den-trang-01-800x800.png" alt="">
                                </a>
                                <div class="span">
                                    <span>-100%</span>
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
                                <div class="span">
                                    <span>-100%</span>
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
                                <div class="span">
                                    <span>-100%</span>
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
                        </div> -->
                    </div>
                </div> 
            </div>
        </div>