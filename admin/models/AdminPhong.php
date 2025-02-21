<?php

class AdminPhong
{
    public $conn;

    public function __construct()
    {
        $this->conn = connectDB();
    }
    public function getAllPhong()
    {
        try {
            $sql = "SELECT * FROM `phongs`";
            $stmt = $this->conn->query($sql);
            $data = $stmt->fetchAll();
            return $data;
        } catch (\Throwable $th) {
            echo $th;
        }
    }

    public function insertPhong(
        $ten_phong,
        $gia_phong,
        $hinh_anh,
        $loai_phong_id,
        $trang_thai_id,
        $kieu_phong_id,
        $mo_ta
    ) {
        try {
            $sql = "INSERT INTO phongs (ten_phong,gia_phong,hinh_anh,loai_phong_id, kieu_phong_id, trang_thai_id, mo_ta)
            VALUES (:ten_phong,:gia_phong,:hinh_anh,:loai_phong_id, :kieu_phong_id,:trang_thai_id, :mo_ta)";
            $stmt = $this->conn->prepare($sql);

            $stmt->execute([
                ':ten_phong' => $ten_phong,
                ':gia_phong' => $gia_phong,
                ':hinh_anh' => $hinh_anh,
                ':loai_phong_id' => $loai_phong_id,
                ':kieu_phong_id' => $kieu_phong_id,
                ':trang_thai_id' => $trang_thai_id,
                ':mo_ta' => $mo_ta,
            ]);
        } catch (Exception $e) {
            echo "LOI" . $e->getMessage();
        }
    }

    public function updatePhong(
        $id,
        $ten_phong,
        $gia_phong,
        $hinh_anh,
        $loai_phong_id,
        $trang_thai_id,
        $kieu_phong_id,
        $mo_ta
    ) {
        try {
            $sql = "UPDATE `phongs` 
            SET `ten_phong` = '$ten_phong', `loai_phong_id` = '$loai_phong_id',
                `kieu_phong_id` = '$kieu_phong_id', `gia_phong` = '$gia_phong',
                `trang_thai_id` = '$trang_thai_id',`hinh_anh` = '$hinh_anh',
                `mo_ta` = '$mo_ta' 
            WHERE `phongs`.`id` = $id;";
            $data = $this->conn->query($sql);
            return $data;
        } catch (\Throwable $th) {
            echo $th;
        }
    }

    public function getDetailPhong($id)
    {
        try {
            $sql = 'SELECT phongs.*,loai_phongs.ten_loai
            FROM phongs 
            INNER JOIN loai_phongs ON phongs.loai_phong_id = loai_phongs.id
            WHERE phongs.id = :id';

            $stmt = $this->conn->prepare($sql);

            $stmt->execute([
                ':id' => $id,
            ]);

            return $stmt->fetch();
        } catch (Exception $e) {
            echo "LOI" . $e->getMessage();
        }
    }

    public function deletePhong($id)
    {
        try {
            $sql =  "DELETE FROM phongs WHERE `phongs`.`id` = $id";
            $this->conn->query($sql);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function getBinhLuanFromPhong($id)
    {
        try {
            $sql = "SELECT danh_gias.*,tai_khoans.ho_ten
            FROM danh_gias 
            INNER JOIN tai_khoans ON danh_gias.tai_khoan_id = tai_khoans.id
            WHERE danh_gias.phong_id = :id
            ";

            $stmt = $this->conn->prepare($sql);

            $stmt->execute([':id' => $id]);

            return $stmt->fetchAll();
        } catch (Exception $e) {
            echo "LOI" . $e->getMessage();
        }
    }
    public function getBinhLuanFromClient($id)
    {
        try {
            $sql = "SELECT danh_gias.*,phongs.ten_phong
            FROM danh_gias 
            INNER JOIN phongs ON danh_gias.phong_id = phongs.id
            WHERE danh_gias.tai_khoan_id = :id
            ";

            $stmt = $this->conn->prepare($sql);

            $stmt->execute([':id' => $id]);

            return $stmt->fetchAll();
        } catch (Exception $e) {
            echo "LOI" . $e->getMessage();
        }
    }
}
