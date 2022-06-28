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
<body  style="width:100%;background-image:url('assets/img/abstracbanner.png'),linear-gradient(grey,white); background-size: 230px,200px;">
  <br>
  <div class="card-body shadow container-fluid" style="background-color: white; width: 95%">

<h1 class="text-center" style="color: black;font-family:Jawi Uthman Taha"> سكوله٢ اڬام داءيره كولاي</h1>
<div class="grid-container" style="padding-top: 0">
<div class="row">
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="assets\img\sriPulaiPerdana.jpg" alt="Avatar" style="width:300px;height:300px;">
      سكوله اڬام سري ڤولاي ڤردانا
    </div>
    <div class="flip-card-back">
      <h2>SEKOLAH AGAMA SRI PULAI PERDANA<h2>
     <h6> Alamat  :  JALAN PERSIARAN 3,TAMAN SRI PULAI PERDANA,KANGKAR PULAI<br>
      Poskod :  81110<br>
      Negeri :  JOHOR <br>
          Daerah :  KULAI <br>
          No. Telefon :     013-7847236  <br>
          No. Faks :  - <br>
          Kod Pusat UPKK :  J09025
      </h6>
    </div>
  </div>
</div>
</div>

<div class="row">
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="assets\img\tamanKotaKulai2.jpg" alt="Avatar" style="width:300px;height:300px;">
      سكوله اڬام تامن كوتا كولاي ٢
    </div>
    <div class="flip-card-back">
      <h2>SEKOLAH AGAMA TAMAN KOTA KULAI 2<h2>
     <h6> Alamat  :   JALAN PERSIARAN PUTRI,TAMAN PUTRI,KULAI JOHOR<br>
      Poskod :  81000<br>
      Negeri :  JOHOR <br>
          Daerah :  KULAI <br>
          No. Telefon :  0127570223 <br>
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
      <img src="assets\img\tamanMuhibbah.jpg" alt="Avatar" style="width:300px;height:300px;">
      سكوله اڬام تامن محبه
    </div>
    <div class="flip-card-back">
      <h2>SEKOLAH AGAMA TAMAN MUHIBBAH<h2>
     <h6> Alamat  :   JALAN JAMBU,SALENG, SENAI<br>
      Poskod :  81400<br>
      Negeri :  JOHOR <br>
          Daerah :  KULAI <br>
          No. Telefon :  016-7373345 <br>
          No. Faks :  - <br>
          Kod Pusat UPKK :  J09024
      </h6>
    </div>
  </div>
</div>
</div>

<div class="row">
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="assets\img\tamanSriPulai.jpg" alt="Avatar" style="width:300px;height:300px;">
      سكوله اڬام تامن سري ڤولاي
    </div>
    <div class="flip-card-back">
      <h2>SEKOLAH AGAMA TAMAN SRI PULAI<h2>
     <h6> Alamat  :   JALAN BATAI 4, TAMAN SRI PULAI, KANGKAR PULAI<br>
      Poskod :  81110<br>
      Negeri :  JOHOR <br>
          Daerah :  KULAI <br>
          No. Telefon :   07-5272341 <br>
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
      <div class= "img-container">
      <img src="assets\img\uluChoh.jpg" alt="Avatar" style="width:300px;height:300px;">
      سكوله اڬام اولو چوه
    </div>

  </div>
    <div class="flip-card-back">
      <h2>SEKOLAH AGAMA ULU CHOH<h2>
     <h6> Alamat  :   KAMPUNG MELAYU ULU CHOH, JOHOR BAHRU<br>
      Poskod :  81150<br>
      Negeri :  JOHOR <br>
          Daerah :  KULAI <br>
          No. Telefon :   016 7373345 <br>
          No. Faks :  - <br>
          Kod Pusat UPKK :  J09003
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
      سكوله اڬام تامن كوتا كولاي
    </div>
    <div class="flip-card-back">
      <h2>SSEKOLAH AGAMA TAMAN KOTA KULAI<h2>
     <h6> Alamat  :   JALAN SRI PUTRI 18/4, TAMAN PUTRI, KULAI<br>
      Poskod :  81000<br>
      Negeri :  JOHOR <br>
          Daerah :  KULAI <br>
          No. Telefon :   07-6632262 <br>
          No. Faks :  07-6632262<br>
          Kod Pusat UPKK :    J09018
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
      سكوله اڬام ابن سينا
    </div>
    <div class="flip-card-back">
      <h2>SEKOLAH AGAMA IBNU SINA<h2>
     <h6> Alamat  :   TAMAN IMPIAN JAYA, D/A BANGUNAN PEJABAT JKKK KAMPUNG PEMUDA JAYA, SEELONG SENAI<br>
      Poskod :  81400<br>
      Negeri :  JOHOR <br>
          Daerah :  KULAI <br>
          No. Telefon :   0127405349 <br>
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
  <a href="11info2.php" >2</a>
  <a href="#"class="active">3</a>
</div>

  </div>
</div>

<br>
<?php include"footer.php" ?>
</body>
</html>