<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname="Examinations";

$conn_iii = new mysqli($servername, $username, $password, $dbname);
          if ($conn_iii->connect_error) {
            die("Connection failed: " . $conn_iii->connect_error);
          }


          //Subject data
          $sql_insert_data_subjects = "INSERT INTO Subjects(Subject_Name,Category_id) VALUES ('Math',1);";
          $sql_insert_data_subjects .= "INSERT INTO Subjects(Subject_Name,Category_id) VALUES ('English',1);";
          $sql_insert_data_subjects .= "INSERT INTO Subjects(Subject_Name,Category_id) VALUES ('Physics',1);";
          $sql_insert_data_subjects .= "INSERT INTO Subjects(Subject_Name,Category_id) VALUES ('Chemistry',1);";
          $sql_insert_data_subjects .= "INSERT INTO Subjects(Subject_Name,Category_id) VALUES ('Biology',1);";
          $sql_insert_data_subjects .= "INSERT INTO Subjects(Subject_Name,Category_id) VALUES ('Further Math',1);";
          $sql_insert_data_subjects .= "INSERT INTO Subjects(Subject_Name,Category_id) VALUES ('ICT',1);";
          $sql_insert_data_subjects .= "INSERT INTO Subjects(Subject_Name,Category_id) VALUES ('Math',2);";
          $sql_insert_data_subjects .= "INSERT INTO Subjects(Subject_Name,Category_id) VALUES ('English',2);";
          $sql_insert_data_subjects .= "INSERT INTO Subjects(Subject_Name,Category_id) VALUES ('Tie and Dye',2);";
          $sql_insert_data_subjects .= "INSERT INTO Subjects(Subject_Name,Category_id) VALUES ('Furniture',2);";
          $sql_insert_data_subjects .= "INSERT INTO Subjects(Subject_Name,Category_id) VALUES ('Literature In English',2);";
          $sql_insert_data_subjects .= "INSERT INTO Subjects(Subject_Name,Category_id) VALUES ('Yoruba',1);";
          $sql_insert_data_subjects .= "INSERT INTO Subjects(Subject_Name,Category_id) VALUES ('ICT',1);";
          $sql_insert_data_subjects .= "INSERT INTO Subjects(Subject_Name,Category_id) VALUES ('Math',3);";
          $sql_insert_data_subjects .= "INSERT INTO Subjects(Subject_Name,Category_id) VALUES ('English',3);";
          $sql_insert_data_subjects .= "INSERT INTO Subjects(Subject_Name,Category_id) VALUES ('Accounting',3);";
          $sql_insert_data_subjects .= "INSERT INTO Subjects(Subject_Name,Category_id) VALUES ('Commerce',3);";
          $sql_insert_data_subjects .= "INSERT INTO Subjects(Subject_Name,Category_id) VALUES ('Banking',3);";
          $sql_insert_data_subjects .= "INSERT INTO Subjects(Subject_Name,Category_id) VALUES ('ICT',3);";


         
          if ($conn_iii->multi_query($sql_insert_data_subjects) === TRUE ){;
            echo "Data Subjects Inserted !!!";
          } else {
            echo "Error inserting data: " . $conn_iii->error;
          }
          
    

          

          $conn_iii->close();
          ?>