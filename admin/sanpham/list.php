<div class="row">
    <div class="row frmtitle mb">
        <h1>DANH SÁCH LOẠI HÀNG HÓA</h1>
    </div>
    <form action="index.php?act=listsp" method="post">
        <input type="text" name="kyw">
        <select name="iddm">
            <option value="0" select>Tất cả</option>
            <?php
            foreach ($listdm as $danhmuc) {
                extract($danhmuc);
                echo '<option value="' . $id . '">' . $namedm . '</option>';
            }
            ?>
        </select>
        <input type="submit" name="listok" value="FIND">
    </form>
    <div class="row frmcontent">
        <div class="row mb10 frmdsloai">
            
            <table>
                <tr>
                    <th>STT</th>
                    <th>TÊN SẢN PHẨM</th>
                    <th>HÌNH</th>
                    <th>GIÁ</th>
                    <th>GIẢM GIÁ</th>
                    <th>LƯỢT XEM</th>
                    <th>HÀNH ĐỘNG</th>
                </tr>
                <?php
                    $i = 1;
                    foreach ($listsp as $sanpham) : 
                        extract($sanpham);
                        $ansp = "index.php?act=listsp&id=".$id;
                        $sua = "index.php?act=suasp&id=".$id;
                        $xoa = "index.php?act=xoasp&id=".$id;
                        $hinhpath = "../upload/" . $img;
                        if (is_file($hinhpath)) {
                            $hinh = '<img src="'.$hinhpath.'" height="80px">';
                        } else {
                            $hinh = "No photo";
                        }
                ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td style="width: 200px;"><?= $namepro ?></td>
                        <td><?= $hinh ?></td>
                        <td><?= $price ?></td>
                        <td><?= $discount ?></td>
                        <td><?= $luotxem ?></td>
                        <td class="dmfx">
                            <a href="<?= $sua ?>">
                                <input type="button" value="Thêm & Sửa">
                            </a>
                            <a href="<?= $xoa ?>">
                                <input type="button" value="Xóa">
                            </a>
                            
                        </td>
                    </tr>

                <?php endforeach; ?>

            </table>
        </div>
        <div class="row mb10">
            <a href="index.php?act=addsp">
                <input type="button" value="NHẬP THÊM">
            </a>
        </div>
    </div>
</div>