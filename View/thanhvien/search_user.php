<div class="danhsach">
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
                foreach($data_search as $value)
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
                            onclick="return confirm('Bạn có chắc chắn muốn sửa không?')" 
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
    <a href="index.php?controller=thanh-vien&action=list">Quay lại</a>
</div>