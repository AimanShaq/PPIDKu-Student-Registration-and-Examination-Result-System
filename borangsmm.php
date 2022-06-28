<?php 

include ('dbconnect.php');
 include 'header.php';


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>BORANG SISTEM MAKLUMAT MURID (SMM)</title>
  
 

  <style>
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
<h2>BORANG SISTEM MAKLUMAT MURID (SMM)<h2>
<h4>Bahagian Pendidikan Islam <h4>
<h4>Jabatan Agama Islam Negeri Johor <h4>
</div>
<br>
<!-- <div class="w3-lightblue">
<center>
<a href="borangsmmbhg1.php">| BAHAGIAN 1: MAKLUMAT MURID |</a>
<a href="borangsmmbhg2.php">| BAHAGIAN 2: MAKLUMAT BANTUAN |</a>
<a href="borangsmmbhg3.php">| BAHAGIAN 3: MAKLUMAT PENJAGA |</a>
</center>
</div> -->
<form method ="POST" action="smmprocess.php">
<br>
<div class="container">
<br>
<h5>BAHAGIAN 1<h5>
  <h3>MAKLUMAT MURID</h3>


    <div class="form-group">
      <label for="id">Sijil Lahir:</label>
      <input type="name"  id="fsl"  name="fsl" required> 
    </div>

    <div class="form-group">
      <label for="id">Kad Pengenalan:</label>
      <input type="name"  id="fkp"  name="fkp" required>
    </div>
  
    <div class="form-group">
      <label for="name">Nama:</label>
      <input type="name"  class= "form-control" id="fnm" name="fnm" required>
    </div>    

    <div class="form-group">
      <label for="text">Tarikh Lahir:</label>
      <input type="Date"  id="ftal"  name="ftal" required>
    </div>

    <div class="form-group">
      <label for="text">Tempat Lahir:</label>
      <textarea rows="1" id="ftel" name="ftel" required></textarea>
    </div>
  

    <div class="form-group">
      <label for="text">Jantina:</label>
      <input type="name"  id="fj"  name="fj" required>
    </div>  

    <div class="form-group">
    <label for="text">Kaum:</label>
      <input type="text"  id="fk" name="fk">
    </div>      

    <div class="form-group">
      <label for="text">Warga:</label>
      <input type="name"  id="fw"  name="fw" required>
    </div>

    <div class="form-group">
    <label for="text">Negara Asal:</label>
      <input type="text"  id="fnea" name="fnea">
    </div>    


    <div class="form-group">
      <label for="text">Sekolah:</label>
      <input type="name"  class= "form-control" id="fsek" name="fsek" required>
    </div>

    <div class="form-group">
      <label for="text">Darjah:</label>
      <input type="name"  id="fd"  name="fd" required>
    </div>

    <div class="form-group">
      <label for="text">Darjah SK/SMK:</label>
      <input type="name" id="fdsk" name="fdsk" required>
    </div>

    <div class="form-group">
      <label for="text">SK/SMK:</label>
      <input type="name"  class= "form-control" id="fskn" name="fskn" required>
    </div>

    <div class="form-group">
      <label for="name">Nama Kelas:</label>
      <input type="name" class="form-control" id="fnk" name="fnk">
    </div>

    <div class="form-group">
      <label for="name">Guru Kelas:</label>
      <input type="name" class="form-control" id="fgk"  name="fgk">
    </div>

    <!-- <button type="submit" class="btn btn-primary">Hantar</button> -->
    <!-- <a href="borangsmmbhg2.php" class="btn btn-success">Seterusnya</a> -->
    

<br>
</div>

<br>
<div class="container">
<br>
<h5>BAHAGIAN 2<h5>
  <h3>MAKLUMAT BANTUAN</h3>

    <div class="form-group">
      <label for="id">Anak Orang Asli Islam:</label>
      <input type="name"  id="faoa"  name="faoa">
    </div>

    <div class="form-group">
      <label for="name">Skim Pinjaman Kitab:</label>
      <input type="name"  id="fspk"  name="fspk" required>
    </div>

    <div class="form-group">
      <label for="name">Skim Pinjaman SPBT:</label>
      <input type="name"  id="fspbt"  name="fspbt" required>
    </div>    

    <div class="form-group">
      <label for="text">Anak Yatim:</label>
      <input type="name"  id="fay"  name="fay" required>
    </div>

   <div class="form-group">
      <label for="name">Pakaian:</label>
      <input type="name"  id="fp"  name="fp" required>
    </div>    

    <div class="form-group">
      <label for="pwd">Persekolahan:</label>
      <input type="name"  id="fps"  name="fps" required>
    </div>        

    <div class="form-group">
      <label for="pwd">Makanan Sihat:</label>
      <input type="name"  id="fmknn"  name="fmknn" required>
    </div>

    <div class="form-group">
      <label for="pwd">Lain-lain Bantuan:</label>
      <input type="name"  id="fll"  name="fll" required>
    </div>

    <div class="form-group">
      <label for="pwd">Sila nyatakan jika berkenaan:</label>
      <input type="name"  id="fnyll"  name="fnyll" required>
    </div>

    <div class="form-group">
      <label for="pwd">Tinggal Di Asrama:</label>
      <input type="name"  id="fasr"  name="fasr" required>
    </div>

    <div class="form-group">
      <label for="pwd">Biasiswa:</label>
      <input type="name"  id="fb"  name="fb" required>
    </div>

    <div class="form-group">
      <label for="pwd">Jenis Biasiswa:</label>
      <input type="name"  id="fjb"  name="fjb" required>
    </div>

    <div class="form-group">
      <label for="pwd">Sila nyatakan jika berkenaan:</label>
      <input type="name"  id="fny"  name="fny" required>
    </div>

    <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
    <!-- <a href="borangsmmbhg3.php" class="btn btn-success">Seterusnya</a> -->

<br>
</div>


<br>
<div class="container">
<br>
<h5>BAHAGIAN 3<h5>
  <h3>MAKLUMAT PENJAGA</h3>

    <div class="form-group">
      <label for="name">Status Waris:</label>
      <input type="name"  id="fswa"  name="fswa">
    </div>

    <div class="form-group">
      <label for="name">Status Murid:</label>
      <input type="name"  id="fsmu"  name="fsmu" required>
    </div>

    <div class="form-group">
      <label for="name">Nama Waris:</label>
      <input type="name"  id="fnwa"  name="fnwa" required>
    </div>    

    <div class="form-group">
      <label for="id">Kad Pengenalan:</label>
      <input type="name"  id="fkpw"  name="fkpw" required>
    </div>

   <div class="form-group">
      <label for="pwd">Alamat:</label>
      <textarea class="form-control" rows="4" id="falwa" name="falwa"></textarea>
    </div>    

    <div class="form-group">
      <label for="text">Poskod:</label>
      <input type="name"  id="fpos" name="fpos" required>
    </div>  
    
    <div class="form-group">
      <label for="text">Bandar:</label>
      <input type="name"  id="fbndr" name="fbndr" required>
    </div>

    <div class="form-group">
      <label for="pwd">Negeri:</label>
      <input type="name"  id="fngri"  name="fngri"required>
    </div>

    <div class="form-group">
      <label for="number">Bil. Tangungan:</label>
      <input type="number"  id="fbtgn" name="fbtgn" required>
    </div>

    <div class="form-group">
      <label for="contact">No. Telefon:</label>
      <input type="nama"  id="fntel" name="fntel" required>
    </div>

    <div class="form-group">
      <label for="text">Alamat Majikan:</label>
      <textarea class="form-control" rows="4" id="famaj" name="famaj"></textarea>
    </div>

    <div class="form-group">
      <label for="text">Pendapatan Bapa:</label>
      <input type="text"  id="fpenb"  name="fpenb">
    </div>

    <div class="form-group">
      <label for="text">Pekerjaan:</label>
      <textarea class="form-control" rows="2" id="fpekrjb" name="fpekrjb"></textarea>
    </div>

    <div class="form-group">
    <label for="text">Pendapatan Ibu:</label>
      <input type="text"  id="fpeni"  name="fpeni">
    </div>
    
    <div class="form-group">
      <label for="text">Pekerjaan:</label>
      <textarea class="form-control" rows="2" id="fpekrji" name="fpekrji"></textarea>
    </div>

    <div class="form-group">
    <label for="text">Pendapatan Penjaga:</label>
      <input type="text"  id="fpenp"  name="fpenp">
    </div>
    
    <div class="form-group">
      <label for="text">Pekerjaan:</label>
      <textarea class="form-control" rows="2" id="fpekrjp" name="fpekrjp"></textarea>
    </div>

    <div class="form-group">
      <label for="text">Jumlah Pendapatan:</label>
      <input type="text"  id="fjump"  placeholder="RM " name="fjump">
    </div>
    
    <div class="form-group">
      <label for="text">Perkapita:</label>
      <input type="text"  id="fperkpit"  placeholder="RM " name="fperkpit">
    </div>


    <center><button type="submit" class="btn btn-primary">Submit</button></center>
    <!-- <a href="borangsmm.php" class="btn btn-success">Seterusnya</a> -->
</form>
<br>
</div>


</body>
</html>
<br>


<?php include "footer.php" ?>