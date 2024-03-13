<?php
    if (is_array($mau)) {
        extract($mau);
    }
?>
<div class="row">
    <div class="row frmtitle">
        <h1>CẬP NHẬT LOẠI HÀNG HÓA</h1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=updatemau" method="post">
        <div class="row mb10">
            Màu <br>
            <input type="text" name="mau" value="<?php if (isset($mau)&&($mau!="")) echo $mau?>">
        </div>
        <div class="row mb10">
            <input type="hidden" name="id" value="<?php if(isset($id)&&($id > 0)) echo $id; ?>">
            <input type="submit" name="capnhat" value="CẬP NHẬT">
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