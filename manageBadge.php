
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title></title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-onix-digital.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <?php include 'include/topnav.php'?>
  <!-- ***** Header Area End ***** -->

  <div id="pricing" class="pricing-tables" style="margin-top:100px">
    <!-- <div class="tables-left-dec">
      <img src="assets/images/tables-left-dec.png" alt="">
    </div>
    <div class="tables-right-dec">
      <img src="assets/images/tables-right-dec.png" alt="">
    </div> -->
    <?php include 'include/lower.php'?>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3 mt-5">
          <div class="section-heading">
            <h2> <em>Compli-con</em> <span>List</span></h2>
           
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3">
          <div class="item first-item">
            <img src="assets/badges/12.png" style="width:300px;height: 210px;margin-left: -80px;">
            <h5>GDPR</h5>
            <div class="main-blue-button-hover">
              <a href="editBadge.php">Edit Badge</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="item first-item">
            <img src="assets/badges/13.png" style="width:300px;height: 200px;margin-left: -80px;">
            <h5>GDPR</h5>
            <div class="main-blue-button-hover">
              <a href="#">Edit Badge</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="item first-item">
            <img src="assets/badges/12.png" style="width:300px;height: 210px;margin-left: -80px;">
            <h5>GDPR</h5>
            <div class="main-blue-button-hover">
              <a href="#">Edit Badge</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="footer-dec">
    <img src="assets/images/footer-dec.png" alt="">
  </div>


  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/custom.js"></script>

  <script>
  // Acc
    $(document).on("click", ".naccs .menu div", function() {
      var numberIndex = $(this).index();

      if (!$(this).is("active")) {
          $(".naccs .menu div").removeClass("active");
          $(".naccs ul li").removeClass("active");

          $(this).addClass("active");
          $(".naccs ul").find("li:eq(" + numberIndex + ")").addClass("active");

          var listItemHeight = $(".naccs ul")
            .find("li:eq(" + numberIndex + ")")
            .innerHeight();
          $(".naccs ul").height(listItemHeight + "px");
        }
    });
  </script>
</body>
</html>