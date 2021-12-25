<?php 
include 'functions.php'; 
if(isset($_POST['updatePollBtn'])){
    updatePoll();
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poll: Dashboard</title>
</head>
<body>

<p>NATvigADER Poll Dashboard</p>

<form  method="post" action="dashboard.php">
    <label for="html">Poll Question</label>
    <input type="text" id="pollQuestion" name="pollQuestion" value=""><br>
    <label for="html">Answer 1</label>
    <input type="text" id="answer1" name="answer1" value=""><br>
    <label for="html">Answer 2</label>
    <input type="text" id="answer2" name="answer2" value=""><br>
    <label for="html">Answer 3</label>
    <input type="text" id="answer3" name="answer3" value="">
    <br> 
    <br>   
    <input type="submit" value="Submit" name="updatePollBtn"> 
</form>  

<script src='js/dashboard.js'></script>
</body>
</html>