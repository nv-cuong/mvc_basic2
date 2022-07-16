
<div class="timkiem">
    <form action="" method="GET">
        <table>
            <tr>
                <input type="hidden" name="controller" value="thanh-vien">
                <td>
                    <input type="text" name="tukhoa" placeholder="Nhập tên bạn muốn tìm ...">
                </td>
                <td><input type="submit" value="Tìm kiếm"></td>
            </tr>
        </table>
        <input type="hidden" name="action" value="tim-kiem">
    </form>
</div>

<div class="danhsach">
    <a class="add" href="index.php?controller=thanh-vien&action=add">Thêm nhân viên</a>
    <h3>Danh sách nhân viên</h3>
    <table border="1px">
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên nhân viên</th>
                <th>Năm sinh</th>
                <th>Quê quán</th>
                <th>Số điện thoại</th>
                <th>Email</th>
                <th>Khác</th>
            </tr>
        </thead>
        <tbody>

            <?php
                $stt = 1;
                foreach($data as $value)
                {
            ?>
                <tr>
                    <td><?php echo $stt; ?></td>
                    <td><?php echo $value['hoten']; ?></td>
                    <td><?php echo $value['namsinh']; ?></td>
                    <td><?php echo $value['quequan']; ?></td>
                    <td><?php echo $value['sdt']; ?></td>
                    <td><?php echo $value['email']; ?></td>
                    <td>
                        <a 
                            
                            href="index.php?controller=thanh-vien&action=edit&id=<?php echo $value['id']?>">Sửa</a>
                        <a 
                            onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" 
                            href="index.php?controller=thanh-vien&action=delete&id=<?php echo $value['id']?>">Xóa</a>
                    </td>
                </tr>
            <?php
                    $stt++;
                }
            ?>
        </tbody>
    </table>
</div>