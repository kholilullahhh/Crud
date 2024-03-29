<?php 
session_start(); // Start the session
if ( !isset($_SESSION["login"]) ){
    header("location:login.php");
    exit();
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah mahasiswa</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              TAMBAH MAHASISWA
            </div>
            <div class="card-body">
              <form action="simpan.php" method="POST">
                
                <div class="form-group">
                  <label>NIM</label>
                  <input type="text" name="nim" placeholder="Masukkan NIM Anda" class="form-control">
                </div>

                <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input type="text" name="nama" placeholder="Masukkan Nama Anda" class="form-control">
                </div>

                <div class="form-group">
                  <label>JURUSAN</label>
                  <textarea class="form-control" name="jurusan" placeholder="Masukkan Jurusan” rows="4"></textarea>
                </div>
                
                <button type="submit" class="btn btn-success">SIMPAN</button>
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