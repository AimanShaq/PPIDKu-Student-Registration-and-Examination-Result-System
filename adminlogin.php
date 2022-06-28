<?php
  include "header.php";
?>
<style>
body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  background-image: url("assets/img/kulai.jpg");
  width: 100%;
  height: 80%;

  /* Center and scale the image nicely */
  background-position: 100% 70%;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Add styles to the form container */
.container {
  position: center;
  right: 0;
  margin: auto;
  max-width: 30%;
  padding: 0px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}

</style>
<title>Login Admin</title>
</head>
<body>

<div style="background-image:url(assets/img/background.jpg);background-size:cover;">
  <br>
  <center>
    <div>
    <form method="POST" action="adminloginprocess.php" class="shadow1 card border-bottom-primary h-100 py-2 " style="background-color:#ffffff;width:426px;max-width:100%;height:450px;background-repeat:no-repeat;background-size:cover;margin:24px 24px;">
      <h1 class="mx-auto text-md font-weight-bold text-primary text-uppercase mb-1" style="color:blue; padding:33px; font-size:28px;"><b>Log Masuk Admin</b></h1>
      <div class="text-md font-weight-bold text-primary text-uppercase mb-1" style="padding:0px 33px">
        <label for="" style="color:blue"><b>ID Pengguna</b></label>
        <input type="text" placeholder="Masukkan ID" name="fcadid" id="fcadid" required>
      </div>
      <div class="text-md font-weight-bold text-primary text-uppercase mb-1" style="padding:0px 33px">
        <label for="" style="color:blue ;font-size:15px;"><b>Kata Laluan</b></label>
        <div class="row">
          <div class=col-lg>
            <input type="password" placeholder="Masukkan kata laluan" name="fcadpwd" id="fcadpwd" required>  
          </div>
          <div class="col-lg-2" >
            <i style="margin:20px 0px;padding:0px 10px;" class="btn btn-primary btn-block  fas fa-eye bg-gradient-primary" onclick="myFunction1()"></i>
          </div>  
        </div>
      </div>
      <div class="form-group text-md font-weight-bold text-primary text-uppercase mb-1" style="padding:5px;"><button class="btn btn-primary btn-block mx-auto bg-gradient-primary" type="submit" style="background-color:#213159;width:350px;padding:7px;">Log Masuk</button><br>
      </div>
    </form></center>
    <br><br>
</div>
    

                        <div id="error1" class="modal fade" role="dialog">
                          <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title" align="center">ID Tidak Dijumpai</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>
                              <div class="modal-body">
                                <p style="color: grey;">Sila pastikan semula id yang anda telah masukkan</p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                              </div>
                            </div>

                          </div>
                        </div>

                        <?php if (isset($_GET['false'])==1){ ?>
                            <script type="text/javascript">
                                $(document).ready(function(){
                                    $('#error1').modal('show');
                                });
                            </script>

                        <?php } ?>

<script>
function myFunction1() {
  var x = document.getElementById("fcadpwd");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

                        
<?php include "footer.php" ?>