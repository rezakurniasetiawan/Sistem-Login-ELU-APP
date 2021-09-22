<?php
  /*
    #Mencari Total Nilai dan Grade pada PHP
  */

  //menampung Nilai dari textfield ke dalam variabel
  $panjang = @$_POST['tpanjang'];
  $lebar = @$_POST['tlebar'];
  $tinggi = @$_POST['ttinggi'];
  $hasil = @$_POST['thasil'];




  //Pengujian jika tombol proses diklik
  if(isset($_POST['bproses'])){

  	//menampung total nilai
  	$hasil = ($panjang * $lebar * $tinggi);



  }




?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Volume Balok</title>
    <link rel="stylesheet" href="css/mycss2.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <style>
       .info-btn{
  color: #FFF;
  background: #4748bd;
  text-decoration: none;
  text-transform: uppercase;
  padding-left: 10px;
  padding-right: 10px;
  margin-right: 10px;
  border-radius: 5px;
  transition: 0.3s;
  float: center;
  transition-property: background;
}
   </style>
<body>
  <div class="container">
    <div class="title"><a href="index.php" class="info-btn">  <i style='font-size:24px' class='fas'>&#xf060;</i></a>Menghitung Volume Balok</div>
    <img src="img/balokvol.png" style="width:50%"  >
    <div class="content">
      <form method="post" action="">
        <div class="user-details">
        <div class="input-box">
            <span class="details">Panjang</span>
            <input value="<?=$panjang?>" type="number" name="tpanjang" placeholder="Masukkan panjang balok" required>
          </div>
          <div class="input-box">
            <span class="details">Lebar</span>
            <input value="<?=$lebar?>" type="number" name="tlebar" placeholder="Masukkan lebar balok" required>
          </div>
          <div class="input-box">
            <span class="details">Tinggi </span>
            <input value="<?=$tinggi?>" type="number" name="ttinggi" placeholder="Masukkan tinggi balok" required>
          </div>           
        </div>
        <div class="button" onclick="myFunction()" >
          <input type="submit" name="bproses" value="Hitung">
        </div>
      </form>
    </div>
    <div class="content" id="myDIV">
      <form method="post" action="">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Hasil : </span>
            <input value="<?=$hasil?>" type="text" name="thasil"  required>
          </div>       
        </div>
      </form>
    </div>
   
  </div>

</body>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</html>
