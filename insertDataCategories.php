<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname="Examinations";

$conn_iii = new mysqli($servername, $username, $password, $dbname);
          if ($conn_iii->connect_error) {
            die("Connection failed: " . $conn_iii->connect_error);
          }



    

          //Categories data
          $sql_insert_data_categories = "INSERT INTO Categories (Category_Name) VALUES ('Science');";
          $sql_insert_data_categories .= "INSERT INTO Categories (Category_Name) VALUES ('Art');";
          $sql_insert_data_categories .= "INSERT INTO Categories (Category_Name) VALUES ('Commercial');";


  
           if ($conn_iii->multi_query($sql_insert_data_categories) === TRUE ){;
            echo "Data Categories Inserted !!!";
          } else {
            echo "Error inserting data: " . $conn_iii->error;
          }
          
    

          

          $conn_iii->close();
          ?>