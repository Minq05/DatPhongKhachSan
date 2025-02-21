<?php
class AdminTaiKhoan
{
    public $conn;

    public function __construct()
    {
        $this->conn = connectDB();
    }

    public function getAllTaiKhoan($chuc_vu_id)
    {
        //    Cau lenh SQL
        try {
            $sql = "SELECT * FROM tai_khoans WHERE chuc_vu_id = :chuc_vu_id";

            $stmt = $this->conn->prepare($sql);

            $stmt->execute([':chuc_vu_id' => $chuc_vu_id]);

            return $stmt->fetchAll();
        } catch (Exception $e) {
            echo "LOI" . $e->getMessage();
        }
    }
    public function getAllTaiKhoanAD()
    {
        //    Cau lenh SQL
        try {
            $sql = "SELECT * FROM tai_khoans";

            $stmt = $this->conn->query($sql);
            $data = $stmt->fetchAll();
            return $data;
        } catch (Exception $e) {
            echo "LOI" . $e->getMessage();
        }
    }

    public function insertTaiKhoan(
        $ho_ten,
        $email,
        $dien_thoai
    ) {
        try {
            $sql = "INSERT INTO `tai_khoans` (`ho_ten`, `password`, `dien_thoai`, `email`, `chuc_vu_id`,`trang_thai_id`) 

            VALUES ('$ho_ten', '123456', '$dien_thoai', '$email', '1','1')";
            var_dump($sql);
            die();
            $this->conn->query($sql);
            
            return true;
        } catch (Exception $e) {
            echo "LOI" . $e->getMessage();
        }
    }

    public function deleteTaiKhoan($id)
    {
        try {
            $sql = "DELETE FROM tai_khoans WHERE `tai_khoans`.`id` = $id";
            $this->conn->query($sql);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function getDetailTaiKhoan($id)
    {
        //    Cau lenh SQL
        try {
            $sql = "SELECT * FROM tai_khoans WHERE id = $id";

            $stmt = $this->conn->query($sql);
            $data = $stmt->fetch();


            return $data;
        } catch (Exception $e) {
            echo "LOI" . $e->getMessage();
        }
    }

    public function postUpdateQt($id, $ho_ten, $email, $dien_thoai)
    {
        try {
            $sql = "UPDATE `tai_khoans` SET `ho_ten` = '$ho_ten', `dien_thoai` = '$dien_thoai', `email` = '$email' WHERE `tai_khoans`.`id` = $id";
            $this->conn->query($sql);

            return true;
        } catch (Exception $e) {
            echo "LOI" . $e->getMessage();
        }
    }


    public function postUpdateKh($id, $ho_ten, $email, $dien_thoai)
    {
        try {
            $sql = "UPDATE `tai_khoans` 
                    SET `ho_ten` = '$ho_ten',
                         `dien_thoai` = '$dien_thoai', 
                         `email` = '$email' 
                    WHERE `tai_khoans`.`id` = $id";
            $this->conn->query($sql);

            return true;
        } catch (Exception $e) {
            echo "LOI" . $e->getMessage();
        }
    }
}
