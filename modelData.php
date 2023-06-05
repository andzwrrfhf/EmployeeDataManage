<?php
class atributData {
  private $nomor;
  private $nik;
  private $nama;
  private $alamat;
  private $ttl;
  private $unit;
  private $jabatan;
  public $hasil = array();
  public function setDataKaryawan($nomor, $nik, $nama, $alamat, $ttl, $unit, $jabatan){
    require "koneksiMVC.php";
    $rs = $mysqli->query("INSERT INTO karyawan VALUES ('$this->nomor', '$this->nik', '$this->nama', '$this->alamat', '$this->ttl', '$this->unit', '$this->jabatan')");
  }
  public function getSemuaDataKaryawan() {
    require "koneksiMVC.php";
    $rs = $mysqli->query("SELECT * FROM karyawan");
    $rows = array();
    while($row = $rs->fetch_assoc()) {
      $rows[] = $row;
    }
    $this->hasil[] = $rows;
    return $this->hasil;
  }
}

class UserModel
{
  public function getUser($id)
  {
    require "koneksiMVC.php";
    $stmt = $mysqli->prepare('SELECT id FROM user WHERE id = ?');
    $stmt->bind_param('s', $id);
    $stmt->execute();

    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    $stmt->close();
    $mysqli->close();

    return $user;
  }
}
