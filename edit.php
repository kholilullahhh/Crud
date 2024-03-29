<?php 
session_start(); // Start the session
//   if ( !isset($_SESSION ["login"]) ){
//     header("location:login.php");
//     exit();
// }
  include('koneksi.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM tablemahasiswa WHERE id = $id LIMIT 1";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Mahasiswa</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT MAAHSISWA
            </div>
            <div class="card-body">
              <form action="update.php" method="POST">
                
                <div class="form-group">
                  <label>NIM</label>
                  <input type="text" name="nim" value="<?php echo $row['nim'] ?>" placeholder="Masukkan NIM Mahasiswa" class="form-control">
                  <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                </div>

                <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input type="text" name="nama" value="<?php echo $row['nama'] ?>" placeholder="Masukkan Nama Anda" class="form-control">
                </div>

                <div class="form-group">
                  <label>Jurusan</label>
                  <textarea class="form-control" name="jurusan" placeholder="Masukkan jurusan Anda" rows="4"><?php echo $row['jurusan'] ?></textarea>
                </div>
                
                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>