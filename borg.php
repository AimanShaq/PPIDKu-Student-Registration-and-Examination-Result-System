<?php include ('dbconnect.php');

  $id = $_GET['id'];

$sql = "SELECT * FROM tb_smmlama
         WHERE sl= '$id'";
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
<div style="position:absolute;left:50%;margin-left:-306px;top:0px;width:612px;height:792px;border-style:outset;overflow:hidden">
<div style="position:absolute;left:0px;top:0px">
<img src="/new/PPIDKu/BorangSistemMaklumatMurid/e75b2200-1e09-11ea-a5fd-0cc47a792c0a_id_e75b2200-1e09-11ea-a5fd-0cc47a792c0a_files/background1.jpg" width=612 height=792></div>
<div style="position:absolute;left:354.61px;top:18.12px" class="cls_002"><span class="cls_002">TANDAKAN DI KOTAK YANG DISEDIAKAN:</span></div>
<div style="position:absolute;left:135.72px;top:34.56px" class="cls_003"><span class="cls_003">SISTEM MAKLUMAT MURID (SMM)</span></div>
<div style="position:absolute;left:354.60px;top:34.20px" class="cls_004"><span class="cls_004">☐</span><span class="cls_002"> Tahun ________</span></div>
<div style="position:absolute;left:354.60px;top:46.80px" class="cls_004"><span class="cls_004">☐</span><span class="cls_002"> Tiada Perubahan</span></div>
<div style="position:absolute;left:141.72px;top:57.00px" class="cls_004"><span class="cls_004">Bahagian Pendidikan Islam</span></div>
<div style="position:absolute;left:354.60px;top:59.40px" class="cls_004"><span class="cls_004">☐</span><span class="cls_002"> Kemaskini: Pendapatan / Alamat / Lain-lain</span></div>
<div style="position:absolute;left:141.72px;top:68.64px" class="cls_004"><span class="cls_004">Jabatan Agama Islam Negeri Johor</span></div>
<div style="position:absolute;left:354.60px;top:72.12px" class="cls_004"><span class="cls_004">☐</span><span class="cls_002"> Berpindah: _________________________</span></div>
<div style="position:absolute;left:155.40px;top:102.72px" class="cls_002"><span class="cls_002">MAKLUMAT MURID</span></div>
<div style="position:absolute;left:407.87px;top:104.64px" class="cls_002"><span class="cls_002">MAKLUMAT BANTUAN</span></div>
<div style="position:absolute;left:97.68px;top:122.52px" class="cls_002"><span class="cls_002">Sijil Lahir <?php echo $row['sl'] ?></span></div>
<div style="position:absolute;left:354.13px;top:125.52px" class="cls_002"><span class="cls_002">Anak Orang Asli Islam <?php echo $row['aoa'] ?></span></div>
<div style="position:absolute;left:69.36px;top:140.04px" class="cls_002"><span class="cls_002">Kad Pengenalan <?php echo $row['kp'] ?></span></div>
<div style="position:absolute;left:354.13px;top:145.08px" class="cls_002"><span class="cls_002">Skim Pinjaman Kitab <?php echo $row['spk'] ?></span></div>
<div style="position:absolute;left:109.92px;top:165.00px" class="cls_002"><span class="cls_002">Nama <?php echo $row['nm'] ?></span></div>
<div style="position:absolute;left:354.13px;top:164.52px" class="cls_002"><span class="cls_002">Skim Pinjaman SPBT <?php echo $row['spbt'] ?></span></div>
<div style="position:absolute;left:354.13px;top:184.08px" class="cls_002"><span class="cls_002">Anak Yatim <?php echo $row['ay'] ?></span></div>
<div style="position:absolute;left:87.12px;top:190.08px" class="cls_002"><span class="cls_002">Tarikh Lahir <?php echo $row['tal'] ?></span></div>
<div style="position:absolute;left:354.13px;top:203.52px" class="cls_002"><span class="cls_002">Pakaian <?php echo $row['p'] ?></span></div>
<div style="position:absolute;left:81.36px;top:207.48px" class="cls_002"><span class="cls_002">Tempat Lahir <?php echo $row['tel'] ?></span></div>
<div style="position:absolute;left:105.12px;top:225.00px" class="cls_002"><span class="cls_002">Jantina <?php echo $row['j'] ?></span></div>
<div style="position:absolute;left:354.13px;top:223.08px" class="cls_002"><span class="cls_002">Persekolahan <?php echo $row['ps'] ?></span></div>
<div style="position:absolute;left:110.88px;top:242.52px" class="cls_002"><span class="cls_002">Kaum <?php echo $row['k'] ?></span></div>
<div style="position:absolute;left:354.13px;top:242.52px" class="cls_002"><span class="cls_002">Makanan Sihat <?php echo $row['mknn'] ?></span></div>
<div style="position:absolute;left:107.88px;top:260.04px" class="cls_002"><span class="cls_002">Warga <?php echo $row['w'] ?></span></div>
<div style="position:absolute;left:354.13px;top:262.08px" class="cls_002"><span class="cls_002">Lain-lain Bantuan <?php echo $row['ll'] ?></span></div>
<div style="position:absolute;left:86.04px;top:277.56px" class="cls_002"><span class="cls_002">Negara Asal <?php echo $row['nea'] ?></span></div>
<div style="position:absolute;left:375.12px;top:279.72px" class="cls_005"><span class="cls_005">Sila nyatakan jika</span></div>
<div style="position:absolute;left:399.24px;top:287.76px" class="cls_005"><span class="cls_005">berkenaan: <?php echo $row['nyll'] ?></span></div>
<div style="position:absolute;left:102.48px;top:295.08px" class="cls_002"><span class="cls_002">Sekolah <?php echo $row['sek'] ?></span></div>
<div style="position:absolute;left:354.13px;top:305.04px" class="cls_002"><span class="cls_002">Tinggal Di Asrama <?php echo $row['asr'] ?></span></div>
<div style="position:absolute;left:107.04px;top:312.48px" class="cls_002"><span class="cls_002">Darjah <?php echo $row['d'] ?></span></div>
<div style="position:absolute;left:354.13px;top:324.48px" class="cls_002"><span class="cls_002">Biasiswa <?php echo $row['b'] ?></span></div>
<div style="position:absolute;left:72.72px;top:330.00px" class="cls_002"><span class="cls_002">Darjah SK/SMK <?php echo $row['dsk'] ?></span></div>
<div style="position:absolute;left:356.42px;top:344.04px" class="cls_002"><span class="cls_002">Jenis Biasiswa <?php echo $row['jb'] ?></span></div>
<div style="position:absolute;left:101.88px;top:347.52px" class="cls_002"><span class="cls_002">SK/SMK <?php echo $row['skn'] ?></span></div>
<div style="position:absolute;left:375.12px;top:361.80px" class="cls_005"><span class="cls_005">Sila nyatakan jika</span></div>
<div style="position:absolute;left:86.64px;top:365.04px" class="cls_002"><span class="cls_002">Nama Kelas <?php echo $row['nk'] ?></span></div>
<div style="position:absolute;left:399.24px;top:369.72px" class="cls_005"><span class="cls_005">berkenaan: <?php echo $row['ny'] ?></span></div>
<div style="position:absolute;left:90.36px;top:382.56px" class="cls_002"><span class="cls_002">Guru Kelas <?php echo $row['gk'] ?></span></div>
<div style="position:absolute;left:260.16px;top:404.64px" class="cls_002"><span class="cls_002">MAKLUMAT PENJAGA</span></div>
<div style="position:absolute;left:84.48px;top:424.56px" class="cls_002"><span class="cls_002">Status Waris <?php echo $row['swa'] ?></span></div>
<div style="position:absolute;left:375.00px;top:424.56px" class="cls_002"><span class="cls_002">Pendapatan Bapa <?php echo $row['penb'] ?></span></div>
<div style="position:absolute;left:82.68px;top:442.08px" class="cls_002"><span class="cls_002">Status Murid <?php echo $row['smu'] ?></span></div>
<div style="position:absolute;left:406.07px;top:449.51px" class="cls_002"><span class="cls_002">Pekerjaan <?php echo $row['pekrjb'] ?></span></div>
<div style="position:absolute;left:85.44px;top:467.04px" class="cls_002"><span class="cls_002">Nama Waris <?php echo $row['nwa'] ?></span></div>
<div style="position:absolute;left:382.20px;top:474.48px" class="cls_002"><span class="cls_002">Pendapatan Ibu <?php echo $row['peni'] ?></span></div>
<div style="position:absolute;left:70.32px;top:491.99px" class="cls_002"><span class="cls_002">Kad Pengenalan <?php echo $row['kpw'] ?></span></div>
<div style="position:absolute;left:406.07px;top:499.56px" class="cls_002"><span class="cls_002">Pekerjaan <?php echo $row['pekrji'] ?></span></div>
<div style="position:absolute;left:105.84px;top:517.08px" class="cls_002"><span class="cls_002">Alamat <?php echo $row['alwa'] ?></span></div>
<div style="position:absolute;left:363.59px;top:524.52px" class="cls_002"><span class="cls_002">Pendapatan Penjaga <?php echo $row['penp'] ?></span></div>
<div style="position:absolute;left:73.08px;top:542.04px" class="cls_002"><span class="cls_002">Poskod/Bandar <?php echo $row['pos'] ?>/ <?php echo $row['bndr'] ?></span></div>
<div style="position:absolute;left:406.07px;top:549.47px" class="cls_002"><span class="cls_002">Pekerjaan <?php echo $row['pekrjp'] ?></span></div>
<div style="position:absolute;left:108.00px;top:559.56px" class="cls_002"><span class="cls_002">Negeri <?php echo $row['ngri'] ?></span></div>
<div style="position:absolute;left:71.28px;top:577.08px" class="cls_002"><span class="cls_002">Bil. Tanggungan <?php echo $row['btgn'] ?></span></div>
<div style="position:absolute;left:370.44px;top:581.04px" class="cls_002"><span class="cls_002">Jumlah Pendapatan RM <?php echo $row['jump'] ?></span></div>
<div style="position:absolute;left:88.80px;top:594.47px" class="cls_002"><span class="cls_002">No. Telefon <?php echo $row['ntel'] ?></span></div>
<div style="position:absolute;left:411.72px;top:604.79px" class="cls_002"><span class="cls_002">Perkapita RM <?php echo $row['perkpit'] ?></span></div>
<div style="position:absolute;left:71.16px;top:619.55px" class="cls_002"><span class="cls_002">Alamat Majikan <?php echo $row['amaj'] ?></span></div>
<div style="position:absolute;left:42.72px;top:646.91px" class="cls_002"><span class="cls_002">Perakuan ibu/Bapa/Penjaga </span></div>
<div style="position:absolute;left:390.48px;top:651.47px" class="cls_002"><span class="cls_002">PENGESAHAN</span></div>
<div style="position:absolute;left:42.72px;top:664.43px" class="cls_002"><span class="cls_002">Saya mengaku bahawa butiran maklumat di atas</span></div>
<div style="position:absolute;left:301.20px;top:671.40px" class="cls_002"><span class="cls_002">*Saya mengesahkan bahawa butiran</span></div>
<div style="position:absolute;left:517.68px;top:671.40px" class="cls_002"><span class="cls_002">Cap</span></div>
<div style="position:absolute;left:42.72px;top:674.40px" class="cls_002"><span class="cls_002">adalah benar.</span></div>
<div style="position:absolute;left:301.20px;top:681.36px" class="cls_002"><span class="cls_002">maklumat tersebut adalah benar :</span></div>
<div style="position:absolute;left:513.24px;top:681.36px" class="cls_002"><span class="cls_002">Rasmi</span></div>
<div style="position:absolute;left:301.20px;top:708.83px" class="cls_002"><span class="cls_002">Nama</span></div>
<div style="position:absolute;left:301.20px;top:718.91px" class="cls_002"><span class="cls_002">Jawatan</span></div>
<div style="position:absolute;left:458.66px;top:718.91px" class="cls_002"><span class="cls_002">Tarikh</span></div>
<div style="position:absolute;left:42.72px;top:723.35px" class="cls_002"><span class="cls_002">Nama:</span></div>
<div style="position:absolute;left:282.48px;top:738.95px" class="cls_007"><span class="cls_007">*Lampiran Pengesahan pendapatan perlu bagi jumlah pendapatan bawah RM1500 shj</span></div>
<div style="position:absolute;left:42.72px;top:740.88px" class="cls_002"><span class="cls_002">Tarikh:</span></div>
<div style="position:absolute;left:282.48px;top:748.91px" class="cls_007"><span class="cls_007">*Pengesahan hendaklah dilakukan oleh Jaksa Pendamai/Wakil Rakyat/Penghulu/Ketua</span></div>
<div style="position:absolute;left:282.48px;top:758.87px" class="cls_007"><span class="cls_007">Kampung/Jawatankuasa Kemajuan Kampung</span></div>
</div>
<input type="button" value="Print this page" onclick="printPage()" />
</body>
</html>

