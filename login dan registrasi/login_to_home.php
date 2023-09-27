<?php

session_start();

include 'SignUp_connect.php';


if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $pw = $_POST['password'];

    if (empty($email) || empty($pw)) {
        echo "<script>
                alert('Email dan password harus diisi');
                window.location = 'login.php';
            </script>";
        exit();
    }


    $ambil = mysqli_query($koneksi, "SELECT * FROM pelanggan WHERE email = '$email'");

    
    if (mysqli_num_rows($ambil) === 1){
        $data = mysqli_fetch_assoc($ambil);
        
        if (password_verify($pw, $data['password'])){
            $_SESSION['email'] =  $data['email'];

            header("location:index.php");
            exit();
        } else {
            echo "<script>
                alert('username atau password salah');
                window.location = 'login.php';
            </script>";
            exit();
        } 
    } else {
        echo "<script>
                alert('username atau password salah');
                window.location = 'login.php';
            </script>";
            exit();
    }
}  



?>