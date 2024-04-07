<?php
session_start(); // Start the session
include('koneksi.php');

if (!isset($_SESSION["login"])) {
  header("location:login.php");
  exit();
}

$akses = $_SESSION['akses'];
$query = "SELECT * FROM tablemahasiswa";
$result = mysqli_query($connection, $query);
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  <title>Data Mahasisawa</title>
</head>

<body>

  <div class="container" style="margin-top: 80px">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            DATA MAHASISWA
          </div>
          <div class="card-body">
            <?php if ($akses === 'admin_akses') { ?>
              <a href="tambah.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
            <?php } ?>
            <a href="logout.php" class="btn btn-md btn-danger" style="margin-bottom: 10px">LOGOUT</a>
            <table class="table table-bordered" id="myTable">
              <thead>
                <tr>
                  <th scope="col">NO.</th>
                  <th scope="col">NIM</th>
                  <th scope="col">NAMA LENGKAP</th>
                  <th scope="col">JURUSAN</th>
                  <?php if ($akses === 'admin_akses') : ?>
                    <th scope="col">AKSI</th>
                  <?php endif; ?>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                while ($row = mysqli_fetch_array($result)) {
                ?>

                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $row['nim'] ?></td>
                    <td><?php echo $row['nama'] ?></td>
                    <td><?php echo $row['jurusan'] ?></td>
                    <?php if ($akses === 'admin_akses') { ?>
                      <td>
                        <a class="btn btn-warning text-white" href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                        <a class="btn btn-danger" href="hapus.php?id=<?php echo $row['id']; ?>">Hapus</a>
                      </td>
                    <?php } ?>
                  </tr>

                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready(function() {
        $('#myTable').DataTable();
      });
    </script>
</body>

</html>