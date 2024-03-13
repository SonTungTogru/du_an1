<div class="boxleft">
<div class="title">
                    <p>Tìm Kiếm Sản Phẩm </p>
                </div>
<div class="boxfooter searbox">
        <form action="index.php?act=sanpham" method="post">
            <input type="text" name="keyword" placeholder="Tìm kiếm">
            <button class="search">Tìm kiếm</button>
        </form>
    </div>
                <div class="title">
                    <p>Sản phẩm top 10 bán chạy</p>
                </div>
                <div class="list_cate">
                    <div class="category">
                    <ul>
                    <?php 
                        $i=1;
                        foreach($dstop10 as $sp){
                            extract($sp);
                            $linksp="index.php?act=sanphamct&id=".$id;
                            $img=$img_path.$img;
                            echo'<div class="selling_products" style="width:100%;">
                      <img src="'.$img.'" alt="anh">
                      <a href="'.$linksp.'">'.$i.'.'.$namepro.'</a>
                    </div>';
                    $i+=1;
                        }                    
                        ?>
            </ul>
                        <!-- <a href="#"><img src="assets/images/giay-adidas-galaxy-star-nam-den-trang-01-800x800.png" alt=""></a>
                        <a href="">Giày Nike</a> -->
                    </div>
                    <!-- <div class="category">
                        <a href="#"><img src="assets/images/giay-adidas-galaxy-star-nam-den-trang-01-800x800.png" alt=""></a>
                        <a href="">Giày Nike</a>
                    </div>
                    <div class="category">
                        <a href="#"><img src="assets/images/giay-adidas-galaxy-star-nam-den-trang-01-800x800.png" alt=""></a>
                        <a href="">Giày Nike</a>
                    </div>
                    <div class="category">
                        <a href="#"><img src="assets/images/giay-adidas-galaxy-star-nam-den-trang-01-800x800.png" alt=""></a>
                        <a href="">Giày Nike</a>
                    </div> -->
                </div>
            </div>