<?php include 'config.php' ?>
<?php

if(!empty($_SESSION["id"])){
    $id = $_SESSION["id"];
    $result = mysqli_query($conn, "SELECT * FROM  users WHERE id = $id");
    $row = mysqli_fetch_assoc($result);
  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pneumonia Prediction</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
    .container {
    perspective: 1000px;
    margin-bottom: 30px;
}
header{
  position: fixed;
  top:0;
  width:100%;
  z-index:3;
  
}

    </style>
</head>
<body>
   

      <header class="p-3 text-bg-dark" >
    <div style="margin-bottom: 0px;" class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <!-- <img class='mx-5' src="images/logo2.png" alt="" srcset=""> -->
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="index.php#home" class="nav-link px-2 text-white">Home</a></li>
          <li><a href="index.php#aboutus" class="nav-link px-2 text-white">About us</a></li>
          <li><a href="prediction.php" class="nav-link px-2 text-white">Prediction</a></li>
          <li><a href="index.php#services" class="nav-link px-2 text-white">Our Services</a></li>
          <li><a href="userdashboard.php?id=<?php echo $_SESSION['id']?>" class="nav-link px-2 text-white">Dashboard</a></li>
          <li><a href="index.php#footer" class="nav-link px-2 text-white">Contact us</a></li>
          
        </ul>

        <div class="text-end">
          
          
          <?php if (isset($_SESSION['id'])) : { ?>
            <a href="userdashboard.php?id=<?php echo $_SESSION['id'] ?>"> 
            <button type="button" class="btn btn-secondary me-2"> Welcome <?php echo $row['name'] ?> </button> </a>
            <a href="logout.php"> <button type="button" class="btn btn-outline-light btn-danger me-2">Logout</button> </a>
            <?php }?>
            <?php else : ?>
              <a href="login.php" class="btn btn-warning">Login / Sign up</a> 
              <?php  ?>
              <?php endif; ?>
              
          
          
        </div>
      </div>
    </div>
  </header>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>