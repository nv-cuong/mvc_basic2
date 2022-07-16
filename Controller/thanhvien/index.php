<?php

    // include ("Model/DBconfig.php");

    if(isset($_GET['action']))
    {
        $action = $_GET['action'];
    }
    else
    {
        $action = '';
    }

    $success = array();

    switch($action)
    {
        case 'add':
            {
                if(isset($_POST['add_user']))
                {
                    $hoten = $_POST['hoten'];
                    $namsinh = $_POST['namsinh'];
                    $quequan = $_POST['quequan'];
                    $sdt = $_POST['sdt'];
                    $emali = $_POST['email'];

                    if($db->InsertData($hoten, $namsinh, $quequan, $sdt, $emali))
                    {
                        $success[] = 'add_success';
                        header('location: index.php?controller=thanh-vien&action=list');
                    }
                }

                require_once('View/thanhvien/add_user.php');
                break;
            }

        case 'edit':
            {
                if(isset($_GET['id']))
                {
                    $id = $_GET['id'];
                    $tblTable = 'tbl_thanhvien';
                    $dataID = $db->getDataID($tblTable, $id);

                    if(isset($_POST['update_user']))
                    {
                        //Lấy dữ liệu từ View
                        $hoten = $_POST['hoten'];
                        $namsinh = $_POST['namsinh'];
                        $quequan = $_POST['quequan'];
                        $sdt = $_POST['sdt'];
                        $email = $_POST['email'];

                        // Truyền dữ liệu đó sang Model
                        if($db->UpdateData($id, $hoten, $namsinh, $quequan, $sdt, $email))
                        {
                            header('location: index.php?controller=thanh-vien&action=list');
                        }
                    }

                }

                require_once('View/thanhvien/edit_user.php');
                break;
            }

        case 'delete':
            {
                if(isset($_GET['id']))
                {
                    $id = $_GET['id'];
                    $tblTable = "tbl_thanhvien";

                    if($db->DeleteData($id, $tblTable))
                    {
                        header('location: index.php?controller=thanh-vien&action=list');
                    }
                }
                else
                {
                    header('location: index.php?controller=thanh-vien&action=list');
                }

                break;
            }

        case 'list':
            {
                $tblTable = "tbl_thanhvien";
                $db->getData($tblTable);
                $data = $db->getAllData($tblTable);

                require_once('View/thanhvien/list.php');
                break;
            }

        case 'tim-kiem':
            {
                if(isset($_GET['tukhoa']))
                {
                    $key = $_GET['tukhoa'];
                    $tblTable = 'tbl_thanhvien';
                    
                    //Lấy dữ liệu từ Model
                    $data_search = $db->getSearchData($tblTable, $key);


                }
                require_once('View/thanhvien/search_user.php');
                break;
            }

        default :
            {
                require_once('View/thanhvien/list.php');
                break;
            }
    }
?>