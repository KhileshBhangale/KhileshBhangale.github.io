<?php
include('dbconn.php');
$number=4;  
$id = $database->getReference($number.'/id');
$no = $id->getValue();
$status = $database->getReference($number.'/status');
$value = $status->getValue();
$que = $database->getReference($number.'/question');
$que = $que->getValue();
$op1 = $database->getReference($number.'/option1');
$option1 = $op1->getValue();
$op2 = $database->getReference($number.'/option2');
$option2 = $op2->getValue();
$op3 = $database->getReference($number.'/option3');
$option3 = $op3->getValue();
$op4 = $database->getReference($number.'/option4');
$option4 = $op4->getValue();
$mark = $database->getReference($number.'/marks');
$marks = $mark->getValue();



?>
<!DOCTYPE html>
<html>
<head>
<title>Mock Test</title>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="scss/mock.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="js/calculator.js"></script>

<script>
  
</script>
</head>

<body>
<div class="header">
  <div class= "logo">Parallel world</div>
  <div class="title" >Mock test 1</div>
</div>
<div class="subheader">
<i class="fa fa-question-circle" aria-hidden="true"></i> Question Paper
</div>

  <div style="float:left">
<section style="height :45px; background-color:#cfcece;">

<button class="calc" id="myBtn" ><i class="fa fa-calculator fa-5" aria-hidden="true"></i></button>
</section>
<section style="height :30px; border-bottom:1px solid #cfcece;">
    section 
    <B> <p id="timer" style="float:right;"></p></B>
</section>
<section style="height:37px; ">

</section>
</div>
<div class="cardbox">
<div class="card">
  <img src="images/avatar.png" alt="" class="photo">
 <span> <b>Khilesh Bhangale</b></span>
</div>
</div>
<div style="float:left;">
<section style="height:30px; border-bottom:1px solid #cfcece; border-top:3px solid #cfcece;">
<p style="color:orange;">Type:MCQ|Marks:<?php echo $marks; ?></p>
</section>
<section>
<div class="maincontainer">
<div class="container1">

</div>
<div class="container2" >
<p style="font-size:15px; margin-top:10px;"> Q.<?php echo "$no"; ?>&nbsp;<?php echo $que ?>
<p>
  <div style="margin:20px; float:left; padding:10px;">
<div class="radio"><lable><input type="radio" name="<?php echo $que ?>" id="a"><?php echo $option1 ?></lable></div>
<div class="radio"><lable><input type="radio" name="<?php echo $que ?>" id="b"><?php echo $option2 ?></lable></div>
<div class="radio"><lable><input type="radio" name="<?php echo $que ?>" id="c"><?php echo $option3 ?></lable></div>
<div class="radio"><lable><input type="radio" name="<?php echo $que ?>" id="d"><?php echo $option4 ?></lable></div>
</div>
    
</div>
</div>
</section>
</div>
<div class="quebox">
  <table class="table">
    <tr>
      <td class="td"><button style="height: 15px;width: 15px; border:none; background-color: yellow"></button>Answered</td>
      <td class="td"><button style="height: 15px;width: 15px; border:none; background-color:red"></button>Not Answered</td>
    
    </tr>
    <tr>
      <td class="td"><button style="height: 15px;width: 15px; border:none; background-color:#aaaaaa"></button>Not Visited</td>
      <td class="td"><button style="height: 15px;width: 15px; border:none; background-color:green;"></button>Marked for review</td>
    </tr>

    <tr>
      <td style=" border:none;"><button style="height: 15px;width: 15px; border:none; background-color:blue;"></button>Answered and Marked for Review</td>

      </tr>
  </table>
  <div style="background-color:rgb(45, 112, 182); width: 100%; height: 30px; padding:5px;">
  <p style="color:white;"><b>LDRI</b></p>
  </div>
  <div style="background-color:skyblue; width: 100%; height: 20px; padding:3px;">
  <p style="color:black;">Choose a Question</p>
  </div>
<div style="height: 190px; width: 230px; margin: 6px; overflow-x:auto;">
<?php
for($Question=1;$Question<=30;$Question++)
{
  
  

  
?>
<button type="button" id="colorbt<?php echo $Question ?>" class="<?php if ( $Question == $no) { echo "$value"; } else{echo "notvisited"; } ?>" ><?php echo "$Question";?></button>


<?php } ?>

</div>

</div>
  
<div class="downbar" style="float:left;">
<input type="button" value="Mark for Review & Next"class ="bookmark" onclick="reviewCheked()">
<input type="button" value="Clear Responce" class="clearbt" onclick="clearCheked()">
<input type="button" value="Save & Next" class="nextbt" onclick="saveCheked()">
</div>
<div class="submitBT">
<input class="submit" type="submit">
</div>


<div id="demo" role="dialog" class="modal fade modal-dialog">
    <b>Calculator</b>
    <button type="button" class="close" data-dismiss="modal">&times;</button>

    
    <div><input type="text" style="height: 20px;" id="I" dir="rtl" disabled></div>
    <div>
        <div>
        <input type="button" value="MC">
        <input type="button" value="M+">
        <input type="button" value="M-">
        <input type="button" value="MR">
        <input type="button" value="MS" >
        </div>
        <div>
        <input type="button" value="C" onclick="clr()">
        <input type="button" value="+-">
        <input type="button" value="/" onclick="keyPressed('/')">
        <input type="button" value="*" onclick="keyPressed('*')">
        <input type="button" value="&#8592;" onclick="remove()">
        </div>
        <div>
        <input type="button" value="7" onclick="keyPressed('7')">
        <input type="button" value="8" onclick="keyPressed('8')">
        <input type="button" value="9" onclick="keyPressed('9')">
        <input type="button" value="-" onclick="keyPressed('-')">
        <input type="button" value="%" onclick="keyPressed('/100*')">
        </div>
        <div>
        <input type="button" value="4" onclick="keyPressed('4')">
        <input type="button" value="5" onclick="keyPressed('5')">
        <input type="button" value="6" onclick="keyPressed('6')">
        <input type="button" value="+" onclick="keyPressed('+')">
        <input type="button" value="&#119909;&#8315;&#185;" onclick="keyPressed('1/')">
        </div>
       
        <div>
        <input type="button" value="1" onclick="keyPressed('1')">
        <input type="button" value="2" onclick="keyPressed('2')">
        <input type="button" value="3" onclick="keyPressed('3')">
        <input type="button" value="&#119909;&#8319;" onclick="keyPressed('**')">
        <input type="button" value="&radic;" onclick="square()">
        </div>
        <div>
        <input type="button" style="width: 66px;" value="0" onclick="keyPressed('0')">
        <input type="button" value="." onclick="keyPressed('.')">
        <input type="button" style="width: 66px;" value="=" onclick="solve()">
        </div>
</div> 


</body>
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/8.4.1/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/8.4.1/firebase-analytics.js"></script>

<script>
  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  var firebaseConfig = {
    apiKey: "AIzaSyDXOq-V_jsuQGwEubCmZj8QUVeSDiAJtV8",
    authDomain: "parallelworld-66952.firebaseapp.com",
    databaseURL: "https://parallelworld-66952-default-rtdb.firebaseio.com",
    projectId: "parallelworld-66952",
    storageBucket: "parallelworld-66952.appspot.com",
    messagingSenderId: "875609738777",
    appId: "1:875609738777:web:6baee376acd1db9791e488",
    measurementId: "G-0R52CRNVEF"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
</script>
<script>

  function buttonCheked(){
  var W = document.getElementById("a").checked;
  var X = document.getElementById("b").checked;
  var Y = document.getElementById("c").checked;
  var Z = document.getElementById("d").checked;

  if (W==true || X==true || Y==true || Z==true){
  
  return true;
    }
    else{
      return false;
    }                                         
    }


    function saveCheked() {
      var cheked = buttonCheked();
      if (cheked == true){
  
       document.getElementById('colorbt<?php echo $no ?>').className="answered";

    
    }
    else{
       document.getElementById('colorbt<?php echo $no ?>').className="notanswered";
    }  
      
    }


    function reviewCheked(){
      
      var cheked = buttonCheked();
  if (cheked == true){
  
  document.getElementById('colorbt<?php echo $no ?>').className="ansbtreview";
  
    }
    else{
      document.getElementById('colorbt<?php echo $no ?>').className="mforreview";
    }    
    }

    function clearCheked(){
      var cheked = buttonCheked();
  if (cheked == true){
    document.getElementById("a").checked=false;
    document.getElementById("b").checked=false;
    document.getElementById("c").checked=false;
    document.getElementById("d").checked=false;
  
  document.getElementById('colorbt<?php echo $no ?>').className="notanswered";
    }
    }

</script>

</html>