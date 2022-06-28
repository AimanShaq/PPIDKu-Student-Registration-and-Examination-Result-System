<?php include "header.php"; ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.grid-container {
  display: grid;
  grid-template-columns: auto auto auto;
  grid-gap: 10px;
  padding: 150px;
}

.grid-container > div {
 
  text-align: center;
  padding: 20px 0;
  font-size: 20px;
}



.flip-card {
  background-color: transparent;
  width: 300px;
  height: 300px;
  perspective: 1000px;
   font-size: 25px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}



.flip-card-front {
  background-color: #bbb;
  color: black;
}

.flip-card-back {
  background-color: white;
  color: blue;
  transform: rotateY(180deg);
}

.center {
  text-align: center;
}

.pagination {
  display: inline-block;
}

.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  transition: background-color .3s;
  border: 1px solid #ddd;
  margin: 0 4px;
}

.pagination a.active {
  background-color: #4CAF50;
  color: white;
  border: 1px solid #4CAF50;
}

.pagination a:hover:not(.active) {background-color: #ddd;}
</style>
</head>
<body  style="background-image:url('assets/img/abstracbanner.png'),linear-gradient(grey,white); background-size: 230px,200px;">
  <br>
<h1 class="text-center" style="color: black"> سكوله٢ اڬام داءيره كولاي</h1>


<div class="grid-container" style="padding-top: 0">
<div class="row">
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="assets\img\indahpura.jpg" alt="Avatar" style="width:300px;height:300px;">
      سكوله اڬام ايندهڤورا
    </div>
    <div class="flip-card-back">
      <h2>SEKOLAH AGAMA INDAHPURA<h2>
     <h6> Alamat  :  JALAN PERSIARAN UTAMA, INDAHPURA<br>
      Poskod :  81000<br>
      Negeri :  JOHOR <br>
          Daerah :  KULAI <br>
          No. Telefon :   0197751780 <br>
          No. Faks :  - <br>
          
      </h6>
    </div>
  </div>
</div>
</div>

<div class="row">
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="assets\img\kangkarPulai.jpg" alt="Avatar" style="width:300px;height:300px;"> 
      سكوله اڬام كغكر ڤولاي
    </div>
    <div class="flip-card-back">
     <h2>SEKOLAH AGAMA KANGKAR PULAI<h2>
     <h6> Alamat  : JALAN TAQWA, KAMPUNG MELAYU KANGKAR PULAI<br>
      Poskod :  81110<br>
      Negeri :  JOHOR <br>
          Daerah :  KULAI <br>
          No. Telefon :   07-5272668 <br>
          No. Faks :  07-5272668<br>
          Kod Pusat UPKK :  J09004
      </h6>
    </div>
  </div>
</div>
</div>

<div class="row">
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="assets\img\random.jpg" alt="Avatar" style="width:300px;height:300px;">
      سكوله اڬام سناي
    </div>
    <div class="flip-card-back">
     <h2>SEKOLAH AGAMA SENAI<h2>
     <h6> Alamat  :   KG. JAYA SEPAKAT, SENAI, JOHOR<br>
      Poskod :  81400<br>
      Negeri :  JOHOR <br>
          Daerah :  KULAI <br>
          No. Telefon :  075984408 <br>
          No. Faks :  075984408 <br>
          Kod Pusat UPKK :  J09013
      </h6>
    </div>
  </div>
</div>
</div>

<div class="row">
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="assets\img\ladangFraser.jpg" alt="Avatar" style="width:300px;height:300px;">
      سكوله اڬام لادغ فريزر
    </div>
    <div class="flip-card-back">
     <h2>SEKOLAH AGAMA LADANG FRASER<h2>
     <h6> Alamat  :   SEKOLAH AGAMA LADANG FRASER, JALAN LADANG FRASER, LADANG FRASER KULAI<br>
      Poskod :  81000<br>
      Negeri :  JOHOR <br>
          Daerah :  KULAI <br>
          No. Telefon :     01115286265 <br>
          No. Faks :  - <br>
          Kod Pusat UPKK :  J09014
      </h6>
    </div>
  </div>
</div>
</div>

<div class="row">
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <div class= "img-container">
      <img src="assets\img\murniJaya.jpg" alt="Avatar" style="width:300px;height:300px;">
      سكوله اڬام مورني جاي
    </div>

  </div>
    <div class="flip-card-back">
     <h2>SEKOLAH AGAMA MURNI JAYA<h2>
     <h6> Alamat  :     JALAN BESAR KAMPUNG MURNI JAYA, LAYANG-LAYANG, KULAI<br>
      Poskod :  81850<br>
      Negeri :  JOHOR <br>
          Daerah :  KULAI <br>
          No. Telefon :   010-2460029 <br>
          No. Faks :  - <br>
          
      </h6>
    </div>
  </div>
</div>
</div>

<div class="row">
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="assets\img\pulaiIndah.jpg" alt="Avatar" style="width:300px;height:300px;">
      سكوله اڬام تامن ڤولاي اينده
    </div>
    <div class="flip-card-back">
      <h2>SEKOLAH AGAMA TAMAN PULAI INDAH<h2>
     <h6> Alamat  :     JALAN ARIZA,TAMAN PULAI INDAH<br>
      Poskod :  81110<br>
      Negeri :  JOHOR <br>
          Daerah :  KULAI <br>
          No. Telefon :     019-7903732 <br>
          No. Faks :  - <br>
          
      </h6>
    </div>
  </div>
</div>
</div>

<div class="row">
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="assets\img\sedenak.jpg" alt="Avatar" style="width:300px;height:300px;">
      سكوله اڬام سدنق
    </div>
    <div class="flip-card-back">
      <h2>SEKOLAH AGAMA SEDENAK<h2>
     <h6> Alamat  :   D/A SEKOLAH KEBANGSAAN SEDENAK, JALAN SEDENAK 10, SEDENAK, KULAI<br>
      Poskod :  81010<br>
      Negeri :  JOHOR <br>
          Daerah :  KULAI <br>
          No. Telefon :   0137330358 <br>
          No. Faks :  - <br>
          
      </h6>
    </div>
  </div>
</div>
</div>

<div class="row">
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="assets\img\senaiUtama.jpg" alt="Avatar" style="width:300px;height:300px;">
      سكوله اڬام سناي اوتام
    </div>
    <div class="flip-card-back">
     <h2>SEKOLAH AGAMA SENAI UTAMA<h2>
     <h6> Alamat  :  SEKOLAH AGAMA SENAI UTAMA ,JALAN SENAI UTAMA 2,TAMAN SENAI UTAMA<br>
      Poskod :  81400<br>
      Negeri :  JOHOR <br>
          Daerah :  KULAI <br>
          No. Telefon :   07-5996575 <br>
          No. Faks :  07-5996575 <br>
         
      </h6>
    </div>
  </div>
</div>
</div>

<div class="row">
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="assets\img\seriBahagia.jpg" alt="Avatar" style="width:300px;height:300px;">
      سكوله اڬام سري بهاڬيا
    </div>
    <div class="flip-card-back">
     <h2>SEKOLAH AGAMA SERI BAHAGIA<h2>
     <h6> Alamat  :   SEKOLAH AGAMA SERI BAHAGIA, FELDA TAIB ANDAK, 81000 KULAIJAYA JOHOR<br>
      Poskod :  81000<br>
      Negeri :  JOHOR <br>
          Daerah :  KULAI <br>
          No. Telefon :  07-6540572 <br>
          No. Faks :  - <br>
          
      </h6>
    </div>
  </div>
</div>
</div>

</div>

<div class="center">
  <div class="pagination">

  <a href="11info1.php">1</a>
  <a href="11info2.php" class="active">2</a>
  <a href="11info3.php">3</a>


  </div>
</div>

<?php include"footer.php" ?>
</body>
</html>