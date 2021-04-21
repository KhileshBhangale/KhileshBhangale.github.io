<?php
session_start(); 
include("dbconn.php");
if(isset($_POST['que'])) {
   $id = $_POST['no'];
   $question = $_POST['que'];
   $option1 = $_POST['opt1'];
   $option2 = $_POST['opt2'];
   $option3 = $_POST['opt3'];
   $option4 = $_POST['opt4'];
   $answer = $_POST['ans'];
   $marks = $_POST['marks'];
   $status = "notvisited";

   $postdata = [
        "status" => $status,
       "answer" => $answer,
       "id" => $id,
       "option1" => $option1,
       "option2" => $option2,
       "option3" => $option3,
       "option4" => $option4,
       "question" =>$question,
       "marks"=>$marks
   ];
   

  

 
   $insert_into = 'mocktest/';
   $postref = $database->getReference($insert_into+$id)->set($postdata);

if ($postref) {

   
  echo "inserted";
 
} else {
  echo "not";
  
    
}


}
else{
    echo "button";
}








?>