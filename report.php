
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
      .label{
        padding: 5px;border: solid 1px;
      }
    </style>
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

  <!-- ***** Header Area End ***** -->

  <div id="pricing" class="pricing-tables" style="margin-top: 100px !important;">
    <div class="tables-left-dec">
      <img src="assets/images/tables-left-dec.png" alt="">
    </div>
    <div class="tables-right-dec">
      <img src="assets/images/tables-right-dec.png" alt="">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <img src="assets/logo/white.png" style="width:100%">
          <center>
            <small style="margin-top:50px !important;color: #ff695f;">Additional Details</small>
          </center>
        </div>
        <div class="col-lg-8">
          <div class="section-heading">
            <h2> <em>CompTIA </em> Linux+ <span>ce Certification</span></h2>
            <span>Issued by CompTIA</span>
          </div>
          <p class="col-lg-12 " >Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
          <h3 class="mt-5 mb-2">Skills</h3>
          <div class="row" style="color: #03a4ed;">
            <div style="width: auto;">
              <label class="label mb-2">CompTIA</label>
            </div>
            <div style="width: auto;">
              <label class="label mb-2">Essential system Services</label>
            </div>
            <div style="width: auto;">
              <label class="label mb-2">GNU & UNIX Commands</label>
            </div>
            <div style="width: auto;">
              <label class="label mb-2">Hierarchy Standards</label>
            </div>
          </div>
          <h3 class="mt-5 mb-2">Earning Criteria</h3>
          <div class="row">
            <span class="mt-3"><i class="fa fa-file-o" aria-hidden="true"></i>
            <small style="margin-left: 15px;">Achieve a passing score on the CompTIA Linux+ Performance-based exam</small>
          </span>
          <span class="mt-3"><i class="fa fa-graduation-cap" aria-hidden="true"></i>
            <small style="margin-left: 10px;">Complete Continuing Education requirements for renewal</small>
          </span>
          </div>
          <div class="row mt-5">
            <div class="col-lg-6">
              <button type="submit" id="form-submit" class="main-red-button" style="background-color: #ff695f;border: none;width: 100%;padding: .5rem;border-radius: 50px;color: white;">Share</button>
            </div>
            <div class="col-lg-6">
              <button type="submit" id="form-submit" class="main-red-button" style="background-color: #03a4ed;border: none;width: 100%;padding: .5rem;border-radius: 50px;color: white;">Email</button>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>

  <div id="contact" class="contact-us section" >
    <div class="container">
     
    </div>
    <div class="contact-dec">
      <img src="assets/images/contact-dec.png" alt="">
    </div>
    <div class="contact-left-dec">
      <img src="assets/images/contact-left-dec.png" alt="">
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