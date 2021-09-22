<?php
  /*
    #Mencari Total Nilai dan Grade pada PHP
  */

  //menampung Nilai dari textfield ke dalam variabel
  $nim = @$_POST['tnim'];
  $nama = @$_POST['tnama'];
  $jurusan = @$_POST['tjurusan'];
  $tugas = @$_POST['ttugas'];
  $presensi = @$_POST['tpresensi'];
  $uts = @$_POST['tuts'];
  $uas = @$_POST['tuas'];
  $total = @$_POST['ttotal'];
  $grade = @$_POST['tgrade'];


  //Pengujian jika Field Nim di enter
  if(isset($nim))
  {
  	if($nim == "19051397021"){
  		$nama = "Reza Kurnia Setiawan";
  		$jurusan = "Teknik Informatika";
  	}elseif($nim == "19051397020"){
  		$nama = "Moh. Ibnu Nadhir";
  		$jurusan = "Teknik Informatika";
    }elseif($nim == "19010044008"){
  		$nama = "Sri Wiji Indriana";
  		$jurusan = "Pendidikan Luar Biasa";
  	}else{
  		echo "<script>alert('Maad, Data tidak ditemukan..!')</script>";
  		$nama = "";
  		$jurusan = "";
  	}
  	
  }

  //Pengujian jika tombol proses diklik
  if(isset($_POST['bproses'])){

  	//menampung total nilai
  	$total = (3 * $tugas + 2 * $presensi + 2 * $uts + 3 * $uas) / 10;

  	//Pengujian Total Nilai untuk mendapatkan Grade
  	if($total >= 85){
  		$grade = "A";
  	}elseif($total >= 80 && $total < 85){
  		$grade = "A-";
  	}elseif($total >= 75 && $total < 80){
  		$grade = "B+";
  	}elseif($total >= 70 && $total < 75){
  		$grade = "B";
  	}elseif($total >= 65 && $total < 70){
  		$grade = "B-";
  	}elseif($total >= 60 && $total < 65){
  		$grade = "C+";
    }elseif($total >= 55 && $total < 60){
  		$grade = "C";
    }elseif($total >= 40 && $total < 55){
  		$grade = "D";
  	}else{
  		$grade = "E";
  	}

  }




?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Entry Nilai</title>
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
    <div class="title"><a href="index.php" class="info-btn">  <i style='font-size:24px' class='fas'>&#xf060;</i></a>Entry Nilai Mahasiswa</div>
    <div class="content">
      <form method="post" action="">
        <div class="user-details">
        <div class="input-box">
            <span class="details">NIM</span>
            <input value="<?=$nim?>" type="number" name="tnim" placeholder="Masukkan nilai presensi anda" required>
          </div>
          <div class="input-box">
            <span class="details">Nilai Presensi</span>
            <input value="<?=$presensi?>" type="number" name="tpresensi" placeholder="Masukkan nilai presensi anda" required>
          </div>
          <div class="input-box">
            <span class="details">Nilai Tugas </span>
            <input value="<?=$tugas?>" type="number" name="ttugas" placeholder="Masukkan nilai tugas" required>
          </div>
          <div class="input-box">
            <span class="details">Nilai UTS</span>
            <input value="<?=$uts?>" type="number" name="tuts" placeholder="Masukkan nilai UTS" required>
          </div>
          <div class="input-box">
            <span class="details">Nilai UAS</span>
            <input value="<?=$uas?>" type="number" name="tuas" placeholder="Masukkan nilai UAS" required>
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
            <span class="details">Nama Lengkap</span>
            <input value="<?=$nama?>" type="text" name="tnama"  required>
          </div>
          <div class="input-box">
            <span class="details">Jurusan </span>
            <input value="<?=$jurusan?>" type="text" name="tjurusan"  required>
          </div>
          <div class="input-box">
            <span class="details">Nilai Akhir</span>
            <input value="<?=$total?>" type="number" name="ttotal"  required>
          </div>
          <div class="input-box">
            <span class="details">GRADE</span>
            <input value="<?=$grade?>" type="text" name="tgrade"  required>
          </div>            
        </div>
      </form>
    </div>
   
  </div>
  <script>
function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>

</body>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</html>
