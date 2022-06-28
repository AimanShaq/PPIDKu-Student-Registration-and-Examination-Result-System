<?php 
  include "header.php" ;
  include "dbconnect.php";

 ?>
<title>Manual PPIDKu</title>
<div style="background-image: url('assets/img/background.jpg'); min-height: 500px">
<div class="container">
  <br>
  <h2 class="text-center" style="font-weight: bold;color:white" >Manual PPIDKu</h2>
  <br>
  <hr>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <script type="text/javascript">
    $(document).on('click','collapse',function(e) {
        if( $(e.target).is('a:not(".dropdown-toggle")') ) {
            $(this).collapse('hide');
        }
    });
  </script>

<div class="container-fluid">
  <div id="accordion1">
    <div class="card">
      <div class="card-header">
        <a class="card-link" data-toggle="collapse" href="#collapseOne" style="color:grey; font-weight: bold">
          Log Masuk
        </a>
      </div>
      <div id="collapseOne" class="collapse" data-parent="#accordion">
        <div class="card-body">
          <div><img src="assets/img/manual/ppids1.jpg"></div>
              <br><br>
          <div><img src="assets/img/manual/ppids2.jpg"></div>
              <br><br>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo" style="color:grey; font-weight: bold">
        Akses Statistik
      </a>
      </div>
      <div id="collapseTwo" class="collapse" data-parent="#accordion">
        <div class="card-body">
          <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo1" style="color:grey; font-weight: bold">
            Statistik Lulus/Gagal
          </a>
          <div id="collapseTwo1" class="accordion-body collapse" >
            <div class="accordion-inner">
              #1
            <div><img src="assets/img/manual/ppids3.jpg"></div>
                <br><br>
              #2
            <div><img src="assets/img/manual/ppids4.jpg"></div>
               <br><br>
              #3
            <div><img src="assets/img/manual/ppids5.jpg"></div>
               <br><br>
              #4
            <div><img src="assets/img/manual/ppids6.jpg"></div>
               <br><br>
              #5
            <div><img src="assets/img/manual/ppids7.jpg"></div>
            </div>
          </div>
        </div>
        <div class="card-body">
          <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo2" style="color:grey; font-weight: bold">
            Statistik Markah Dapat
          </a>
          <div id="collapseTwo2" class="accordion-body collapse">
            <div class="accordion-inner">
              #1
            <div><img src="assets/img/manual/ppids8.jpg"></div>
                <br><br>
              #2
            <div><img src="assets/img/manual/ppids9.jpg"></div>
               <br><br>
              #3
            <div><img src="assets/img/manual/ppids10.jpg"></div>
               <br>
          </div>
        </div>
      </div>
    </div>
  </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree"style="color:grey; font-weight: bold">
          Log Keluar
        </a>
      </div>
      <div id="collapseThree" class="collapse" data-parent="#accordion">
        <div class="card-body">
          <div id="collapseThree" class="accordion-body collapse">
            <div class="accordion-inner">
              <div><img src="assets/img/manual/ppids11.jpg"></div>
                  <br><br>
              <div><img src="assets/img/manual/ppids12.jpg"></div>
                  <br><br>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<br>
<br>
</div>
</div>

<?php
  include "footer.php"
?>




  