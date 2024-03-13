<div class="row">
            <div class="row frmtitle">
                <h1>DANH SÁCH LOẠI HÀNG HÓA</h1>
            </div>
            <div class="row frmcontent">
                <div class="row mb10 frmdsloai">
                    <table>
                        <tr>
                            <th></th>
                            <th>MÃ LOẠI</th>
                            <th>TÊN LOẠI</th>
                            <th>TRẠNG THÁI</th>
                            <th>HÀNH ĐỘNG</th>
                        </tr>
                       
                        <?php foreach ($listdm as $danhmuc) : 
                            extract($danhmuc);
                            $suadm = "index.php?act=suadm&id=$id";
                            $andm = "index.php?act=listdm&id=$id";
                            $xoadm = "index.php?act=xoadm&id=$id"

                            ?>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><?= $id ?></td>
                                <td><?= $namedm ?></td>
                                <td class="dmfx">
                                    <a href="<?= $suadm ?>"><input type="button" value="Sửa"></a>
                                    <a href="<?= $xoadm ?>"><input type="button" value="Xóa"></a>

                                    <!-- <form class="formact" action="<?= $andm ?>" method="post">
                                        <input type="submit" value="<?= $status ? 'Khóa' : 'Mở' ?>" name="<?= $status ? 'block' : 'active' ?>">
                                    </form> -->
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        
                    </table>
                </div>
                <div class="row mb10">
                    <input type="button" value="CHỌN TẤT CẢ">
                    <input type="button" value="BỎ CHỌN TẤT CẢ">
                    <input type="button" value="XÓA CÁC MỤC ĐÃ CHỌN">
                    <a href="index.php?act=adddm">
                        <input type="button" value="NHẬP THÊM">
                    </a>
                </div>
            </div>
        </div>