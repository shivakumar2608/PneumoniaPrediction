<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
</head>
<body>
    <?php include("navbar2.php")  ?>


    
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="css_assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="css_assets/img/favicon.png">
  <title>
    Admin - Dashboard
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="css_assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="css_assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="css_assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="css_assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
</head>

<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="" >
        <img src="css_assets/img/logo-ct-dark.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">User Dashboard</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " href="">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Records</span>
          </a>
        </li>

      </ul>
    </div>
    
  </aside>
  <main class="main-content position-relative border-radius-lg ">
    
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>My Dashboard</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Record ID</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Symptoms</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">X-Ray Image</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date & Time</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>

                  <?php
                
                
                $sql = "SELECT * FROM user_data WHERE user_id = $id";
                $res = mysqli_query($conn, $sql);
                $num = 1;
                if ($res == TRUE) {
                    $count = mysqli_num_rows($res);
                
                    if ($count > 0) {
                        while ($rows = mysqli_fetch_assoc($res)) {
                            
                            $id = $rows['id'];
                            $symptoms = $rows['symptoms'];
                            $timestampp = $rows['timestampp'];
                            $result = $rows['result'];
                            $xRayImage = $rows['xRayImage'];
                            ?>

                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?= $id ?></h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?= $symptoms ?></h6>
                          </div>
                        </div>
                      </td>
                      <td>
                      <img class="img-responsive" width="100px" src="admin/uploads/<?php echo json_decode($rows["xRayImage"])[0]  ?>" alt="foto" />
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success"><?= $result ?></span>
                      </td>
                      <td class="align-middle text-center">
                        <h6 class="text-danger text-sm font-weight-bold"><?= $timestampp  ?></h6>
                      </td>
                      
                    </tr>
                    
                    <?php

                }  
                }
                else{
                    //we dont have data in db
                }
                }
                ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      
    </div>
  </main>
  
  <!--   Core JS Files   -->
  <script src="css_assets/js/core/popper.min.js"></script>
  <script src="css_assets/js/core/bootstrap.min.js"></script>
  <script src="css_assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="css_assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="css_assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>



</body>
</html>