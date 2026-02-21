<?php
class laundryModel {
    private $conn;
    private $table_name = "antrian";

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function getSemuaAntrian() {
        $query = "SELECT * FROM " . $this->table_name . " ORDER BY id ASC";

        $result = $this->conn->query($query);

        return $result;
    }

    public function tambahAntrian($nama, $berat) {
        $nama = $this->conn->real_escape_string($nama);

        $berat = (float)$berat;

        $query = "INSERT INTO " . $this->table_name . " (nama_pelanggan, berat_kg, status) VALUES ('$nama', $berat, 'Menunggu')";
        
        return $this->conn->query($query);
    }

    public function hapusAntrian($id) {
        $id = (int)$id;

        $query = "DELETE FROM " . $this->table_name . " WHERE id = $id";
        
        return $this->conn->query($query);
    }

    public function getAntrianById($id) {
        $id = (int)$id;
        $query = "SELECT * FROM " . $this->table_name . " WHERE id = $id";
        $result = $this->conn->query($query);

        return $result->fetch_assoc();
    }

    public function updateAntrian($id, $nama, $berat, $status) {
        $id = (int)$id;
        $nama = $this->conn->real_escape_string($nama);
        $berat = (float)$berat;
        $status = $this->conn->real_escape_string($status);

        $query = "UPDATE " . $this->table_name . "
                    SET nama_pelanggan = '$nama',
                        berat_kg = $berat,
                        status = '$status'
                    WHERE id = $id";

        return  $this->conn->query($query);
    }
}