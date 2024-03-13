<?php
if (is_array($dm)) {
    extract($dm);
}
?>
<div class="row">
    <div class="row frmtitle">
        <H1>CẬP NHẬT TÀI KHOẢN</H1>
    </div>
    <div class="row boxcontent formtaikhoan">
                <?php
                if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
                    extract($_SESSION['user']);
                }
                ?>
                <form action="index.php?act=updatetk" method="post">
                    <div class="row mb10">Email<input type="email" name="email" value="<?= $email ?>"></div>
                    <div class="row mb10">Tên đăng nhập<input type="text" name="user" value="<?= $user ?>"></div>
                    <div class="row mb10">Mật khẩu<input type="password" name="pass" value="<?= $pass ?>"></div>
                    <div class="row mb10">Địa chỉ<input type="text" name="address" value="<?= $address ?>"></div>
                    <div class="row mb10">Điện thoại<input type="text" name="tel" value="<?= $tel ?>"></div>
                    <div class="row mb10">
                        <input type="hidden" name="id" value="<?=$id?>">
                        <input type="submit" value="Cập nhật" name="capnhat">
                        <input type="reset" value="Nhập Lại">
                    </div>
                </form>
                <h2 class="baoloi">
                    <?php
                    if (isset($thongbao) && ($thongbao != "")) {
                        echo $thongbao;
                    }
                    ?></h2>
            </div>
</div>
</div>