<div class="content_trangchu_sp">
    
                <div class="title">
                    <p>ĐƠN HÀNG DA1 - <?= $key['id'] ?></p>
                </div>
                <div class="table">
                    <table>
                        <tr>
                            <th>STT</th>
                            <th>TÊN SẢN PHẨM</th>
                            <th>HÌNH ẢNH</th>
                            <th>ĐƠN GIÁ</th>
                            <th>SỐ LƯỢNG</th>
                            <th>THÀNH TIỀN</th>
                        </tr>
    <?php
        $i = 1;
        foreach ($loadall_cart as $b) {
            $thanhtien = $b['price'] * $b['soluong'];
            echo '    
                        <tr>
                            <td>'.$i++.'</td>
                            <td>
                                ' . $b['namepro'] . '<br><br>
                                Màu: ' . $b['mau'] . ' | Size: ' . $b['size'] . '
                            </td>
                            <td><img src="' . $img_path . $b['img'] . '" alt=""></td>
                            <td>' . format($b['price']) . ' </td>
                            <td>' . $b['soluong'] . '</td>
                            <td>' . format($thanhtien) . ' </td>
                        </tr>';
        }     
        ?>           
                        <tr>
                            <td colspan="3">TỔNG GIÁ TRỊ ĐƠN HÀNG: DA1 - <?= $key['id'] ?></td>
                            <td colspan="3"><?= format($b['thanhtien']) ?> </td>
                        </tr>
                    </table>
                </div>
</div>
