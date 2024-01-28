<?php include("navbar2.php");
 //include("config.php") 
 ?>

<?php
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM  users WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}

else{
header('Location: login.php');
}

?>


<?php 
                
                
if (isset($_POST['send_message'])) {
    $totalFiles = count($_FILES['xRayImage']['name']);
    $filesArray = array();

    $name = $_POST['name'];
    $userid = $_SESSION["id"];
    
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    for ($i = 0; $i < $totalFiles; $i++) {
        $imageName = $_FILES["xRayImage"]["name"][$i];
        $tmpName = $_FILES["xRayImage"]["tmp_name"][$i];

        $newImageName = $name . '-' . $imageName;

        move_uploaded_file($tmpName, "admin/uploads/" . $newImageName);
        $filesArray[] = $newImageName;
    }

    $filesArray = json_encode($filesArray);

    //validation code insert here

    //yes or no string

    $query = "INSERT INTO user_data (id, user_id, name, mobile, email, xRayImage, symptoms, timestampp, result) VALUES ('','$userid', '$name', '$mobile', '$email', '$filesArray', '$message', NOW() , 'yes')";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Data inserted into the database, and we will soon let you know about the analysis and predicted value.');</script>";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}

                
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/css-extra/color.css">
  <link rel="stylesheet" href="css/css-extra/index.css">
  <link rel="stylesheet" href="css/css-extra/login.css">
  <link rel="stylesheet" href="css/css-extra/master.css">
  <link rel="stylesheet" href="css/css-extra/theme.css">
  <link rel="stylesheet" href="css/css-extra/responsive.css">
</head>
<body>
<div class="info-group block-table block-table_md my-0">
    <div class="info-group__section col-md-12 col-lg-12">

        <section class="section-form-contacts ">
            
            <h2 class="section-form-contacts__title">Upload Your Data, Get Instant Predictions!</h2>
            <div class="section-form-contacts__info">Empowering Health through Advanced AI Technology..</div>


            
            <form class="b-form-contacts ui-form" enctype="multipart/form-data" id="contactForm" method="post">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group m-2">
                            <input class="form-control" id="name" type="text" name="name" placeholder="Name" required="required">
                        </div>
                       
                    </div>
                    <div class="col-md-12">
                    <div class="form-group m-2">
                            <input class="form-control" id="mobile" type="tel" name="mobile" placeholder="Phone" required="required">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group m-2">
                            <input class="form-control" id="email" type="email" name="email" placeholder="Email" required="required">
                        </div>
                      
                    </div>
                    <div class="col-md-12">
                    <div class="form-group m-2">
                            <input class="form-control" id="xRayImage" type="file" name="xRayImage[]" placeholder="xRayImage" required="required">
                        </div>
                    </div>
                   
                </div>
                <div class="row">
                    <div class="col-xs-12 m-2">
                        <textarea class="form-control" id="user-message" name="message" rows="7" placeholder="Kindly provide Detailed Symptoms" required="required"></textarea>
                    </div>
                </div>
                <button type="submit" name="send_message" value="send_message" id="send_message" class=" m-2 px-5 btn btn-danger btn-md">Predit</button>
                
            </form>
        </section>
        </div></div>
</body>
</html>