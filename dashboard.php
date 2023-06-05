<html>

<head>
  <title>Hi</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="dashboard.css">
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
    <p class="body-title">Data Karyawan</p>
    <table>
      <tbody>
        <tr>
          <th>No.</th>
          <th>NIK</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>Tanggal Lahir</th>
          <th>Unit</th>
          <th>Jabatan</th>
          <th>Edit</th>
        </tr>
        <?php
        include "koneksiMVC.php";
        $rs = $mysqli->query("SELECT * FROM karyawan");
        while ($dataKaryawan = mysqli_fetch_array($rs)) {
          echo "
              <tr>
              <td>$dataKaryawan[nomor]</td>
              <td>$dataKaryawan[nik]</td>
              <td>$dataKaryawan[nama]</td>
              <td>$dataKaryawan[alamat]</td>
              <td>$dataKaryawan[ttl]</td>
              <td>$dataKaryawan[unit]</td>
              <td>$dataKaryawan[jabatan]</td>
              <td class='edit-container'>
              <button class='btn-edit'><a href=\"editForm.php?nomor=$dataKaryawan[nomor]&e=1\"><img src='icons8-edit-24.png' width='16px' height='16px'></a></button>
              <button class='btn-del'><a href=\"delete.php?nomor=$dataKaryawan[nomor]\"><img src='icons8-delete-30 (1).png' width='16px' height='16px'></a></button>
              </td>
              </tr>
            ";
        }
        ?>
      </tbody>
    </table>
    <div class="btn-container">
      <form method="post" action="addData.php">
        <button class="btn-add"><img src="icons8-add-user-64.png" width="24px" height="24px"></button>
      </form>
    </div>
  </div>
</body>

</html>