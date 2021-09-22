<?php

session_start();
require "proses/cek.php";

try{
    if(isset($_COOKIE['id']) && isset($_COOKIE['key']) ){
      $id = $_COOKIE['id'];
          $key = $_COOKIE['key'];

          //ambil username berdasarkan id
          $result = mysqli_query($koneksi, "SELECT username from user WHERE id =$id");
          $row = mysqli_fetch_assoc($result);

          //cek cookie dan username
          if ($key === hash('sha256', $row['username'])) {
              $_SESSION['login'] = true;
          }
    }


  if(isset($_POST["login"])){
  
    $username = $_POST["username"];
    $password = $_POST["password"];
  
    $result = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");
  
    //check user
    if( mysqli_num_rows($result) === 1){
  
      //cek session
      $_SESSION["login"] = true;
  
      //cek remember me
      if(isset($_POST["remember"])){
          //build cookie
          setcookie('id',$row['id'], time() +360);
          setcookie('key', hash('sha256' , $row['username']),
              time() +260);
      }
  
      //cek password
      $row = mysqli_fetch_assoc($result);
      if (password_verify($password, $row["password"])){
        header("Location: dashboard/dashboard.php");
        exit;
      }
    }
    $error = true;
    if(isset($error)){
      echo "<script>
      alert('Username atau Password salah');
      </script>"; }
  }

}catch (Error $e) {
  echo "Error caught: " . $e->getMessage();
}

  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/style-login.css">
    <title>Login</title>
</head>
<body>
  <form action="" method="post" id="login-form"   >
      <h1>Sign In</h1>
      <div class="titel" for="username" ><i class="fas fa-user"></i> Username</div>
      <div class="input-box">
        <input type="text" name="username" id="username" placeholder="Masukkan Username" required="required">
      </div>
      <div class="titel" for="password" ><i class="fas fa-lock"></i> Password</div>
      <div class="input-box">
        <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password" required="required" >
      </div>
      <label><input type="checkbox" name="remember"> Remember me</label>
      <button  class="login-btn" type="submit" id="login" name="login" >Login</button>
      <center><div style="margin-top: 20px;" >Don't have an account?<a href="register.php" > Create One</a></div></center>

  </form>
</body>
</html>
