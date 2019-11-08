<?php
header('Content-Type: application/json');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Examinations";
 $conn = new mysqli($servername, $username, $password, $dbname);

include ('api.php');
$data = new Candidates();
return $data->Count_student_Art();


?>