<?php
  include('koneksiMVC.php');
  $editDataKaryawan = $_POST['editDataKaryawan'];
  if (empty($editDataKaryawan)){
    $rs = $mysqli->query("UPDATE karyawan SET nik = '$_POST[nik]',  nama = '$_POST[nama]', alamat = '$_POST[alamat]', ttl = '$_POST[ttl]' , unit = '$_POST[unit]', jabatan = '$_POST[jabatan]'  WHERE nomor = '$_POST[nomor]'");
  } else {
    $rs = $mysqli->query("INSERT INTO karyawan VALUES ('" . $_POST['nomor'] . "','" . $_POST['nik'] . "','" . $_POST['nama'] . "','" . $_POST['alamat'] . "','" . $_POST['ttl'] . "','". $_POST['unit']. "','". $_POST['jabatan']."')");
  }
  header("location:dashboard.php");