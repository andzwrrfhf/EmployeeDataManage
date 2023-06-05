<?php
include_once("modelData.php");
class createData
{
    public $model;
    public function __construct()
    {
        $this->model = new atributData();
    }
    public function invoke()
    {
        $datakaryawan = $this->model->getSemuaDataKaryawan();
        include 'dashboard.php';
    }
    public function tambahdatakaryawan(
        $No,
        $NIK,
        $Nama,
        $Alamat,
        $Ttl,
        $Unit,
        $Jabatan
    ) {
        $this->model = new atributData();
        $tambahdatakaryawan= $this->model -> setDataKaryawan($No, $NIK, $Nama, $Alamat, $Ttl, $Unit, $Jabatan);
    }
}

require_once 'modelData.php';

class UserController {
    private $model;

    public function __construct() {
        $this->model = new UserModel();
    }

    public function login($id, $password) {
        $user = $this->model->getUser($id);

        if ($user && password_hash($password, $user['password'])) {
            session_start();
            $_SESSION['id'] = $id;
            header('Location: dashboard.php'); 
        } else {
            echo 'Invalid username or password';
        }
    }
}

?>