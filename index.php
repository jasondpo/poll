<?php 
include 'functions.php'; 
if(isset($_POST['submitPollResponseBtn'])){
    submitPollResponse();
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update poll</title>
</head>
<body>
    <!-- Values in form will have to be dynamic -->
<form action="index.php" method="post">
  <p id="pollQuestion">Please select your answer:</p>
  <input type="radio" id="html" name="poll_response" value="yes">
  <label for="html">Yes</label><br>
  <input type="radio" id="css" name="poll_response" value="no">
  <label for="css">No</label><br>
  <input type="radio" id="javascript" name="poll_response" value="maybe">
  <label for="javascript">Maybe</label>
  <br> 
  <br>   
  <input type="submit" value="Submit" name="submitPollResponseBtn">
</form>
</body>
</html>