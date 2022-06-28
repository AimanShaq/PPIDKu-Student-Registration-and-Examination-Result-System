<?php include "header.php"; ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

h2, h4{
  font-family:  "Times New Roman", Times, serif;
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
  background-color:white;
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
      <img src="assets\img\ayerManis.jpg" alt="Avatar" style="width:300px;height:300px;">
      سكوله اڬام ءاير مانيس
    </div>
    <div class="flip-card-back">
      <h2>SEKOLAH AGAMA AYER MANIS<h2>
     <h6> Alamat  : D/A SEKOLAH AGAMA AYER MANIS, KULAIJAYA<br>
      Poskod :  81020<br>
      Negeri :  JOHOR <br>
          Daerah :  KULAI <br>
          No. Telefon : 013-7618286 <br>
          No. Faks :  - <br>
          Kod Pusat UPKK :  J09005
      </h6>
    </div>
  </div>
</div>
</div>

<div class="row">
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="assets\img\bandarKulai2.jpg" alt="Avatar" style="width:300px;height:300px;">
     سكوله اڬام بندر كولاي ٢
    </div>
    <div class="flip-card-back">
      <h2>SEKOLAH AGAMA BANDAR KULAI 2</h2> 
      <h6>Alamat  : JALAN PEJABAT KERAJAAN,BUKIT LIKI, KULAIJAYA <BR>
          Poskod :  81000 <BR>
          Negeri :  JOHOR <br>
          Daerah :  KULAI <br>
          No. Telefon : 07-6622443 <br>
          No. Faks :  07-6622443 <br>
          Kod Pusat UPKK :  J09007
      </h6>
    </div>
  </div>
</div>
</div>

<div class="row">
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="assets\img\bandarPutra.jpg" alt="Avatar" style="width:300px;height:300px;">
      سكوله اڬام بندر ڤترا
    </div>
    <div class="flip-card-back">
     <h2>SEKOLAH AGAMA BANDAR PUTRA<h2>
     <h6> Alamat  : LOT 77603 JALAN KENARI UTAMA,BANDAR PUTRA.<br>
      Poskod :  81000<br>
      Negeri :  JOHOR <br>
          Daerah :  KULAI <br>
          No. Telefon : 07-5970490 <br>
          No. Faks :  07-5970490 <br>
          
      </h6>
    </div>
  </div>
</div>
</div>

<div class="row">
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="assets\img\bandarPutra2.jpg" alt="Avatar" style="width:300px;height:300px;">
      سكوله اڬام باندر ڤترا ٢
    </div>
    <div class="flip-card-back">
     <h2>SEKOLAH AGAMA BANDAR PUTRA 2<h2>
     <h6> Alamat  : SEKOLAH AGAMA BANDAR PUTRA 2, JALAN MERBAU 2, BANDAR PUTRA, 81000 KULAI, JOHOR<br>
      Poskod :  81000<br>
      Negeri :  JOHOR <br>
          Daerah :  KULAI <br>
          No. Telefon : 019-7437206 <br>
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
      <img src="assets\img\batu26.jpg" alt="Avatar" style="width:300px;height:300px;">
      سكوله اڬام باتو  ٢٦
    </div>

  </div>
    <div class="flip-card-back">
      <h2>SEKOLAH AGAMA BATU 26<h2>
     <h6> Alamat  : KELAPA SAWIT,KULAI<br>
      Poskod :  81030<br>
      Negeri :  JOHOR <br>
          Daerah :  KULAI <br>
          No. Telefon : 07-6525505 <br>
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
      <img src="assets\img\feldaBukitBatu.jpg" alt="Avatar" style="width:300px;height:300px;">
      سكوله اڬام فيلدا بوكيت باتو
    </div>
    <div class="flip-card-back">
    <h2>SEKOLAH AGAMA FELDA BUKIT BATU<h2>
     <h6> Alamat  : JLN PARIT PANJANG, FELDA BUKIT BATU<br>
      Poskod :  81020<br>
      Negeri :  JOHOR <br>
          Daerah :  KULAI <br>
          No. Telefon : 07-6512559 <br>
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
      <img src="assets\img\feldaBukitPermai.jpg" alt="Avatar" style="width:300px;height:300px;">
      سكوله اڬام فيلدا بوكيت فرماي
    </div>
    <div class="flip-card-back">
      <h2>SEKOLAH AGAMA ASSOLIHIN FELDA BUKIT PERMAI<h2>
     <h6> Alamat  : SEKOLAH AGAMA ASSOLIHIN FELDA BUKIT PERMAI,
81850,LAYANG-LAYANG<br>
      Poskod :  81850<br>
      Negeri :  JOHOR <br>
          Daerah :  KULAI <br>
          No. Telefon : 013-7330358 <br>
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
      <img src="assets\img\feldaInas.jpg" alt="Avatar" style="width:300px;height:300px;">
      سكوله اڬام  فيلدا اينس
    </div>
    <div class="flip-card-back">
     <h2>SEKOLAH AGAMA FELDA INAS<h2>
     <h6> Alamat  :   JALAN TITIWANGSA, FELDA INAS<br>
      Poskod :  81000<br>
      Negeri :  JOHOR <br>
          Daerah :  KULAI <br>
          No. Telefon :   0197323881 <br>
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
      <img src="assets\img\gunungPulai.jpg" alt="Avatar" style="width:300px;height:300px;">
      سكوله اڬام سري ڬونوڠ ڤولاي
    </div>
    <div class="flip-card-back">
      <h2>SEKOLAH AGAMA SRI GUNUNG PULAI<h2>
     <h6> Alamat  : TST 33, KAMPUNG GUNUNG PULAI, KULAI<br>
      Poskod :  81000<br>
      Negeri :  JOHOR <br>
          Daerah :  KULAI <br>
          No. Telefon : 0197237364 <br>
          No. Faks :  - <br>
          
      </h6>
    </div>
  </div>
</div>
</div>

</div>
<div class="center">
  <div class="pagination">

  <a href="11info1.php" class="active">1</a>
  <a href="11info2.php">2</a>
  <a href="11info3.php">3</a>

  </div>
</div>

<?php include"footer.php" ?>

</body>
</html>

