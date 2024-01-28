<?php 
$msgid = $_GET['msgid'];
require('../config.php');


$sql = "DELETE FROM users WHERE id=$msgid";

if (mysqli_query($conn, $sql)) {
  echo "Message deleted successfully";
  header('Location: index.php');
  
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}




?>
