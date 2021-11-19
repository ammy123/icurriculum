<?php
include"config.php";
if(isset($_POST["submit"]))
{
          $file = $_FILES['file']['tmp_name'];
          $handle = fopen($file, "r");
          $c = 0;
          while(($csv=fgetcsv($handle, 1000, ",")) !== false)
                    {
          $carpart_id =$csv[0];
         
          $sql = "INSERT INTO `studentimport`( `organizationalUnit`, `department`, `program`, `programDescription`, `skillsAssociatedWithProgram`, `programLevels`, `instructorID`, `instructorTitle`, `instructorFirst`, `instructorLast`, `instructorEmail`, `studentID`, `studentDescription`, `studentFirst`, `studentLast`, `studentEmail`, `badgeDescription`, `dateEarned`, `sponsor`, `executiveSponsor`, `link1`, `link2`, `link3`) VALUES ('".$csv[0]."','".$csv[1]."','".$csv[2]."','".$csv[3]."','".$csv[4]."','".$csv[5]."','".$csv[6]."','".$csv[7]."','".$csv[8]."','".$csv[9]."','".$csv[10]."','".$csv[11]."','".$csv[12]."','".$csv[13]."','".$csv[14]."','".$csv[15]."','".$csv[16]."','".$csv[17]."','".$csv[18]."','".$csv[19]."','".$csv[20]."','".$csv[21]."','".$csv[22]."')";
          $stmt = mysqli_query($conn,$sql);

         $c = $c + 1;
           }

            if($sql){
               echo "sucess";
             } 
         else
         {
            echo "Sorry! Unable to impo.";
          }

}
?>
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
<!--

TemplateMo 565 Onix Digital

https://templatemo.com/tm-565-onix-digital

-->
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

  

  <div id="contact" class="contact-us section">
    <div class="container">
      <div class="row">
        
       <div id="subscribe" class="subscribe">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="inner-content">
            <div class="row">
              <div class="col-lg-10 offset-lg-1">
                <h2>Import Your Excel File Here</h2>
                <form id="subscribe" enctype="multipart/form-data" method="POST">
                  <input type="file" name="file"  id="website" placeholder="" required="">
                 
                  <button type="submit" id="form-submit"  name="submit" class="main-button ">Submit</button>
                  <button type="submit" id="form-submit" class="main-red-button">Add Student</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
      </div>
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

  <?php include 'include/footer.php'?>


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