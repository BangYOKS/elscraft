<?php
include 'login_connect.php';

if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pw1 = $_POST['password'];
    $pw2 = $_POST['Cpw'];


    if (empty($username) || empty($email) || empty($pw1) || empty($pw2)) {
        echo "<script>
                alert('Semua field harus diisi');
                window.location = 'login.php';
            </script>";
        exit();
    }

    $cek = mysqli_query($koneksi, "SELECT * FROM pelanggan WHERE username = '$username'");
    $cek_login = mysqli_num_rows($cek);

    if ($cek_login > 0){
        echo "<script>
                alert('anda telah mendaftar');
                window.location = 'login.php';
            </script>";
            exit();
    } else {
        if ($pw1 != $pw2) {
            echo "<script>
                alert('password tidak sesuai');
                window.location = 'login.php';
            </script>";
            exit();
        } else {
            $password = password_hash($pw1, PASSWORD_DEFAULT);
            mysqli_query($koneksi, "INSERT INTO pelanggan VALUES('$username','$email','$password')");
            echo "<script>
                alert('data telah tersubmit');
                window.location = 'login.php';
            </script>"; 
            exit();
        }

    }

}



?>