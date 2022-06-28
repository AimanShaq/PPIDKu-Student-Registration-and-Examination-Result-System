    
    <div class="footer-basic" style="background-color: #262626; border-top:3px solid grey;">
        <footer>
            <div class="row">
              <div class="col-lg-4">
              </div>
              <div class="col-lg">
                <div class="counter" align="center"><label style="color:darkgrey;font-weight: bold">Jumlah Pelawat:</label>
                    <div class="col-xs-12 mt20" align="right" id="bg">
                        <div style="margin:0px auto;width:133px;background:#ffffff;text-align:left;display:flex;border-radius:5px"><span class="text" id="dupli_hit_counter"   style="padding:10px 0 0 0;display:inline-block;color:rgb(21, 19, 19);width:100%;text-align:center;font-style: italic;"></span></span><input type="hidden" id="site_val"   value="https://visitorshitcounter.com/counterDisplay?code=8a728268e51a28af10805d92178cfa7f&style=0017&pad=5&type=ip&initCount=1">
                        </div>
                    </div><script src="https://visitorshitcounter.com/js/badgess.js?v=1575925082"></script><!-- Badge Code End Here -->
                </div>
              </div>
              <div class="col-lg" align="center">
                  <img src="assets/img/utm.png" style="padding-top: 20px;height:70px">
              </div>
              <div class="col-lg-4">
              </div>
            </div>

            <p class="copyright">© All Rights Reserved 2019<br>
            Developed by Quantum Project, SCSP2613 System Analysis and Design (WBL), SCSP2523 Database (WBL) and SCSP3723 Sytem Development Technology (WBL), 2u2i
            <br>Maintained by Pejabat Pendidikan Islam Daerah Kulai (PPIDKu)</p>
            
        </footer>
      
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Customizable-Carousel-swipe-enabled.js"></script>

     <!-- Bootstrap core JavaScript>
  <script src="assets/vendor/jquery/jquery.min.js"></script-->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="assets/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="assets/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="assets/js/demo/chart-area-demo.js"></script>
  <script src="assets/js/demo/chart-pie-demo.js"></script>

  
 


<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

</body>

</html>