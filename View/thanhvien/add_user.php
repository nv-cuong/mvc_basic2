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
            <h3>Thêm mới nhân viên</h3>
            <form action="" method="POST">
                <table>
                    <tr>
                        <td>Tên nhân viên : </td>
                        <td>
                            <input type="text" name="hoten" placeholder="Tên nhân viên...">
                        </td>
                    </tr>
                    <tr>
                        <td>Năm sinh : </td>
                        <td>
                            <input type="text" name="namsinh" placeholder="Năm sinh...">
                        </td>
                    </tr>
                    <tr>
                        <td>Quê quán : </td>
                        <td>
                            <input type="text" name="quequan" placeholder="Quê quán...">
                        </td>
                    </tr>
                    <tr>
                        <td>Số điện thoại : </td>
                        <td>
                            <input type="text" name="sdt" placeholder="Số điện thoại...">
                        </td>
                    </tr>
                    <tr>
                        <td>Email : </td>
                        <td>
                            <input type="text" name="email" placeholder="Email...">
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>
                            <input type="submit" name="add_user" value="Thêm">
                        </td>
                    </tr>
                </table>
            </form>

            <?php
                if(isset($success) && in_array('add_success', $success))
                {
                    echo "<p class='success'> Thêm mới thành công! </p>";
                }
            ?>

        </div>
    </div>
</body>

</html>