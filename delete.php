<?php
  include('koneksiMVC.php');
  $rs = $mysqli->query("DELETE FROM karyawan WHERE nomor='$_GET[nomor]'");
  header("location:dashboard.php");