<?php
    if (is_array($size)) {
        extract($size);
    }
?>
<div class="row">
    <div class="row frmtitle">
        <H1>CẬP NHẬT LOẠI HÀNG HÓA</H1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=updatesize" method="post">
        <div class="row mb10">
            Màu <br>
            <input type="text" name="size" value="<?php if (isset($size)&&($size!="")) echo $size?>">
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