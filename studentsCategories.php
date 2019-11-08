<?php
header('Content-Type: application/json');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Examinations";
 $conn = new mysqli($servername, $username, $password, $dbname);

 function clean_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  $cate;
  if (empty($_GET['category'])){
    $cate = "";
  }else {
    $cate = $_GET['category'];
  }

include ('api.php');
$students = new Candidates();
return $students->students_By_Category($cate);

?>