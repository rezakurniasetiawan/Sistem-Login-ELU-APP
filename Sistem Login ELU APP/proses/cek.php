<?php
require "koneksi.php";

function registrasi($data) {
    global $koneksi;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($koneksi, $data["password"]);
    $password2 = mysqli_real_escape_string($koneksi, $data["password2"]);

    //cek konfirm password
    if ($password != $password2){
        echo "<script>
                alert('Konfirmasi password tidak sesuai');
            </script>";
        return false;
    }
    
    //cek username
    $cekuser = mysqli_query($koneksi,"SELECT username FROM user WHERE username = '$username'");

    if(mysqli_fetch_assoc($cekuser)){
        echo "<script>
                alert('Username sudah terdaftar sebelumnya');
            </script>";
        return false;
    }

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //insert ek database
    mysqli_query($koneksi, "INSERT INTO user VALUES('','$username','$password')");

    return mysqli_affected_rows($koneksi);
}

?>