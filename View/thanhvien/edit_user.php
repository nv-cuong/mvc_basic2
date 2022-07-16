<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="content">
        <div class="add_user">
            <a href="index.php?controller=thanh-vien&action=list" class="list">Danh sách</a>
            <h3>Cập nhật thông tin nhân viên</h3>
            <form action="" method="POST">
                <table>
                    <tr>
                        <td>Tên nhân viên : </td>
                        <td>
                            <input type="text" name="hoten" value="<?php echo $dataID['hoten']; ?>" placeholder="Tên nhân viên...">
                        </td>
                    </tr>
                    <tr>
                        <td>Năm sinh : </td>
                        <td>
                            <input type="text" name="namsinh" value="<?php echo $dataID['namsinh']; ?>" placeholder="Năm sinh...">
                        </td>
                    </tr>
                    <tr>
                        <td>Quê quán : </td>
                        <td>
                            <input type="text" name="quequan" value="<?php echo $dataID['quequan']; ?>" placeholder="Quê quán...">
                        </td>
                    </tr>
                    <tr>
                        <td>Số điện thoại : </td>
                        <td>
                            <input type="text" name="sdt" value="<?php echo $dataID['sdt']; ?>" placeholder="Số điện thoại...">
                        </td>
                    </tr>
                    <tr>
                        <td>Email : </td>
                        <td>
                            <input type="text" name="email" value="<?php echo $dataID['email']; ?>" placeholder="Email...">
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>
                            <input type="submit" name="update_user" value="Cập nhật">
                        </td>
                    </tr>
                </table>
            </form>

        </div>
    </div>
</body>

</html>