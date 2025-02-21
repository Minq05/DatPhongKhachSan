<?php

class AdminDanhMucPhong{
    public $conn;

    public function __construct()
    {
        $this->conn = connectDB();

    }

    public function getAllDanhMucPhong(){
        
        try {
            $sql = "SELECT * FROM `loai_phongs`";
        $stmt = $this->conn->query($sql);
        $data = $stmt->fetchAll();
        return $data;
        } catch (\Throwable $th) {
            echo $th;
        }
    }

    public function deleteDanhMuc($id)
    {
        try {
            $sql =  "DELETE FROM loai_phongs WHERE `loai_phongs`.`id` = $id";
            $this->conn->query($sql);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function insertDanhMucPhong($ten_loai, $mo_ta)
    {
        try {
            $sql = "INSERT INTO `loai_phongs` (`ten_loai`, `mo_ta`) VALUES ('$ten_loai', '$mo_ta')";
        $this->conn->query($sql);
        } catch (\Throwable $a) {
            echo $a;
        }
    }

    
    public function getDetailDanhMucPhong($id){
        
        try {
            $sql = "SELECT * FROM `loai_phongs` WHERE `loai_phongs`.`id`=$id";
            $stmt = $this->conn->query($sql);
            $data = $stmt->fetch();
            return $data;
        } catch (\Throwable $th) {
            echo $th;
        }
    }

    public function updateDanhMucPhong($id,$ten_loai, $mo_ta)
    {
        
        try {
            $sql = "UPDATE `loai_phongs` SET `ten_loai` = '{$ten_loai}', `mo_ta` = '{$mo_ta}' WHERE `loai_phongs`.`id` = $id";
        $this->conn->query($sql);
        } catch (\Throwable $th) {
            echo $th;
        }
    }
}

?>