<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
<style>
@import url('https://fonts.googleapis.com/css?family=Roboto');

body{
  font-family: 'Roboto', sans-serif;
}
* {
  margin: 0;
  padding: 0;
}
i {
  margin-right: 10px;
}
/*----------bootstrap-navbar-css------------*/
.navbar-logo{
  padding: 15px;
  color: #fff;
}
.navbar-mainbg{
  background-color: #03a4ed;
  padding: 0px;
}
#navbarSupportedContent{
  overflow: hidden;
  position: relative;
}
#navbarSupportedContent ul{
  padding: 0px;
  margin: 0px;
}
#navbarSupportedContent ul li a i{
  margin-right: 10px;
}
#navbarSupportedContent li {
  list-style-type: none;
  float: left;
}
#navbarSupportedContent ul li a{
  color: #f8f9fa;
    text-decoration: none;
    font-size: 15px;
    display: block;
    padding: 20px 20px;
    transition-duration:0.6s;
  transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
    position: relative;
}
#navbarSupportedContent>ul>li.active>a{
  color: #03a4ed;
  background-color: transparent;
  transition: all 0.7s;
}
#navbarSupportedContent a:not(:only-child):after {
  content: "\f105";
  position: absolute;
  right: 20px;
  top: 10px;
  font-size: 14px;
  font-family: "Font Awesome 5 Free";
  display: inline-block;
  padding-right: 3px;
  vertical-align: middle;
  font-weight: 900;
  transition: 0.5s;
}
#navbarSupportedContent .active>a:not(:only-child):after {
  transform: rotate(90deg);
}
.hori-selector{
  display:inline-block;
  position:absolute;
  height: 100%;
  top: 0px;
  left: 0px;
  transition-duration:0.6s;
  transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
  background-color: #fff;
  border-top-left-radius: 15px;
  border-top-right-radius: 15px;
  margin-top: 10px;
}
.hori-selector .right,
.hori-selector .left{
  position: absolute;
  width: 25px;
  height: 25px;
  background-color: #fff;
  bottom: 10px;
}
.hori-selector .right{
  right: -25px;
}
.hori-selector .left{
  left: -25px;
}
.hori-selector .right:before,
/*.hori-selector .left:before{
  content: '';
    position: absolute;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background-color: white;
}*/
.hori-selector .right:before{
  bottom: 0;
    right: -25px;
}
.hori-selector .left:before{
  bottom: 0;
    left: -25px;
}


@media(min-width: 992px){
  .navbar-expand-custom {
      -ms-flex-flow: row nowrap;
      flex-flow: row nowrap;
      -ms-flex-pack: start;
      justify-content: flex-start;
  }
  .navbar-expand-custom .navbar-nav {
      -ms-flex-direction: row;
      flex-direction: row;
  }
  .navbar-expand-custom .navbar-toggler {
      display: none;
  }
  .navbar-expand-custom .navbar-collapse {
      display: -ms-flexbox!important;
      display: flex!important;
      -ms-flex-preferred-size: auto;
      flex-basis: auto;
  }
}


@media (max-width: 991px){
  #navbarSupportedContent ul li a{
    padding: 12px 30px;
  }
  .search{
    margin-top: 10px;
  }
  .hori-selector{
    margin-top: 0px;
    margin-left: 10px;
    border-radius: 0;
    border-top-left-radius: 25px;
    border-bottom-left-radius: 25px;
  }
  .hori-selector .left,
  .hori-selector .right{
    right: 10px;
  }
  .hori-selector .left{
    top: -25px;
    left: auto;
  }
  .hori-selector .right{
    bottom: -25px;
  }
  .hori-selector .left:before{
    left: -25px;
    top: -25px;
  }
  .hori-selector .right:before{
    bottom: -25px;
    left: -25px;
  }
}
</style>
</head>
<body>
  <center>
<header class="navbar navbar-expand-custom navbar-mainbg col-lg-8">
                                <form action="" class="navbar-form mt-2">
                                    <div class="form-group">
                                        <div class="input-group col-lg-12 search">
                                            <input type="search" name="search" id="" placeholder="Search" class="form-control" style="border-radius: 50px;">
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
                                        </div>
                                    </div>
                                </form>
        <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-white"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <div class="hori-selector"></div>
                <li class="nav-item ">
                    <a class="nav-link" href="badgeCreation.php"><i class="fas fa-tachometer-alt"></i>CREATE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-address-book"></i>SEARCH</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="manageBadge.php"><i class="far fa-clone"></i>EDIT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-calendar-alt"></i>EXPORT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-chart-bar"></i>SYSTEM SETTINGS</a>
                </li>
            </ul>
        </div>
    </header>
  </center>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>
// ---------Responsive-navbar-active-animation-----------
function test(){
  var tabsNewAnim = $('#navbarSupportedContent');
  var selectorNewAnim = $('#navbarSupportedContent').find('li').length;
  var activeItemNewAnim = tabsNewAnim.find('.active');
  var activeWidthNewAnimHeight = activeItemNewAnim.innerHeight();
  var activeWidthNewAnimWidth = activeItemNewAnim.innerWidth();
  var itemPosNewAnimTop = activeItemNewAnim.position();
  var itemPosNewAnimLeft = activeItemNewAnim.position();
  $(".hori-selector").css({
    "top":itemPosNewAnimTop.top + "px", 
    "left":itemPosNewAnimLeft.left + "px",
    "height": activeWidthNewAnimHeight + "px",
    "width": activeWidthNewAnimWidth + "px"
  });
  $("#navbarSupportedContent").on("click","li",function(e){
    $('#navbarSupportedContent ul li').removeClass("active");
    $(this).addClass('active');
    var activeWidthNewAnimHeight = $(this).innerHeight();
    var activeWidthNewAnimWidth = $(this).innerWidth();
    var itemPosNewAnimTop = $(this).position();
    var itemPosNewAnimLeft = $(this).position();
    $(".hori-selector").css({
      "top":itemPosNewAnimTop.top + "px", 
      "left":itemPosNewAnimLeft.left + "px",
      "height": activeWidthNewAnimHeight + "px",
      "width": activeWidthNewAnimWidth + "px"
    });
  });
}
$(document).ready(function(){
  setTimeout(function(){ test(); });
});
$(window).on('resize', function(){
  setTimeout(function(){ test(); }, 500);
});
$(".navbar-toggler").click(function(){
  $(".navbar-collapse").slideToggle(300);
  setTimeout(function(){ test(); });
});



// --------------add active class-on another-page move----------
jQuery(document).ready(function($){
  // Get current path and find target link
  var path = window.location.pathname.split("/").pop();

  // Account for home page with empty path
  if ( path == '' ) {
    path = 'index.html';
  }

  var target = $('#navbarSupportedContent ul li a[href="'+path+'"]');
  // Add active class to target link
  target.parent().addClass('active');
});
</script>
   
</body>
</html> 