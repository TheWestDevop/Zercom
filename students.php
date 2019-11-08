<?php
header('Content-Type: application/json;charset=utf-8');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Examinations";
 $conn = new mysqli($servername, $username, $password, $dbname);

include ('api.php');
$students = new Candidates();
echo $students->students_And_Centers();

?>