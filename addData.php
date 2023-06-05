<html>
<?php
include('koneksiMVC.php');
if (!empty($_GET['addDataKaryawan'])) {
  $query = $mysqli->query("SELECT * FROM karyawan WHERE nomor='$_GET[nomor]'");
  $data = mysqli_fetch_array($query);
}
?>

<head>
  <title>Hi</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="addData.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="script.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<body>
  <?php
  session_start();
  if (isset($_POST['logout'])) {
    session_destroy();
    header('location: login.php');
  }

  if (isset($_POST['dashboard'])) {
    header('location: dashboard.php');
  } else if (isset($_POST['edit'])) {
    header('location: editView.php');
  }

  if (isset($_POST['profile'])) {
    header('location: profile.php');
  }
  ?>
  <nav class="navbar navbar-dark">
    <div class="dropdown">
      <button onclick="toggleDropdown()" class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img class="user-img" width="20px" height="20px" src="icons8-user-64.png" />
        <span class="profile-name">Welcome</span>
      </button>
      <form method="post">
        <div id="myDropdown" class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <form method="post">
            <input class="dropdown-item" type="submit" name="profile" value="Profile">
            <input class="dropdown-item" type="submit" name="logout" value="Logout">
          </form>
        </div>
      </form>
    </div>
  </nav>
  <div class="sidebar">
    <div class="admin-card">
      <img class="admin-avatar" width="48px" height="48px" src="icons8-avatar-67.png">
      <div class="admin-profile">
        <p class="admin">Admin</p>
      </div>
    </div>
  </div>
  <div class="body-container">
    <div class="title-container">
      <p class="title">Form Data Karyawan</p>
    </div>
    <div class="form-container">
      <form method="post" action="add.php">
        <input type="hidden" name="addDataKaryawan" value="<?php if (isset($data)) echo $data['nomor']; ?>" />
        <div class="form1">
          <p class="label">No.</p>
          <input type="text" name="nomor" required value="<?php if (isset($data)) echo $data['nomor']; ?>" />
        </div>
        <div class="form1">
          <p class="label">NIK</p>
          <input type="text" name="nik" required value="<?php if (isset($data)) echo $data['nik']; ?>" />
        </div>
        <div class="form1">
          <p class="label">Nama</p>
          <input type="text" name="nama" required value="<?php if (isset($data)) echo $data['nama']; ?>">
        </div>
        <div class="form1">
          <p class="label">Alamat</p>
          <input type="text" name="alamat" required value="<?php if (isset($data)) echo $data['alamat']; ?>">
        </div>
        <div class="form1">
          <p class="label">TTL</p>
          <input type="date" name="ttl" required value="<?php if (isset($data)) echo $data['ttl']; ?>">
        </div>
        <div class="form1">
          <p class="label">Unit</p>
          <input type="text" name="unit" required value="<?php if (isset($data)) echo $data['unit']; ?>">
        </div>
        <div class="form1">
          <p class="label">Jabatan</p>
          <input type="text" name="jabatan" required value="<?php if (isset($data)) echo $data['jabatan']; ?>">
        </div>
        <input type="submit" class="btn-add" name="submitAdd" value="Add Data">
      </form>
    </div>
  </div>
</body>

</html>