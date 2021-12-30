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

    <style>
        #pollForm{
            max-width: 400px;
        }
    </style>
</head>
<body>

<p>NATvigADER Poll Dashboard</p>

<form id="pollForm" method="post" action="dashboard.php">
    <label for="html">Poll Question</label><br>
    <textarea id="pollQuestion" name="pollQuestion" value="">
        
    </textarea>
    <br>
    <br>
    <input type="text" id="response1" name="response1" placeholder='Response 1' value="">
    <br>
    <br>
    <input type="text" id="response2" name="response2" placeholder='Response 2' value="">
    <br>
    <br>
    <input type="text" id="response3" name="response3" placeholder='Response 3' value="">
    <br>
    <br>
    <input type="text" id="response4" name="response4" placeholder='Response 4' value="">
    <br>
    <br>
    <input type="text" id="response5" name="response5" placeholder='Response 5' value="">
    <br>
    <br>
    <input type="text" id="response6" name="response6" placeholder='Response 6' value="">
    <br>
    <br>
    <input type="text" id="response7" name="response7" placeholder='Response 7' value="">
    <br> 
    <br>   
    <input type="submit" value="Submit" name="updatePollBtn"> 
</form>  
<script src='ckeditor/ckeditor.js'></script>
<script>
    CKEDITOR.replace('pollQuestion');
</script>
<!-- <script src='js/dashboard.js'></script> -->
</body>
</html>