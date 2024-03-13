<div class="row">
    <div class="row frmtitle">
        <h1>THÊM MÀU VÀ SIZE</h1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=addmau_size" method="post" enctype="multipart/form-data">
            <div class="row mb10">
                Màu<br>
                <input type="text" name="color">
            </div>
            <div class="row mb10">
                Size<br>
                <input type="text" name="size">
            </div>
            <div class="row mb10">
                <input type="submit" name="themmoi" value="THÊM">
                <input type="reset" value="NHẬP LẠI">
                <a href="index.php?act=listms"><input type="button" value="DANH SÁCH"></a>
            </div>
            <?php
                if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
        </form>
    </div>
</div>
</div>