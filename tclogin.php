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
  background-image: url("assets/img/ppid5.jpg");
  height: 90%;
  width: 100%;
  /* Center and scale the image nicely */
  background-position: center;
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

.noblur{
  filter:blur(0px);
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
<title>Log Masuk Sekolah</title>
</head>
<body>
<div style="background-image:url(assets/img/background.jpg);background-size:cover;">
<br><center>
  <div>
  <form method="POST" action="tcloginprocess.php" class="shadow1 card border-bottom-primary h-100 py-2" style="background-color:#ffffff;width:426px;max-width:100%;height:520px;background-repeat:no-repeat;background-size:cover;margin:24px 24px;">
    <center><h1 class="text-md font-weight-bold text-primary text-uppercase mb-1" style="color:blue ;padding:33px; font-size:28px;"><b>Log Masuk Sekolah</b></h1></center>
    <div class="text-md font-weight-bold text-primary text-uppercase mb-1" style="padding:0px 33px">
      <label for="username" style="color:blue;"><b>ID Sekolah</b></label>
      <input type="text" placeholder="Masukkan ID" name="fcschid" id="fcschid" required>
    </div>
    <div class="text-md font-weight-bold text-primary text-uppercase mb-1" style="padding:0px 33px">
      <label for="psw" style="color:blue; font-size: 15px"><b>Kata Laluan</b></label>
      
        <div class="row">
          <div class=col-lg>
            <input type="password" placeholder="Masukkan kata laluan" id="fcschpwd"  name="fcschpwd" required> 
          </div>
          <div class="col-lg-2" >
            <i style="margin:20px 0px;padding:0px 10px;" class="btn btn-primary btn-block  fas fa-eye bg-gradient-primary" onclick="myFunction1()"></i>
          </div>  
        </div>
    </div>
    <br>
    <div class="form-group" style="padding:5px;"><button class="btn btn-primary btn-block mx-auto bg-gradient-primary" type="submit" style="width:350px;padding:7px;">Log Masuk</button><br>
    </div>
  </form>
  </div></center>
  <br>
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
  var x = document.getElementById("fcschpwd");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
<?php include "footer.php" ?>