<?php
session_start(); // Start the session

include("koneksi.php");

$username = "";
$password = "";
$err = "";

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == '' or $password == '') {
        $err .= "<li>Silakan masukkan username dan password</li>";
    }

    if (empty($err)) {
        $query = "SELECT * FROM tablelogin WHERE username = '$username'";
        $result = mysqli_query($connection, $query);

        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);

            if ($row['password'] == md5($password)) {
                $login_id = $row['login_id'];
                $akses = $row['akses']; // Assuming 'admin_akses' is the column for access level

                $_SESSION['login_id'] = $login_id;
                $_SESSION['username'] = $username;
                $_SESSION['akses'] = $akses;

                if ($akses == 'admin_akses') {
                    header("location:index.php"); // Redirect to admin page
                    exit();
                } elseif ($akses == 'user_akses') {
                    header("location:indexuser.php"); // Redirect to user page
                    exit();
                }
            } else {
                $err .= "<li>Password salah</li>";
            }
        } else {
            $err .= "<li>Akun tidak ditemukan</li>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="app">
        <h1>Halaman Login</h1>
        <?php
        if ($err) {
            echo "<ul>$err</ul>";
        }
        ?>
        <form action="" method="post">
            <input type="text" value="<?php echo $username ?>" name="username" class="input" placeholder="Isikan Username..." /><br /><br />
            <input type="password" name="password" class="input" placeholder="Isikan Password" /><br /><br />
            <input type="submit" name="login" value="Masuk Ke Sistem" />
            <a href="registrasi.php">REGISTRESI</a>
        </form>
    </div>
</body>

</html>
