<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Insert Question</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Insert Questions</h2>
  <p>You can insert question from here....</p>
  <form method="post" action="dbcode.php">
  
    <div class="form-group">
      <label for="usr">id</label>
      <input type="number" class="form-control" name="no">
    </div>

    <div class="form-group">
      <label for="usr">Question</label>
      <input type="text" class="form-control" name="que">
    </div>

    <div class="form-group">
      <label for="usr">Option1</label>
      <input type="text" class="form-control" name="opt1">
    </div>

    <div class="form-group">
      <label for="usr">Option2</label>
      <input type="text" class="form-control" name="opt2">
    </div>

    <div class="form-group">
      <label for="usr">Option3</label>
      <input type="text" class="form-control" name="opt3">
    </div>

    <div class="form-group">
      <label for="usr">Option4</label>
      <input type="text" class="form-control" name="opt4">
    </div>

    <div class="form-group">
      <label for="usr">Answer</label>
      <input type="text" class="form-control" name="ans">
    </div>

    <div class="form-group">
      <label for="usr">marks</label>
      <input type="number" class="form-control" name="marks">
    </div>

    <input type="submit" value="submit" name="submit" class="btn-primary">


    

    
  </form>
</div>

</body>
</html>
