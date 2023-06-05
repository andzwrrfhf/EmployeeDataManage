<?php
  include('koneksiMVC.php');
  $addDataKaryawan = $_POST['addDataKaryawan'];
  if (empty($addDataKaryawan)){
    $rs = $mysqli->query("INSERT INTO karyawan VALUES ('" . $_POST['nomor'] . "','" . $_POST['nik'] . "','" . $_POST['nama'] . "','" . $_POST['alamat'] . "','" . $_POST['ttl'] . "','". $_POST['unit']. "','". $_POST['jabatan']."')");
  } else {
    $rs = $mysqli->query("UPDATE karyawan SET nik = '$_POST[nik]',  nama = '$_POST[nama]', alamat = '$_POST[alamat]', ttl = '$_POST[ttl]' , unit = '$_POST[unit]', jabatan = '$_POST[jabatan]'  WHERE nomor = '$_POST[nomor]'");
  }
  header("location: dashboard.php");