<!DOCTYPE html>
<html>

<body>
  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";

  // Create connection
  $conn = new mysqli($servername, $username, $password);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Create database
  $sql = "CREATE DATABASE Examinations";

  if ($conn->query($sql) === TRUE) {

          $dbname = "Examinations";

          // Create Databse connection
          $conn_ii = new mysqli($servername, $username, $password, $dbname);
          $conn_iii = new mysqli($servername, $username, $password, $dbname);
          if ($conn_ii->connect_error) {
            die("Connection failed: " . $conn_ii->connect_error);
          }
          //Create Database Table
          $sql_create_table = "CREATE TABLE Candidates (
        id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
        Candidate_Name VARCHAR(255),
        Center_id int(2),
        Category_id int(2)
        );";
          $sql_create_table .= "CREATE TABLE Subjects (
          id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
          Subject_Name VARCHAR(255),
          Category_id int(2)
          );";
          $sql_create_table .= "CREATE TABLE Centers (
          id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
          Center_Name VARCHAR(255)
          );";
          $sql_create_table .= "CREATE TABLE Categories (
        id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
        Category_Name VARCHAR(255)
        );";

          
          //Inserting Data Into Database Tables

        if ($conn_ii->multi_query($sql_create_table) === TRUE) {
          echo "Tables  created successfully <br>";
        } else {
          echo "Error creating tables: " . $conn_ii->error;
        }
        

          

          $conn_ii->close();

          echo "Database and Tables  created successfully";
  } else {
    echo "Error creating database: " . $conn->error;
  }






  $conn->close();
  ?>
</body>

</html>