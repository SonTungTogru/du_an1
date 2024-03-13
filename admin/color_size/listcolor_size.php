        <div class="row">
            <div class="row frmtitle">
                <h1>DANH SÁCH LOẠI HÀNG HÓA</h1>
            </div>
            <div class="row frmcontent">
                <div class="row mb10 frmdsloai tbfx">
                    <table>
                        <tr>
                            <th>TÊN MÀU</th>
                            <th>HÀNH ĐỘNG</th>
                        </tr>
                        
                        <?php foreach ($list_m as $mau) : 
                            extract($mau);
                            $sua = "index.php?act=suamau&id=$id";
                        ?>
                            <tr>
                                <td><?= $mau ?></td>
                                <td>
                                    <a href="<?= $sua ?>"><input type="button" value="Sửa"></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                    <table>
                        <tr>
                            <th>TÊN SIZE</th>
                            <th>HÀNH ĐỘNG</th>
                        </tr>
                        <?php foreach ($list_s as $size) : 
                            extract($size);
                            $sua = "index.php?act=suasize&id=$id";
                        ?>
                            <tr>
                                <td><?= $size ?></td>
                                <td>
                                    <a href="<?= $sua ?>"><input type="button" value="Sửa"></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <div class="row mb10">
                    <a href="index.php?act=addmau_size">
                        <input type="button" value="NHẬP THÊM">
                    </a>
                </div>
            </div>
        </div>