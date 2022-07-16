<?php

    class Database
    {
        private $hostname = 'localhost';
        private $username = 'root';
        private $password = '';
        private $dbname = 'mvc_basic';

        private $conn = NULL;
        private $result = NULL;

        public function connect()
        {
            $this->conn = new mysqli($this->hostname, $this->username, 
                                    $this->password, $this->dbname);

            if(!$this->conn)
            {
                echo "Kết nối không thành công";
                exit();
            }
            else
            {
                mysqli_set_charset($this->conn, 'utf8');
            }
            return $this->conn;
        }

        // Thực thi câu lệnh truy vấn
        public function execute($sql)
        {
            $this->result = $this->conn->query($sql);
            return $this->result;
        }

        //Phương thức lấy dữ liệu
        public function getData()
        {
            if($this->result)
            {
                $data = mysqli_fetch_array($this->result);
            }
            else
            {
                $data = 0;
            }
            return $data;
        }

        //Phương thức lấy dữ liệu cần sửa
        public function getDataID($table, $id)
        {
            $sql = "SELECT * FROM $table WHERE id = '$id'";
            $this->execute($sql);
            if($this->num_rows() != 0)
            {
                $data = mysqli_fetch_array($this->result);
            }
            else
            {
                $data = 0;
            }
            return $data;
        }

        //Lấy toàn bộ dữ liệu
        public function getAllData($table)
        {
            $sql = "SELECT * FROM $table";
            $this->execute($sql);
            if($this->num_rows()==0)
            {
                $data = 0;
            }
            else
            {
                while($datas = $this->getData())
                {
                    $data[] = $datas;
                }
            }
            return $data;
        }

        //Đếm số lượng bản ghi
        public function num_rows()
        {
            if($this->result)
            {
                $num = mysqli_num_rows($this->result);
            }
            else
            {
                $num = 0;
            }
            return $num;
        }

        //Phuong thức thêm dữ liệu
        public function InsertData($hoten, $namsinh, $quequan, $sdt, $email)
        {
            $sql = "INSERT INTO tbl_thanhvien(id, hoten, namsinh, quequan, sdt, email) VALUES(null, '$hoten', '$namsinh', '$quequan', '$sdt', '$email')";

            return $this->execute($sql);
        }

        //Phương thức sửa dữ liệu
        public function UpdateData($id, $hoten, $namsinh, $quequan, $sdt, $email)
        {
            $sql = "UPDATE tbl_thanhvien SET hoten= '$hoten', namsinh='$namsinh', quequan='$quequan', 
                        sdt='$sdt', email='$email'  WHERE id = '$id' ";

            return $this->execute($sql);
        }

        //Phương thức xóa dữ liệu
        public function DeleteData($id, $table)
        {
            $sql = "DELETE FROM $table WHERE id='$id' ";
            return $this->execute($sql);
        }

        //Phương thức tìm kiếm dữ liệu
        public function getSearchData($table, $key)
        {
            $sql = "SELECT * FROM $table WHERE hoten REGEXP '$key' ORDER BY id DESC";
            $this->execute($sql);
            if($this->num_rows()==0)
            {
                $data = 0;
            }
            else
            {
                while($datas = $this->getData())
                {
                    $data[] = $datas;
                }
            }
            return $data;
        }
    }

?>