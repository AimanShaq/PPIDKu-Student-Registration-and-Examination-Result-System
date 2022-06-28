<?php 
  include "header.php" ;
  include "dbconnect.php";

 ?>
<title>Manual Ibubapa</title>
<div style="background-image: url('assets/img/background.jpg'); min-height: 500px">
<div class="container">
  <br>
  <h2 class="text-center" style="font-weight: bold;color:white" >Manual Ibubapa</h2>
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
          Carian
        </a>
      </div>
      <div id="collapseOne" class="collapse" data-parent="#accordion">
        <div class="card-body">
          <div><img src="assets/img/manual/bapas1.jpg"></div>
              <br><br>
          <div><img src="assets/img/manual/bapas2.jpg"></div>
              <br><br>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo" style="color:grey; font-weight: bold">
          Pilihan Slip
        </a>
      </div>
      <div id="collapseTwo" class="collapse" data-parent="#accordion">
        <div class="card-body">
          <div><img src="assets/img/manual/bapas3.jpg"></div>
        </div>
      </div>
   </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree" style="color:grey; font-weight: bold">
          Paparan
        </a>
      </div>
      <div id="collapseThree" class="collapse" data-parent="#accordion">
        <div class="card-body">
          *Paparan Maklumat Pelajar* 
            <div><img src="assets/img/manual/bapas4.jpg"></div>
            <br>
             *Paparan Slip Markah* 
            <div><img src="assets/img/manual/bapas5.jpg"></div>
            <br>
             *Paparan Slip Penempatan* 
            <div><img src="assets/img/manual/bapas6.jpg"></div>
        </div>
      </div>
    </div>
  </div>
  </div>
<br>
<br>
</div>
</div>
</div>

<?php
  include "footer.php"
?>




  