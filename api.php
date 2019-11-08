<?php
include ('config.php');

$return_arr = array();

class Candidates {

    

    function students_By_Category($cat) {

        $sql = "SELECT Candidates.Candidate_Name FROM Candidates 
                           where Candidates.category_id = $cat";
                           
                           $result = mysqli_query($GLOBALS['con'],$sql);
                           while($row = mysqli_fetch_array($result)){
                                               $name = $row['Candidate_Name'];
                                               
                                               
                                               
                                           
                                               $return_arr[] = array("Name" => $name,
                                                               
                                                               );
                                           }
                           echo json_encode($return_arr);
    }

    function students_And_Centers(){
        $sql = "SELECT Candidates.Candidate_Name,Centers.Center_Name FROM Candidates
            INNER JOIN Centers 
            ON Candidates.Center_id = Centers.id";
        $result = mysqli_query($GLOBALS['con'],$sql);
        while($row = mysqli_fetch_array($result)){
                            $name = $row['Candidate_Name'];
                            $center = $row['Center_Name'];
                            
                            
                        
                            $return_arr[] = array("Name" => $name,
                                            "center" => $center,
                                            );
                        }
        echo json_encode($return_arr);
    }

    function Count_student_Art(){
        $sql = "SELECT count(*) FROM Candidates where category_id=2";
                       
     $result =  $GLOBALS['conn']->query($sql);
     if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $data = $row['count(*)'];
            echo $data;
        }
      } else {
        echo "0 results";
     }
    }
    function Count_student_Science(){
        $sql = "SELECT count(*) FROM Candidates where category_id=1";
                       
     $result =  $GLOBALS['conn']->query($sql);
     if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $data = $row['count(*)'];
            echo $data;
        }
     } else {
        echo "0 results";
      }
    }

    function Count_student_Commercial(){
        $sql = "SELECT count(*) FROM Candidates where category_id=3";
                       
     $result =  $GLOBALS['conn']->query($sql);
     if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $data = $row['count(*)'];
            echo $data;
        }
     } else {
        echo "0 results";
     }
    }


    function Total(){
        $return_arr[] = array("Art" => $this->Count_student_Art(),
        "Science" => $this->Count_student_Science(),
        "Commercial" => $this->Count_student_Commercial()
        );
        echo json_encode($return_arr);
    }

   

    
}









