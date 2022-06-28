<?php
    include 'headeradmin.php';
    include 'dbconnect.php';
?>

<title>Galeri</title>

<link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<!-- Begin Page Content -->
<div class="container-fluid">
    <form enctype="multipart/form-data" action="muatnaikgambar.php" method="post">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h4 mb-0 text-gray-800" align="center">Muat Naik Gambar</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    
    <div class="col-xl-8 col-md-8 mb-4" style="margin:0 auto; ">
        
        <div class="card border-left-primary shadow h-100 py-2 ">
            <div class="card-body">

            
                <div class="col mr-2">
                <div class="text-md font-weight-bold text-primary text-uppercase mb-1">Pilih Gambar</div>
                </div>
                <div class="custom-file mb-3">
                <input type="file" class="custom-file-input" id="fgalimage" name="fgalimage" accept=".jpg,.jpeg,.png,.gif">
                <label class="custom-file-label" for="file-upload">
                    <i class="fa fa-cloud-upload"></i>Choose file
                </label>
                </div>
                

                <div class="form-group">
                    <label for="text">Tajuk:</label>
                    <input type="text" class="form-control" id="fgaldesc" name="fgaldesc" placeholder="Masukkan Tajuk">
                </div>

                <div class="form-group">
                    <label for="date">Tarikh:</label>
                    <input type="date" class="form-control" id="fgaldate" name="fgaldate" >
                </div>
            
                <div class="row" style="margin:0px">
                <div class=" col-lg-6" style="padding:10px 10px" align="right">
                    <button class="btn btn-info btn-block " type="submit" id="submit" name="submit" style="width:100px;"><i class="fa fa-folder-plus"></i> Tambah</button>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="card shadow mb-4">
  <div class="card-body">
  <h2>Senarai Gambar</h2>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Bil</th>
        <th>Gambar</th>
        <th>Tajuk</th>
        <th>Tarikh</th>
        <th>Tindakan</th>
      </tr>
    </thead>
    <tbody>
        <?php

            

            $sql = "SELECT * FROM tb_galery";
            $result = mysqli_query($con,$sql);
            

            while($row = mysqli_fetch_array($result))
            {
                echo "<tr>";
                echo "<td>".$row['galID']."</td>";
                echo "<td>".$row['galImage']."</td>";
                echo "<td>".$row['galDesc']."</td>";
                echo "<td>".$row['galDate']."</td>";
                echo "<td>";
                echo "<a href='managegaleryview.php?id=".$row['galID']."' class='btn btn-primary'>Lihat</a>&nbsp";
                echo "<a href='managegalerydel.php?id=".$row['galID']."' class='btn btn-danger'>Padam</a>&nbsp";
                echo "</td>";
                echo "</tr>";
            }

            
        ?>
      
    </tbody>
  </table>

  
</div>

<script>
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });

    $('#file-upload').change(function() {
        var i = $(this).prev('label').clone();
        var file = $('#file-upload')[0].files[0].name;
        $(this).prev('label').text(file);
    });
</script>

<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScri;pt-->
<script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="assets/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="assets/js/demo/datatables-demo.js"></script>
