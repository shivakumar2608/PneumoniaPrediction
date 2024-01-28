<?php include('navbar2.php'); include('config.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pneumonia Prediction</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/css-extra/color.css">
  <link rel="stylesheet" href="css/css-extra/index.css">
  <link rel="stylesheet" href="css/css-extra/login.css">
  <link rel="stylesheet" href="css/css-extra/master.css">
  <link rel="stylesheet" href="css/css-extra/theme.css">
  <link rel="stylesheet" href="css/css-extra/responsive.css">

<!-- cdn optional -->

<!-- animation aos cdn link -->
        <!-- SWITCHER-->
        <script src="assets/js/separate-js/html5shiv-3.7.2.min.js" type="text/javascript"></script><meta content="no" http-equiv="imagetoolbar">

  

</head>

<body style="background-color: rgba(235, 242, 253, 0.39);">

<div id="home" style="padding-top:8%" class="container-1">
<div class="px-4 pt-5 my-5 text-center border-bottom">
    <h1 class="display-10 fw-bold mb-3">LungGuard : Smart Pneumonia Prediction AI Platform</h1>
    <div class="col-lg-10 mx-auto">
      <p class="mb-3">Welcome to LungGuard, your trusted platform for pneumonia prediction through innovative technology. At LungGuard, we are dedicated to revolutionizing healthcare by harnessing the power of Machine Learning.</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
        <a href="prediction.php" class="btn btn-danger btn-lg px-4 me-sm-3 " > Lets Predict </a>
        <a href="#aboutus" class="btn btn-outline-secondary btn-lg px-4 ">Explore </a>
      </div>
    </div>
    <div class="overflow-hidden" style="max-height: 30vh;">
      <div class="container px-5">
        <img src="images/carosal_image2.jpg" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="700" height="500" loading="lazy">
      </div>
    </div>
  </div>    
</div>

<?php include "aboutus.php" ?>


<?php  include "services.php" ?>

<br>
<br>
<br>


  <?php  include "footer.php" ?>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>

    
  
 <!-- User customization-->
 <script src="assets/js/custom.js"></script>
        <!-- Headers scripts-->
        <script src="assets/plugins/headers/slidebar.js"></script>
        <script src="assets/plugins/headers/header.js"></script>
        <!-- Color scheme-->
        <script src="assets/plugins/switcher/js/dmss.js"></script>
        <!-- Select customization & Color scheme-->
        <script src="assets/plugins/bootstrap-select/js/bootstrap-select.min.js"></script>
        <!-- Slider-->
        <script src="assets/plugins/owl-carousel/owl.carousel.min.js"></script>
        <!-- Pop-up window-->
        <script src="assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
      
  
        <!-- Progress numbers-->
        <script src="assets/plugins/rendro-easy-pie-chart/jquery.easypiechart.min.js"></script>
        <script src="assets/plugins/rendro-easy-pie-chart/waypoints.min.js"></script>
        <!-- NoUiSlider-->
        <script src="assets/plugins/noUiSlider/nouislider.min.js"></script>
        <script src="assets/plugins/noUiSlider/wNumb.js"></script>
        <!-- Animations-->
        <script src="assets/plugins/scrollreveal/scrollreveal.min.js"></script>
        <!-- Main slider-->
        <script src="assets/plugins/slider-pro/jquery.sliderPro.min.js"></script>


</body>

</html>