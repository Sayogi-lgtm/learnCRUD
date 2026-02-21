<?php

require_once 'models/laundryModel.php';

class laundryController{
    private  $model;

    public function __construct($db)
    {
        $this->model = new laundryModel($db);
    }

    public function index() {
        $data_antrian = $this->model->getSemuaAntrian();

        require_once 'views/list.php';
    }
//--
    public function create() {
        require_once 'views/create.php';
    }

    public function store() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $nama = $_POST['nama_pelanggan'];
        $berat = $_POST['berat_kg'];
        if ($this->model->tambahAntrian($nama, $berat)) {
            header("Location: index.php");
            exit(); 
        } else {
            echo "Gagal menambahkan data antrian.";
        }
        }
    }
//---
    public function delete() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            if ($this->model->hapusAntrian($id)) {
                header("Location: index.php");
                exit();
            } else {
                echo "Gagal menghapus data antrian.";
            }
        }
    }
//----
    public function  edit() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            $data = $this->model->getAntrianById($id);

            require_once 'views/edit.php';
        }
    } 

    public function update() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['id'];
            $nama = $_POST['nama_pelanggan'];
            $berat = $_POST['berat_kg'];
            $status = $_POST['status'];

            if ($this->model->updateAntrian($id, $nama, $berat, $status)) {
                header("Location: index.php");
                exit();
            } else {
                echo "Gagal memperbarui data antrian.";
            }
        }
    }
}