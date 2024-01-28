<?php

include 'config.php';
?>

<?php

if(empty($_SESSION["admin_id"])){
  
  header('Location: admin-login.php');
    
}
else{
  $admin_id = $_SESSION["admin_id"];
  $result = mysqli_query($conn, "SELECT * FROM admin WHERE admin_id = $admin_id");
  $row = mysqli_fetch_assoc($result);

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Owned Cars</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="../assets/css/login.css"> -->

    <style>
        .container-class{
            margin:5%;
        }
        .confirmDelete{
            display:none;
        }
    </style>


</head>
<body>

<?php require('navbar2.php') ?>

    <div class="container-class">
 
     
<?php
    $sql = "SELECT * FROM users";
    $res = mysqli_query($conn, $sql);
    $num = 1;
    if($res== TRUE){
        $count = mysqli_num_rows($res);
        ?>
        <div class="">
        <h2 align="center" style="margin:30px">Users Info </h2>
        
        
<table class="table table-striped">

<thead>
    <tr>
      <th scope="col">User Id</th>
      <th scope="col">Name</th>
      <th scope="col">Mobile</th>
      <th scope="col">Email</th>
      
      <th scope="col">Status</th>
      
    </tr>
  </thead>

        <?php
        if($count >0){
            while($rows = mysqli_fetch_assoc($res)){
                $id = $rows['id'];
                $name = $rows['name'];
                $mobile= $rows['mobile'];
                $email = $rows['email'];
                
      
                ?>
    
    <tbody>
    <tr>
      <th scope="row"> <?php echo $id  ?> </th>
      <td> <?php echo $name  ?></td>
      <td> <?php echo $mobile  ?></td>
      <td> <?php echo $email  ?></td>
  
      <td> <a href="delete-user.php?msgid=<?php echo $id ?>">Delete</a></td>
      
      
      
    </tr>
            </tbody>

            <?php

}  
}
else{
    //we dont have data in db
}
}

?>

</table>
<div class="confirmDelete">
    <div class="content">
        <img class="crossImgPopup" src="images/symbols/crossSymbol.png" alt="" srcset="">
        Are your sure want to delete this user?
    </div>
    <div class="buttons">
        
        <a class="btn btn-danger" href="#">Confirm</a>
        <button class="btn btn-secondary" onclick="confirmDeleteUser()" href="#">Cancel</a>
    </div>
</div>


<script>
 function confirmDeleteUser() {
        var msg =document.querySelector('.confirmDelete')
        var crossSymbols =document.querySelector('.crossSymbolTd')
        msg.classList.toggle('displayNone');
        var container =document.querySelector('.container-class')
        container.classList.toggle('main-container-blur');
        var audio = new Audio('audio/bookingConfirmAudio.mp3');
        audio.play();
        console.log(crossSymbols);
        

      }
    </script>
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>