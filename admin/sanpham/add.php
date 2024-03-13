<div class="row">
    <div class="row frmtitle">
        <h1> THÊM MỚI SẢN PHẨM</h1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
        <div class="row mb10">
            DANH MỤC<br>
            <select name="iddm">
                <option value="Choose">--- Chọn danh mục ---</option>
                <?php 
                foreach ($listdm as $danhmuc) {
                    extract($danhmuc);
                    echo '<option value="'.$id.'">'.$namedm.'</option>';
                    // echo ($id);
                }
                ?>
            </select>
            
        </div>

        <div class="row mb10">
            Tên sản phẩm<br>
            <input type="text" name="namepro">
        </div>
        <div class="row mb10">
            Giá<br>
            <input type="text" name="price">
        </div>
        <div class="row mb10">
            Giảm giá<br>
            <input type="text" name="discount">
        </div>
        <div class="row mb10">
            Hình<br>
            <input type="file" name="img" id="" class="input-file-button">
        </div>
        <div class="row mb10">
            Mô tả<br>
            <textarea name="mota" cols="30" rows="10"></textarea>
        </div>
        <div class="row mb10">
            <input type="submit" name="themmoi" value="THÊM MỚI">
            <input type="reset" value="NHẬP LẠI">
            <a href="index.php?act=listsp"><input type="button" value="DANH SÁCH"></a>
        </div>
        <?php
            if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
        ?>
        </form>
    </div>
</div>
</div>