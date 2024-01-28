<?php 
//session_start();
include('config.php');
if(isset($_POST['submit'])){
  $usernameemail = $_POST['usernameemail'];
  $password = $_POST['password'];

  $result = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$usernameemail'" );
  $row = mysqli_fetch_assoc($result);

  if(mysqli_num_rows($result)>0){

    if($password == $row["password"]){
      $_SESSION["admin_id"] = $row["admin_id"];
      header('Location: index.php');

    }
    else{
      echo " <script> alert('Invalid Credentials') </script> ";
    }

  }
  else{
    echo " <script> alert('Invalid Credentials') </script> ";
    // header('Location: signup.php');
  }
}

?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Admin Login</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/login.css">
</head>
<body>
  <main>
    <div class="container">
      <div class="row">
        <div class="col-sm-6 login-section-wrapper">
          <div class="login-wrapper m-0">
            <h1 class="login-title">Admin Login</h1>
            <form action="admin-login.php" method = "post">
              <div class="form-group">
                <label for="usernameemail">Username / Email</label>
                <input type="text" name="usernameemail" id="email" class="form-control" placeholder="Enter your ID">
              </div>
              <div class="form-group mb-4">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Enter your passsword">
              </div>
              <button type="submit" name="submit" id="submit" class="btn btn-block login-btn" value="submit">Login</button>
            </form>
            <a href="#!" class="forgot-password-link">Forgot password?</a>
            <p class="login-wrapper-footer-text">Don't have an account? <a href="#!" class="text-reset">Register here</a></p>
          </div>
        </div>
        
      </div>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>