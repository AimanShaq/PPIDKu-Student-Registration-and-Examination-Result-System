<?php 

include ('dbconnect.php');
 include 'header.php';


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Borang Pendaftaran Darjah 1</title>
  
 

  <style>
.error{
  color: #ff0000;
}

.container {
  margin:  center;
  background:white;
  border: 5px solid black;

}
body {
 background-image: linear-gradient(90deg,#0E2F56,#FF304F);
 color: black;
}
h2 {
  color: 10px solid black;
  text-align: center;
}

h3{
  text-decoration-line: underline;
  text-align: center;
}

h4{
  color: 8px solid black;
  text-align: center;
}

h5{
  color: 5px solid black;
}


a:visited, a:link {
  color: white;
  text-align: center;
  background-color: solid;
  text-decoration: none;
}

a:hover {
  color: lightblue;
  background-color: transparent;
  text-decoration: underline;
}
a:active {
  color: lightblue;
  background-color: transparent;
  text-decoration: underline;
}


</style>

</head>
<body>
<br>
<div class="container">
<h2>Borang Pendaftaran Darjah 1<h2>
</div>
<br>

<div class="container">
<h4>Jabatan Agama Islam Negeri Johor <h4>
<h4>(Bahagian Pendidikan) <h4>
<h4>Permohonan Belajar Di Sekolah Agama Kerajaan Johor<h4>
</div>
<br>
<!-- <div class="w3-lightblue">
<center>
<a href="borangpendaftarandarjah1bhg1.php">| BAHAGIAN 1: BUTIRAN DIRI CALON |</a>
<a href="borangpendaftarandarjah1bhg2.php">| BAHAGIAN 2: BUTIRAN KELUARGA |</a>
<a href="borangpendaftarandarjah1bhg3.php">| BAHAGIAN 3: PENGAKUAN IBU BAPA /PENJAGA |</a>
</center>
</div> -->
<form method ="POST" action="bd1process.php">
<br>

<div class="container">
<br>
<h5>BAHAGIAN 1<h5>
  <h3>BUTIRAN DIRI CALON</h3>
  

  <div class="form-group">
      <label for="name">Nama :</label>
      <input type="name"  class= "form-control" id="fn" name="fn" required>
    </div>

    <div class="form-group">
      <label for="id">No. Surat Beranak:</label>
      <input type="name"  id="fs"  name="fs" required>
    </div>

    <div class="form-group">
      <label for="text">Jantina:</label>
      <input type="name"  id="fjt"  name="fjt" required>
    </div> 

    <div class="form-group">
      <label for="text">Negeri Tempat Lahir:</label>
      <textarea rows="1" id="fte" name="fte"></textarea>
    </div>
  
    <div class="form-group">
      <label for="text">Warganegara:</label>
      <input type="text"  id="fwn"  name="fwn" required>
    </div>    

    <div class="form-group">
      <label for="text">Umur pada 1 Januari 2020:</label>
      <input type="text"  id="fta"  name="fta" required>
      <!-- <label for="number">Tahun</label>
      <input type="number" name="quantity" min="6" max="10">
      <label for="number">Bulan</label>
      <input type="number" name="quantity" min="0" max="12">
      <label for="number">Hari</label>
      <input type="number" name="quantity" min="0" max="31"> -->
    </div>

    <div class="form-group">
      <label for="text">Kecacatan (Jika Ada):</label>
      <input type="text"  id="fl"  name="fl" required>
    </div>

    <div class="form-group">
      <label for="text">Nama Sekolah Kebangsaan Tahun 2020:</label>
      <input type="name"  class= "form-control" id="fsn" name="fsn" required>
    </div>

    <div class="form-group">
      <label for="text">Darjah:</label>
      <input type="name"  class= "form-control" id="fds" name="fds" required>
    </div>

    <div class="form-group">
      <label for="text">Alamat Surat Menyurat:</label>
      <textarea class="form-control" rows="4" id="fal" name="fal"></textarea>
    </div>  

    <div class="form-group">
      <label for="text">Poskod:</label>
      <input type="text"  id="fp" name="fp">
    </div>

    <div class="form-group">
      <label for="contact">No. Telefon:</label>
      <input type="contact"  id="fnt" name="fnt">
    </div>

    <!-- <button type="submit" class="btn btn-primary">Hantar</button>
    <a href="borangpendaftarandarjah1bhg2.php" class="btn btn-success">Seterusnya</a> -->
    

<br>
</div>

<br>

<div class="container">
<br>
<h5>BAHAGIAN 2<h5>
  <h3>BUTIRAN KELUARGA</h3>
  <h4>BAPA /PENJAGA</h4>
  <br>
  

    <div class="form-group">
      <label for="name">Nama:</label>
      <input type="name" class="form-control" id="fb"  name="fb">
    </div>

    <div class="form-group">
      <label for="text">Negeri Tempat Lahir:</label>
      <input type="text"  id="ftb"  name="ftb" required>
    </div>

    <div class="form-group">
      <label for="id">No. Kad Pengenalan:</label>
      <input type="name"  id="fkb"  name="fkb" required>
    </div>

    <div class="form-group">
      <label for="name">Pekerjaan:</label>
      <input type="name" class="form-control" id="fpeb"  name="fpeb">
    </div>      

    <div class="form-group">
      <label for="text">Pendapatan :</label>
      <input type="text"  id="fpb"  name="fpb">
    </div>   

<br>
    <h4>IBU /PENJAGA</h4>
  <br>

  <div class="form-group">
      <label for="name">Nama:</label>
      <input type="name" class="form-control" id="fni"  name="fni">
    </div>

    <div class="form-group">
      <label for="text">Negeri Tempat Lahir:</label>
      <input type="text"  id="fti"  name="fti" required>
    </div>

    <div class="form-group">
      <label for="id">No. Kad Pengenalan:</label>
      <input type="name"  id="fki"  name="fki" required>
    </div>

    <div class="form-group">
      <label for="name">Pekerjaan:</label>
      <input type="name" class="form-control" id="fpei"  name="fpei">
    </div>      

    <div class="form-group">
      <label for="number">Pendapatan :</label>
      <input type="text"  id="fpib"  name="fpib">
    </div>   
    <!-- <button type="submit" class="btn btn-primary">Submit</button>
    <a href="borangpendaftarandarjah1bhg3.php" class="btn btn-success">Seterusnya</a> -->

<br>
</div>
<br>
<div class="container">
<br>
<h5>BAHAGIAN 3<h5>
  <h4>PENGAKUAN IBU BAPA /PENJAGA</h4>
 

    <div class="form-group">
      <input type="checkbox" name="vehicle1" value="Bike">Saya mengaku segala keterangan yang
       dinyatakan di dalam borang ini adalah betul dan benar. 
      Saya menyerahkan anak dibawah jagaan saya untuk mendapat pendidikan di sekolah ini.<br>
    </div>
    <center><button type="submit" class="btn btn-primary">Submit</button></center>
  <!-- <center>  <a href="borgdarjahsatu.php" type="submit" class="btn btn-primary">Submit</a> </center> -->
</form>
<br>
</div>
  
</body>
</html>
<br>



<?php include "footer.php" ?>
