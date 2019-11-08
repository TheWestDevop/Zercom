<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname="Examinations";

$conn_iii = new mysqli($servername, $username, $password, $dbname);
          if ($conn_iii->connect_error) {
            die("Connection failed: " . $conn_iii->connect_error);
          }



          //Candidate data
          $sql_insert_data_candidates = "INSERT INTO Candidates (Candidate_Name, Center_id, Category_id) VALUES ('John', 1, 1);";
          $sql_insert_data_candidates .= "INSERT INTO Candidates (Candidate_Name, Center_id, Category_id) VALUES ('Mike', 2, 2);";
          $sql_insert_data_candidates .= "INSERT INTO Candidates (Candidate_Name, Center_id, Category_id) VALUES ('Tobi', 3, 3);";
          $sql_insert_data_candidates .= "INSERT INTO Candidates (Candidate_Name, Center_id, Category_id) VALUES ('Segun', 4, 1);";
          $sql_insert_data_candidates .= "INSERT INTO Candidates (Candidate_Name, Center_id, Category_id) VALUES ('Ayo', 1, 2);";
          $sql_insert_data_candidates .= "INSERT INTO Candidates (Candidate_Name, Center_id, Category_id) VALUES ('Tope', 2, 3);";
          $sql_insert_data_candidates .= "INSERT INTO Candidates (Candidate_Name, Center_id, Category_id) VALUES ('Friday', 3, 1);";
          $sql_insert_data_candidates .= "INSERT INTO Candidates (Candidate_Name, Center_id, Category_id) VALUES ('Musa', 4, 2);";
          $sql_insert_data_candidates .= "INSERT INTO Candidates (Candidate_Name, Center_id, Category_id) VALUES ('Amina', 1, 3);";
          $sql_insert_data_candidates .= "INSERT INTO Candidates (Candidate_Name, Center_id, Category_id) VALUES ('Uche', 2, 1);";
          
          if ($conn_iii->multi_query($sql_insert_data_candidates) === TRUE ){;
            echo "Data Candidates Inserted !!!";
          } else {
            echo "Error inserting data: " . $conn_iii->error;
          }
          
    

          

          $conn_iii->close();
          ?>