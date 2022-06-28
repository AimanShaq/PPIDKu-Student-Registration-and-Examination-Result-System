<?php 
  include "header.php" ;
  include "dbconnect.php";

 ?>
<title>Manual Sekolah</title>
<div style="background-image: url('assets/img/background.jpg'); min-height: 500px">
<div class="container">
  <br>
  <h2 class="text-center" style="font-weight: bold;color:white" >Manual Sekolah</h2>
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
        <a class="card-link stretched-link" data-toggle="collapse" href="#collapseOne" style="color:grey; font-weight: bold">
          Log Masuk
        </a>
      </div>
      <div id="collapseOne" class="collapse" data-parent="#accordion">
        <div class="card-body">
          <div><img src="assets/img/manual/sekos1.jpg"></div>
              <br><br>
          <div><img src="assets/img/manual/sekos2.jpg"></div>
              <br><br>
        </div>
      </div>
    </div>


    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link stretched-link" data-toggle="collapse" href="#collapseTwo" style="color:grey; font-weight: bold">
        Muatnaik Butiran Murid
      </a>
      </div>
      <div id="collapseTwo" class="collapse" data-parent="#accordion">
        <div class="card-body">
              #1
              <div><img src="assets/img/manual/sekos3.jpg"></div>
                  <br><br>
                #2
              <div><img src="assets/img/manual/sekos4.jpg"></div>
                 <br><br>
                #3
              <div><img src="assets/img/manual/sekos5.jpg"></div>
                 <br><br>
                #4
              <div><img src="assets/img/manual/sekos6.jpg"></div>
                 <br><br>
                #5
              <div><img src="assets/img/manual/sekos7.jpg"></div>
            </div>
          </div>
    </div>
  </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link stretched-link" data-toggle="collapse" href="#collapseThree"style="color:grey; font-weight: bold">
          Kemaskini Maklumat Murid
        </a>
      </div>
      <div id="collapseThree" class="collapse" data-parent="#accordion">
        <div class="card-body">
          <div id="collapseThree" class="accordion-body collapse">
            <div class="accordion-inner">
              #1
              <div><img src="assets/img/manual/sekos8.jpg"></div>
                  <br><br>
                #2
              <div><img src="assets/img/manual/sekos9.jpg"></div>
                 <br><br>
                #3
              <div><img src="assets/img/manual/sekos10.jpg"></div>
                 <br><br>
                #4
              <div><img src="assets/img/manual/sekos11.jpg"></div>
                 <br><br>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link stretched-link" data-toggle="collapse" href="#collapseThree1" style="color:grey; font-weight: bold">
        Kemaskini Subjek
      </a>
      </div>
      <div id="collapseThree1" class="collapse" data-parent="#accordion">
        <div class="card-body">
              #1
              <div><img src="assets/img/manual/sekos12.jpg"></div>
                  <br><br>
                #2
              <div><img src="assets/img/manual/sekos13.jpg"></div>
                 <br><br>
                #3
              <div><img src="assets/img/manual/sekos14.jpg"></div>
                 <br><br>
              
            </div>
          </div>
      </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link stretched-link" data-toggle="collapse" href="#collapseFour"style="color:grey; font-weight: bold">
          Kemaskini Guru
        </a>
      </div>
      <div id="collapseFour" class="collapse" data-parent="#accordion">
        <div class="card-body">
          <div id="collapseFour" class="accordion-body collapse">
            <div class="accordion-inner">
               #1
              <div><img src="assets/img/manual/sekos15.jpg"></div>
                  <br><br>
                #2
              <div><img src="assets/img/manual/sekos16.jpg"></div>
                 <br><br>
                #3
              <div><img src="assets/img/manual/sekos17.jpg"></div>
                 <br><br>
              #4
              <div><img src="assets/img/manual/sekos18.jpg"></div>
                 <br><br>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header">
        <a class="card-link stretched-link" data-toggle="collapse" href="#collapseFive" style="color:grey; font-weight: bold">
          Kemaskini Kelas
        </a>
      </div>
      <div id="collapseFive" class="collapse" data-parent="#accordion">
        <div class="card-body">
          #1
          <div><img src="assets/img/manual/sekos19.jpg"></div>
              <br><br>
            #2
          <div><img src="assets/img/manual/sekos20.jpg"></div>
             <br><br>
            #3
          <div><img src="assets/img/manual/sekos21.jpg"></div>
             <br><br>
          #4
          <div><img src="assets/img/manual/sekos22.jpg"></div>
             <br><br>
          #5
          <div><img src="assets/img/manual/sekos23.jpg"></div>
             <br><br>
          #6
          <div><img src="assets/img/manual/sekos24.jpg"></div>
             <br><br>
        </div>
      </div>
    </div>


    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link stretched-link" data-toggle="collapse" href="#collapseSix" style="color:grey; font-weight: bold">
        Kemaskini Penempatan
      </a>
      </div>
      <div id="collapseSix" class="collapse" data-parent="#accordion">
        <div class="card-body">
              #1
              <div><img src="assets/img/manual/sekos25.jpg"></div>
                  <br><br>
                #2
              <div><img src="assets/img/manual/sekos26.jpg"></div>
                 <br><br>
                #3
              <div><img src="assets/img/manual/sekos27.jpg"></div>
                 <br><br>
              #4
              <div><img src="assets/img/manual/sekos28.jpg"></div>
                 <br><br>
              #5
              <div><img src="assets/img/manual/sekos29.jpg"></div>
                 <br><br>
            </div>
          </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link stretched-link" data-toggle="collapse" href="#collapseSeven"style="color:grey; font-weight: bold">
          Kemaskini Markah Peperiksaan
        </a>
      </div>
      <div id="collapseSeven" class="collapse" data-parent="#accordion">
        <div class="card-body">
              #1
              <div><img src="assets/img/manual/sekos25.jpg"></div>
                  <br><br>
                #2
              <div><img src="assets/img/manual/sekos30.jpg"></div>
                 <br><br>
                #3
              <div><img src="assets/img/manual/sekos31.jpg"></div>
                 <br><br>
              #4
              <div><img src="assets/img/manual/sekos32.jpg"></div>
                 <br><br>
              #5
              <div><img src="assets/img/manual/sekos33.jpg"></div>
                 <br><br>
            </div>
          </div>
        </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link stretched-link" data-toggle="collapse" href="#collapseEight" style="color:grey; font-weight: bold">
        Log Keluar
      </a>
      </div>
      <div id="collapseEight" class="collapse" data-parent="#accordion">
        <div class="card-body">
              <div><img src="assets/img/manual/sekos34.jpg"></div>
            <br><br>
        <div><img src="assets/img/manual/sekos35.jpg"></div>
            <br><br>
              
            </div>
          </div>
      </div>
      <br>
      <br>
  </div>
    




  </div>
</div>  
</div>
</div>
</div>

<?php
  include "footer.php"
?>




  