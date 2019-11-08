<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname="Examinations";

$conn_iii = new mysqli($servername, $username, $password, $dbname);
          if ($conn_iii->connect_error) {
            die("Connection failed: " . $conn_iii->connect_error);
          }



            //Center data 
          $sql_insert_data_center = "INSERT INTO Centers (Center_Name) VALUES ('Ikeja');";
          $sql_insert_data_center .= "INSERT INTO Centers (Center_Name) VALUES ('Yaba');";
          $sql_insert_data_center .= "INSERT INTO Centers (Center_Name) VALUES ('Victoria Island');";
          $sql_insert_data_center .= "INSERT INTO Centers (Center_Name) VALUES ('Lekki');";


         
           if ($conn_iii->multi_query($sql_insert_data_center) === TRUE ){;
            echo "Data Centers Inserted !!!";
          } else {
            echo "Error inserting data: " . $conn_iii->error;
          }
          
    

          

          $conn_iii->close();
          ?>