<?php include ('dbconnect.php');

$id=$_GET['id'];

$sql = "SELECT * FROM tb_d1 WHERE s='$id'";
        // WHERE s = '1'";
$result = mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
?>

<html>
<head><meta http-equiv=Content-Type content="text/html; charset=UTF-8">
<style type="text/css">
<!--
span.cls_002{font-family:Times,serif;font-size:10.0px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
div.cls_002{font-family:Times,serif;font-size:10.0px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_003{font-family:Times,serif;font-size:13.0px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
div.cls_003{font-family:Times,serif;font-size:13.0px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_004{font-family:Times,serif;font-size:12.0px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
div.cls_004{font-family:Times,serif;font-size:12.0px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_005{font-family:Times,serif;font-size:9.8px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
div.cls_005{font-family:Times,serif;font-size:9.8px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_007{font-family:Times,serif;font-size:7.5px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
div.cls_007{font-family:Times,serif;font-size:7.5px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
-->
</style>
<script type="text/javascript" src="e75b2200-1e09-11ea-a5fd-0cc47a792c0a_id_e75b2200-1e09-11ea-a5fd-0cc47a792c0a_files/wz_jsgraphics.js"></script>
<script>
function printPage() {
  window.print();
}
</script>
</head>
<body>
<div style="position:absolute;left:50%;margin-left:-406px;top:0px;width:800px;height:1400px;border-style:outset;overflow:hidden">
<div style="position:absolute;left:0px;top:0px">
<img src="/new/PPIDKu/BorangSistemMaklumatMurid/e75b2200-1e09-11ea-a5fd-0cc47a792c0a_id_e75b2200-1e09-11ea-a5fd-0cc47a792c0a_files/background1n.jpg" width=612 height=792></div> 
<div style="position:absolute;left:495.61px;top:18.12px" class="cls_002"><span class="cls_002">Bil Daftar : ........ </span></div>
<div style="position:absolute;left:141.72px;top:44.56px" class="cls_003"><span class="cls_003">JABATAN AGAMA JOHOR</span></div>
<div style="position:absolute;left:141.72px;top:57.00px" class="cls_004"><span class="cls_004">(BAHAGIAN PENDIDIKAN ISLAM)</span></div>
<div style="position:absolute;left:141.72px;top:68.64px" class="cls_004"><span class="cls_004">PERMOHONAN BELAJAR DISEKOLAH AGAMA KERAJAAN JOHOR</span></div>
<div style="position:absolute;left:145.40px;top:102.72px" class="cls_002"><span class="cls_002">BUTIRAN DIRI CALON</span></div>
<div style="position:absolute;left:120.75px;top:140.52px" class="cls_002"><span class="cls_002">Nama : <?php echo $row['n'] ?></span></div>
<div style="position:absolute;left:69.36px;top:160.52px" class="cls_002"><span class="cls_002">No. Surat Beranak : <?php echo $row['s'] ?></span></div>
<div style="position:absolute;left:115.92px;top:180.52px" class="cls_002"><span class="cls_002">Jantina : <?php echo $row['jt'] ?></span></div>
<div style="position:absolute;left:60.12px;top:200.52px" class="cls_002"><span class="cls_002">Negeri Tempat Lahir : <?php echo $row['te'] ?></span></div>
<div style="position:absolute;left:90.36px;top:220.52px" class="cls_002"><span class="cls_002">Warganegara : <?php echo $row['wn'] ?></span></div>
<div style="position:absolute;left:60.12px;top:240.52px" class="cls_002"><span class="cls_002">Umur pada 1 Januari : <?php echo $row['ta'] ?></span></div>
<div style="position:absolute;left:65.88px;top:260.52px" class="cls_002"><span class="cls_002">Kecacatan jika ada : <?php echo $row['l'] ?></span></div>
<div style="position:absolute;left:30.88px;top:280.52px" class="cls_002"><span class="cls_002">Nama Sekolah Kebangsaan : <?php echo $row['sn'] ?></span></div>
<div style="position:absolute;left:115.04px;top:300.52px" class="cls_002"><span class="cls_002">Darjah : <?php echo $row['ds'] ?></span></div>
<div style="position:absolute;left:47.48px;top:320.52px" class="cls_002"><span class="cls_002">Alamat Surat Menyurat : <?php echo $row['al'] ?></span></div>
<div style="position:absolute;left:110.04px;top:360.52px" class="cls_002"><span class="cls_002">Poskod : <?php echo $row['p'] ?></span></div>
<div style="position:absolute;left:90.72px;top:380.52px" class="cls_002"><span class="cls_002">No. Telefon : <?php echo $row['nt'] ?></span></div>
<div style="position:absolute;left:260.16px;top:404.64px" class="cls_002"><span class="cls_002">BUTIRAN KELUARGA</span></div>
<div style="position:absolute;left:120.48px;top:444.56px" class="cls_002"><span class="cls_002">Nama Bapa : <?php echo $row['b'] ?></span></div>
<div style="position:absolute;left:375.00px;top:444.56px" class="cls_002"><span class="cls_002">Pendapatan Bapa : <?php echo $row['pb'] ?></span></div>
<div style="position:absolute;left:85.68px;top:464.56px" class="cls_002"><span class="cls_002">No. Kad Pengenalan : <?php echo $row['kb'] ?></span></div>
<div style="position:absolute;left:406.07px;top:464.56px" class="cls_002"><span class="cls_002">Pekerjaan : <?php echo $row['peb'] ?></span></div>
<div style="position:absolute;left:84.68px;top:484.56px" class="cls_002"><span class="cls_002">Negeri Tempat Lahir : <?php echo $row['tb'] ?></span></div>
<div style="position:absolute;left:128.68px;top:514.56px" class="cls_002"><span class="cls_002">Nama Ibu : <?php echo $row['ni'] ?></span></div>
<div style="position:absolute;left:383.07px;top:514.56px" class="cls_002"><span class="cls_002">Pendapatan Ibu : <?php echo $row['pib'] ?></span></div>
<div style="position:absolute;left:88.84px;top:534.56px" class="cls_002"><span class="cls_002">No Kad Pengenalan : <?php echo $row['ki'] ?></span></div>
<div style="position:absolute;left:406.07px;top:534.56px" class="cls_002"><span class="cls_002">Pekerjaan : <?php echo $row['pei'] ?></span></div>
<div style="position:absolute;left:85.08px;top:554.56px" class="cls_002"><span class="cls_002">Negeri Tempat Lahir : <?php echo $row['ti'] ?></span></div>
<div style="position:absolute;left:42.72px;top:646.91px" class="cls_002"><span class="cls_002">Perakuan ibu/Bapa/Penjaga </span></div>
<div style="position:absolute;left:42.72px;top:664.43px" class="cls_002"><span class="cls_002">Saya mengaku bahawa butiran maklumat di atas adalah benar.</span></div>
<div style="position:absolute;left:42.72px;top:723.35px" class="cls_002"><span class="cls_002">Nama : </span></div>
<div style="position:absolute;left:42.72px;top:740.88px" class="cls_002"><span class="cls_002">Tarikh :</span></div>
</div>
<input type="button" value="Cetak" onclick="printPage()" />
</body>
</html>

