<?php
session_start(); // Start the session

if (isset($_SESSION["login"])) {
  header("location:index.php");
  exit();
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <title>Registrasi</title>
</head>

<body>

  <div class="container" style="margin-top: 80px">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="card">
          <div class="card-header">
            REGISTRASI
          </div>
          <div class="card-body">
            <form action="addregist.php" method="POST">

              <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" placeholder="Masukkan Username Anda" class="form-control">
              </div>

              <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" placeholder="Masukkan Password Anda" class="form-control">
              </div>

              <div class="form-group">
                <select id="mySelect" name="akses">
                  <option value="admin_akses">Admin</option>
                  <option value="user_akses">User</option>
                </select>

              </div>

              <button type="submit" class="btn btn-success">SIMPAN</button>
              <button type="reset" class="btn btn-warning">RESET</button>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- <script>
function getSelectedValue() {
  var selectElement = document.getElementById("mySelect");
  var selectedValue = selectElement.value;
  alert("Selected value is: " + selectedValue);
}
</script> -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>