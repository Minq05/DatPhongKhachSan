<?php
class Phong
{
    public $conn; // Khai bao phuong thuc 

    public function __construct()
    {
        $this->conn = connectDB();
    }

    public function getAllPhong()
    {
        // Cau lenh SQL
        try {
            $sql = "SELECT * FROM `phongs`";

            $stmt = $this->conn->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (Exception $e) {
            echo ($e);
        }
    }

    public function getPhong()
    {
        // Cau lenh SQL
        try {
            $sql = "SELECT * FROM `phongs`";
            $stmt = $this->conn->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (Exception $e) {
            echo ($e);
        }
    }

    public function getPhongFilter()
    {
        // Cau lenh SQL
        try {
            $sql = "SELECT * FROM `phongs`";
            $stmt = $this->conn->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (Exception $e) {
            echo ($e);
        }
    }


    public function getAllRoom()
    {
        // Cau lenh SQL
    }

    public function getDetailPhong($id)
    {


        // Cau lenh SQL
        try {
            $sql = "SELECT * FROM `phongs` WHERE `phongs`.`id`=$id";

            $stmt = $this->conn->prepare($sql);

            $stmt->execute();

            return $stmt->fetch();
        } catch (Exception $e) {
        }
    }

    public function getAllBinhLuan($id)
    {
        try {
            $sql = "SELECT *
                    FROM danh_gias
                    INNER JOIN tai_khoans ON danh_gias.tai_khoan_id = tai_khoans.id
                    WHERE danh_gias.phong_id = $id;";
            $stmt = $this->conn->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (Exception $e) {
        }
    }

    public function getAllRooms()
    {
        $sql = "SELECT id, trang_thai_id FROM phongs";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll();
    }

    public function updateRoomStatus($room_id)
    {
        $sql = "UPDATE phongs SET trang_thai_id = 1 WHERE id = $room_id";
        $this->conn->query($sql);
    }

}
