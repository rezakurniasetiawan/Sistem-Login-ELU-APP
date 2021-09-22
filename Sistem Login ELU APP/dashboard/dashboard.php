<?php
session_start();
if(!isset($_SESSION["login"])){
    header("Location: ../login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body{
            background-color:#4748bd ;
        }
        .text-jdl{
            color: #FFF;
            text-align: center;
            margin-top: 15%;
        }
        .btn-logout{
            align-content: center;
            border-radius: 5px;
            border: none;
            padding-left: 20px;
            padding-right: 20px;
            padding-top: 10px;
            padding-bottom: 10px;
            color: rgb(0, 0, 0);
            font-size: 18px;
            font-weight: 500;
            letter-spacing: 1px;
            cursor: pointer;
            transition: all 0.3s ease;
            background: #FFF;
        }
    </style>
</head>
<body>
    <H1 class="text-jdl" >Selamat Datang di Dashboard</H1>
    <center><a  href="../proses/ceklogout.php"><button class="btn-logout"  type="submit" name="logout" >logout</button></a></center>
</body>
</html>
