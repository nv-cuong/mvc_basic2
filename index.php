<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý nhân viên</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    
</body>

</html>

<?php
    include "Model/DBconfig.php";
    $db = new Database;
    $db->connect();

    if (isset($_GET['controller'])) {
        $controller = $_GET['controller'];
    } else {
        $controller = '';
    }

    switch ($controller) {
        case 'thanh-vien': {
                require_once('Controller/thanhvien/index.php');
            }
    }
?>